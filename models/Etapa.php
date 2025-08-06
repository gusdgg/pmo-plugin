<?php namespace Gibraltarsf\Pmo\Models;

use Model;


/**
 * Model
 */
class Etapa extends Model
{
    use \Winter\Storm\Database\Traits\NestedTree;
    use \Winter\Storm\Database\Traits\Validation;
    

    /**
     * @var string The database table used by the model.
     */
    public $table = 'gibraltarsf_pmo_etapas';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
    
    /**
     * @var array Attribute names to encode and decode using JSON.
     */
    public $jsonable = [];

    public $belongsTo = [
        'idea' => ['Gibraltarsf\Pmo\Models\Idea', 'key' => 'idea_id', 'otherKey' => 'id'],
    ];

    public $hasMany = [
        'novedades' => ['Gibraltarsf\Pmo\Models\Novedad', 'key' => 'etapa_id', 'otherKey' => 'id', 'delete' => true],
    ];

    public $dates = ['inicio', 'fin', 'inicio_real', 'fin_real'];


 /**
     * Returns an array with possible parent categories.
     *
     * If we are in create mode (no id) all categories are returned.
     * If an id is set, we need to exclude the current node itself to
     * prevent an infinite parent-child relationship.
     *
     * @return array
     */
    public function getParentOptions()
    {
        $options = [
            // null key for "no parent"
     //       null => '( Sin tarea resumen )',
        ];

        // In edit mode, exclude the node itself.
        $items = $this->id ? Etapa::withoutSelf()->get() : Etapa::getAll();
        $items->each(function ($item) use (&$options) {
            return $options[$item->id] = sprintf('%s %s', str_repeat('--', $item->getLevel()), $item->nombre);
        });

        return $options;
    }



    public function getAvance()
    {

        $children = $this->getChildren();

        if ($children->count() == 0) {
            return $this->avance;
        }
        // acumuulo la duracion de todas las tareas children
        $avance = 0;
        $duracion = 0;
        $children->each(function($child) use (&$avance, &$duracion) {
            $avance += $child->getDuracion() * ($child->getAvance() / 100);
            $duracion += $child->getDuracion();
        });

        return round($avance / ($duracion? $duracion : 1) * 100) ;

    }


    public function getDuracion()
    {
        $dias = 0;
        $children = $this->getChildren();

        if ($children->count() == 0)  {
            // HITOS
            if ($this->fin && $this->inicio) {
                $dias = $this->fin->diffInDaysFiltered(function(\Carbon\Carbon $date) {
                    return !($date->isSaturday() || $date->isSunday());
                    //return !( $date->isSunday());
                }, $this->inicio);            
            }
        }
        else {
            // TAREAS RESUMEN
            // Busco el minimo y el maximo de las fechas de inicio y fin
            $min_inicio = $children->min('inicio');
            $max_fin = $children->max('fin');
            if ($min_inicio && $max_fin) {
                $dias = $max_fin->diffInDaysFiltered(function(\Carbon\Carbon $date) {
                    return !($date->isSaturday() || $date->isSunday());
                        //return !( $date->isSunday());
                    }, $min_inicio);
            }
        }

        return $dias;

    }

}
