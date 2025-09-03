<?php namespace Gibraltarsf\Pmo\Controllers;

use Backend\Classes\Controller;
use BackendMenu;
use Carbon\Carbon;
use Lang;
use DB;
use Flash;
use Gibraltarsf\Pmo\Models\Etapa;

class Etapas extends Controller
{
    public $implement = [        'Backend\Behaviors\ListController',        'Backend\Behaviors\FormController',        'Backend\Behaviors\ReorderController'    ];
    
    public $listConfig = 'config_list.yaml';
    public $formConfig = 'config_form.yaml';
    public $reorderConfig = 'config_reorder.yaml';

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('Gibraltarsf.Pmo', 'main-menu-pmo', 'side-menu-tablas');
    }

    public function listInjectRowClass($etapa, $definition)
    {
        $class = '';

        if ($etapa->getChildren()->count() > 0 || ($etapa->inicio == null && $etapa->fin == null)) {
            $class .= 'important';
        }
        else {
            // Solo para las etapas que no tienen hijos
            // valido los inicios y finales para que si son null traigan una fecha minima
            $inicio = $etapa->inicio ? $etapa->inicio : Carbon::createFromDate(1970, 1, 1);
            $fin = $etapa->fin ? $etapa->fin : Carbon::createFromDate(1900, 1, 1);
            // reviso si el inico o el final eestan atrasados respecto de hoy 
            if (($inicio->lt(Carbon::today()) && is_null($etapa->inicio_real)) || ($fin->lt(Carbon::today()) && is_null($etapa->fin_real))) {
                $class .= ' negative';
            }
            // si está termnada entonces la tachamos
            if ($etapa->avance == 100) {
                $class .= ' strike';
            }
        }

    
        return $class;
    }

        // SCOREBOARD

        public function onPreSearch(){

            // Capturo el llamado de la busqueda para filtrar el scoreboard
            // para colgarme del fire del evento e inyectar las actualizaciones del scoreboard.
            // esto lo hago indicando en el config_list que search utiliza
            // mi partial _pre_search que llama a esta funcion en lugar de la original
            // que la llamo al final
    
            $this->makeLists();
    
            if ($searchWidget =  $this->widget->listToolbar->getSearchWidget()) {
    
                    $searchWidget->bindEvent('search.submit', function() {
    
                        $view = $this->renderScoreboard();
                        return [
                            '#scoreboard' => $view
                        ];
                  });
            }
    
            //llamo el onSubmit original
            return $searchWidget->onSubmit();
        }
    
        public function listFilterExtendScopes(\Backend\Widgets\Filter $filter)
        {
    
            $filter->bindEvent('filter.update', function () {
                $view = $this->renderScoreboard();
                return [
                    '#scoreboard' => $view
                ];
            });
    
        
        }
    
    
        public function renderScoreboard()
        {
        
            if (! $this->asExtension('ListController')->listGetWidget()){
                $this->makeLists();
            }
            
            $listWidget = $this->asExtension('ListController')->listGetWidget();
    
            $query = $listWidget->prepareQuery();  // esto aplica los filtros en el query v > 430
            //$query = $listWidget->prepareModel();  // esto aplica los filtros en el query (v 416)
    
            //guardo el query original para cuentas
            $original_query =  clone $query;
    
            // reseteo el order que viene por default porque par la suma no me interesa perder tiempo
            // en order
    
            $underQuery = $query->getQuery();
            $underQuery->orders = null;
            $query->setQuery($underQuery);
    
            // Siras Count
    
            //$sirasCount = $query->distinct('gibraltarsf_importaciones_ysiras.sira')->count('sira');   
            $sirasCount = $query->count('id');   
    
            // Money total
    /*
            $totalizador = $query->select(DB::raw('sum(gibraltarsf_importaciones_declaraciones.total_fob_dol) as importe, 
                sum(gibraltarsf_importaciones_declaraciones.total_fob) as original, 
                sum(gibraltarsf_importaciones_declaraciones.total_fob_dol + 
                coalesce(gibraltarsf_importaciones_declaraciones.seguro_dol,0) + 
                coalesce(gibraltarsf_importaciones_declaraciones.flete_dol,0) ) as total_cif '))        
            ->get()->first();   
            
            $total_monto = $totalizador->importe;
            $total_original = $totalizador->original;
            $total_cif = $totalizador->total_cif;
    */
            // total de pedidos web :TODO
            //$orderWebCount = 0 $query->where('pais_procedencia','CHINA')->count();
            
    
            // revision pendiente
            /*
            $query = $listWidget->prepareQuery();
    
            // reseteo el order que viene por default porque puede traer campos que no estan en el proximo
            // query y dan error
            // to Laravel 7 and above, you can use the built-in reorder()
            $underQuery = $query->getQuery();
            $underQuery->orders = null;
            $query->setQuery($underQuery);
    
            // SACAR DE LA CONFIGURACION DEL MYSQL LA VARIABLE:
            // Open phpmyadmin & select localhost
            // Click on menu Variables & scroll down for sql mode
            // Click on edit button to change the values & remove ONLY_FULL_GROUP_BY & click on save.
            // :TODO
            */
                   
            /*$orderStGroup = $query->select('pais_procedencia', DB::raw('sum(fob_total_dol) as totalproc'))
                     ->groupBy('pais_procedencia')
                     ->orderByRaw('SUM(fob_total_dol) DESC')
                     ->take(3)
                     ->get();
    */       
            
    
            // Destinaciones
      /*
            $query = $listWidget->prepareQuery();        
    
            // reseteo el order que viene por default 
            // to Laravel 7 and above, you can use the built-in reorder()
            $underQuery = $query->getQuery();
            $underQuery->orders = null;
            $query->setQuery($underQuery);
    */
            
    
            /*$orderDestino = $query->select('destino', DB::raw('sum(fob_total_dol) as totaldest'))
                     ->groupBy('destino')
                     ->orderByRaw('SUM(fob_total_dol) DESC')
                     ->take(3)
                     ->get();
             */       
    
            // traigo todos los hitos que no tienen hijos
            //$hitosCount = Etapa::where('nest_right', null)->count();
            
            $roots = Etapa::getAllRoot();

            // sumo todos los children final de cada uno
            $hitosCount = 0;
            foreach ($roots as $root) {
                $hitosCount += $root->leaves()->count();
            }
            
            // calculo de la duracion total del proyecto
            $dias = 0;
            $minimo = Etapa::whereNotNull('inicio')->orderBy('inicio', 'asc')->first();
            $min_inicio = $minimo ? $minimo->inicio : null;
            
            $maximo = Etapa::whereNotNull('fin')->orderBy('fin', 'desc')->first();
            $max_fin = $maximo ? $maximo->fin : null;

            
            if ($min_inicio && $max_fin) {
                $dias = $max_fin->diffInDaysFiltered(function(\Carbon\Carbon $date) {
                    return !($date->isSaturday() || $date->isSunday());
                        //return !( $date->isSunday());
                    }, $min_inicio);
            }

            // calculo de avance total
            $avance = 0;
            $duracionTotal = 0;

            foreach ($roots as $root) {
                $duracion = $root->getDuracion();
                $parcial = $root->getAvance();

                $avance += ($parcial * $duracion) / 100;
                $duracionTotal += $duracion;
            }

            $avance = round($avance / ($duracionTotal? $duracionTotal : 1) * 100) ;


            /**
             * Calculo SPI y CPI
             * Índice de rendimiento de costos - Cost Performance Index (CPI) se calcula como CPI = EV / AC
             * Índice de rendimiento del cronograma - Schedule Performance Index (SPI) se calcula como SPI = EV / PV
             * 
             */

            $ev = 0;
            $ac = 0;
            $pv = 0;
            foreach ($roots as $root) {
                $ev += $root->getEV();
                $ac += $root->getAC();
                $pv += $root->getPV();
            }
            \Log::info('ev: ' . $ev);
            \Log::info('ac: ' . $ac);
            \Log::info('pv: ' . $pv);

            $spi = round($pv > 0 ? (1 - ($ev / $pv)) * 100: 0, 2);
            $cpi = round($ac > 0 ? (1 - ($ev / $ac)) * 100: 0, 2);

            $data = array(
                        "hitosCount" => $hitosCount,
                        "duracionProyecto" => $dias,
                        "avance" => $avance,
                        "spi" => $spi,
                        "cpi" => $cpi,
                    );
    
            $view = $this->makePartial('scoreboard', $data);
    
            return $view;       
        }
    
    
        public function index()
        {
        //
        // Do any custom code here
        //
    
            if (! $this->asExtension('ListController')->listGetWidget()){
                $this->makeLists();
            }
        
            $searchWidget =  $this->widget->listToolbar->getSearchWidget();
            $this->prepareSearchVars($searchWidget);
    
            // Call the ListController behavior index() method
            $this->getClassExtension('Backend.Behaviors.ListController')->index();
    
             $this->bodyClass = 'compact-container';
        }
    
        /**
         * Prepares the view data
         */
        public function prepareSearchVars($searchWidget)
        {
            $this->vars['cssClasses'] = implode(' ', $searchWidget->cssClasses);
            $this->vars['placeholder'] = Lang::get($searchWidget->prompt);
            $this->vars['value'] = $searchWidget->getActiveTerm();
            $this->vars['name'] = $searchWidget->getName();
        }
        

}
