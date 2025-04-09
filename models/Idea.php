<?php namespace Gibraltarsf\Pmo\Models;

use Model;
use Backend\Models\User;
use Gibraltarsf\Pmo\Models\Pilar;

use Gibraltarsf\Pmo\Models\Valcriteria;
use Gibraltarsf\Pmo\Models\Riscriteria;
use DB;
use Backend\Facades\BackendAuth;

/**
 * Model
 */
class Idea extends Model
{
    use \Winter\Storm\Database\Traits\Validation;
    

    /**
     * @var string The database table used by the model.
     */
    public $table = 'gibraltarsf_pmo_ideas';

    /**
     * @var array Validation rules
     */
    public $rules = [
        'name' => 'required|unique:gibraltarsf_pmo_ideas',
        'code' => 'required|unique:gibraltarsf_pmo_ideas',
    ];
    
    public $customMessages = [
        'required' => 'Debe completar el atributo :attribute.',

    ];
    
    /**
     * @var array Attribute names to encode and decode using JSON.
     */
    public $jsonable = [];

    public $belongsTo = [
        'creator' => [User::class, 'key' => 'created_by', 'otherKey' => 'id'],
        'requestor' => [User::class, 'key' => 'requestor_id', 'otherKey' => 'id'],
        'pilar' => [Pilar::class, 'key' => 'pilar_id', 'otherKey' => 'id'],
        'supervisor' => [User::class, 'key' => 'supervisor_id', 'otherKey' => 'id'],
        'pm' => [User::class, 'key' => 'pm_id', 'otherKey' => 'id'],
        'sponsor' => [User::class, 'key' => 'sponsor_id', 'otherKey' => 'id'],
    ];

    public $belongsToMany = [
        'valueweights' => [
            'Gibraltarsf\Pmo\Models\Valcriteria',
            'table'    => 'gibraltarsf_pmo_idea_value',
            'key'      => 'idea_id',
            'otherKey' => 'valcriteria_id',
            'pivot' => ['score_id'],
            'timestamps' => true,
            'delete' => true
        ],
        'riskweights' => [
            'Gibraltarsf\Pmo\Models\Riscriteria',
            'table'    => 'gibraltarsf_pmo_idea_risk',
            'key'      => 'idea_id',
            'otherKey' => 'riscriteria_id',
            'pivot' => ['score_id'],
            'timestamps' => true,
            'delete' => true
        ]
    ];

    public $morphMany = [
        'riesgos' => ['Gibraltarsf\Pmo\Models\Riesgo', 
                       'name' => 'riskable']
    ];

    
    public function beforeCreate()
    {
        $this->created_by = BackendAuth::getUser()->id;
        $this->status = 'Borrador';
    }


    /**
     * Insert ther records for the valaues and risk to criterias
     */
    public function afterCreate()
    {
    
        $idea_id = $this->id;
        $values = Valcriteria::all();
        $risks = Riscriteria::all();

        $this->valueweights()->sync($values);
        $this->riskweights()->sync($risks);

    }

    public function getRiskScoreAttribute()
    {
        // calculo el máximo posible de la suma de los pesos de los criterios de valor

        $max_risk_score = Riscriteria::sum('weight') * Score::max('value');

        $risk_score = Idea::whereRaw('gibraltarsf_pmo_ideas.id = ?', [$this->id])
        ->join('gibraltarsf_pmo_idea_risk', 'gibraltarsf_pmo_ideas.id', '=', 'gibraltarsf_pmo_idea_risk.idea_id')
        ->join('gibraltarsf_pmo_riscriterias', 'gibraltarsf_pmo_idea_risk.riscriteria_id', '=', 'gibraltarsf_pmo_riscriterias.id')
        ->join('gibraltarsf_pmo_scores', 'gibraltarsf_pmo_idea_risk.score_id', '=', 'gibraltarsf_pmo_scores.id')
        ->sum(DB::raw('gibraltarsf_pmo_riscriterias.weight * gibraltarsf_pmo_scores.value') );

        return round($risk_score / ($max_risk_score ? $max_risk_score : 1) * 100, 2);
    }

    public function getValueScoreAttribute()
    {
        
        $max_value_score = Valcriteria::sum('weight') * Score::max('value');

        $value_score = Idea::whereRaw('gibraltarsf_pmo_ideas.id = ?', [$this->id])
        ->join('gibraltarsf_pmo_idea_value', 'gibraltarsf_pmo_ideas.id', '=', 'gibraltarsf_pmo_idea_value.idea_id')
        ->join('gibraltarsf_pmo_valcriterias', 'gibraltarsf_pmo_idea_value.valcriteria_id', '=', 'gibraltarsf_pmo_valcriterias.id')
        ->join('gibraltarsf_pmo_scores', 'gibraltarsf_pmo_idea_value.score_id', '=', 'gibraltarsf_pmo_scores.id')
        ->sum(DB::raw('gibraltarsf_pmo_valcriterias.weight * gibraltarsf_pmo_scores.value') );

        return round($value_score / ($max_value_score ? $max_value_score : 1) * 100, 2);
    }
}

/*

SELECT sum(valor.weight * score.value) as puntuacion
FROM `gibraltarsf_pmo_ideas` ideas
left join gibraltarsf_pmo_idea_value iv on iv.idea_id = ideas.id
join gibraltarsf_pmo_valcriterias valor on valor.id = iv.valcriteria_id
join gibraltarsf_pmo_scores score on iv.score_id = score.id
WHERE ideas.id = 1;

*/
