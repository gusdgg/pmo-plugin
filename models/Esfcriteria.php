<?php namespace Gibraltarsf\Pmo\Models;

use Model;

/**
 * Model
 */
class Esfcriteria extends Model
{
    use \Winter\Storm\Database\Traits\Validation;
    

    /**
     * @var string The database table used by the model.
     */
    public $table = 'gibraltarsf_pmo_esfcriterias';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

    public $belongsToMany = [
        'idea' => [
            'Gibraltarsf\Pmo\Models\Idea',
            'table'    => 'gibraltarsf_pmo_idea_value',
            'key'      => 'valcriteria_id',
            'otherKey' => 'idea_id',
            'pivot' => ['score_id'],
            'timestamps' => true
        ],
        'score_tooltips' => [
            'Gibraltarsf\Pmo\Models\Score',
            'table'    => 'gibraltarsf_pmo_criteria_score',
            'key'      => 'esfcriteria_id',
            'otherKey' => 'score_id',
            'pivot' => ['tooltip'],
            'timestamps' => true
            //'delete' => true
        ],        
    ];


    
}
