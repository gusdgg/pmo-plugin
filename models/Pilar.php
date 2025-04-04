<?php namespace Gibraltarsf\Pmo\Models;

use Model;

/**
 * Model
 */
class Pilar extends Model
{
    use \Winter\Storm\Database\Traits\Validation;
    

    /**
     * @var string The database table used by the model.
     */
    public $table = 'gibraltarsf_pmo_plilares';

    /**
     * @var array Validation rules
     */
    public $rules = [
        'name' => 'required|unique:gibraltarsf_pmo_pilares',
        'short' => 'required|unique:gibraltarsf_pmo_pilares',
    ];
    

    public $customMessages = [
        'required' => 'Debe completar el atributo :attribute.',
        'unique' => 'Ya existe un pilar con el nombre :input.',
    ];    


    /**
     * @var array Attribute names to encode and decode using JSON.
     */
    public $jsonable = [];
}
