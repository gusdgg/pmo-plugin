<?php namespace Gibraltarsf\Pmo\Models;

use Model;

/**
 * Model
 */
class Nivel extends Model
{
    use \Winter\Storm\Database\Traits\Validation;
    

    /**
     * @var string The database table used by the model.
     */
    public $table = 'gibraltarsf_pmo_niveles';

    /**
     * @var array Validation rules
     */
    public $rules = [
        'name' => 'required|unique:gibraltarsf_pmo_niveles',
    ];

    public $customMessages = [
        'required' => 'Debe completar el atributo :attribute.',
        'unique' => 'Ya existe un nivel con el nombre :input.',
    ];
}
