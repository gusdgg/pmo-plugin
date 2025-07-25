<?php namespace Gibraltarsf\Pmo\Models;

use Model;

/**
 * Model
 */
class Etapa extends Model
{
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


}
