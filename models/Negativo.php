<?php namespace Gibraltarsf\Pmo\Models;

use Model;

/**
 * Model
 */
class Negativo extends Model
{
    use \Winter\Storm\Database\Traits\Validation;
    

    /**
     * @var string The database table used by the model.
     */
    public $table = 'gibraltarsf_pmo_negativos';

    /**
     * @var array Validation rules
     */
    public $rules = [
        'name' => 'required|unique:gibraltarsf_pmo_negativos',
    ];

    public $customMessages = [
        'required' => 'Debe completar el atributo :attribute.',
        'unique' => 'Ya existe un efecto negativo con el nombre :input.',
    ];
}
