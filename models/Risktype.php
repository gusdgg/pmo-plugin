<?php namespace Gibraltarsf\Pmo\Models;

use Model;
use Gibraltarsf\Pmo\Models\Riesgo;

/**
 * Model
 */
class Risktype extends Model
{
    use \Winter\Storm\Database\Traits\Validation;
    

    /**
     * @var string The database table used by the model.
     */
    public $table = 'gibraltarsf_pmo_risktypes';

    /**
     * @var array Validation rules
     */
    public $rules = [
        'name' => 'required|unique:gibraltarsf_pmo_risktypes',
    ];
    

    public $customMessages = [
        'required' => 'Debe completar el atributo :attribute.',
        'unique' => 'Ya existe un tipo de riesgo con el nombre :input.',
    ];    
    
    /**
     * @var array Attribute names to encode and decode using JSON.
     */
    public $jsonable = [];

    public $hasMany = [
        'riesgos' => [Riesgo::class, 'key' => 'risktype_id', 'otherKey' => 'id'],
    ];
}
