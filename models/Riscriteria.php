<?php namespace Gibraltarsf\Pmo\Models;

use Model;

/**
 * Model
 */
class Riscriteria extends Model
{
    use \Winter\Storm\Database\Traits\Validation;
    

    /**
     * @var string The database table used by the model.
     */
    public $table = 'gibraltarsf_pmo_riscriterias';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
    
    /**
     * @var array Attribute names to encode and decode using JSON.
     */
    public $jsonable = [];
}
