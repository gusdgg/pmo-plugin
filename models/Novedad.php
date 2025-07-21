<?php namespace Gibraltarsf\Pmo\Models;

use Model;

/**
 * Model
 */
class Novedad extends Model
{
    use \Winter\Storm\Database\Traits\Validation;
    

    /**
     * @var string The database table used by the model.
     */
    public $table = 'gibraltarsf_pmo_novedades';

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
        'etapa' => ['Gibraltarsf\Pmo\Models\Etapa', 'key' => 'etapa_id', 'otherKey' => 'id'],
    ];


}
