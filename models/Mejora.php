<?php namespace Gibraltarsf\Pmo\Models;

use Model;

/**
 * Model
 */
class Mejora extends Model
{
    use \Winter\Storm\Database\Traits\Validation;
    

    /**
     * @var string The database table used by the model.
     */
    public $table = 'gibraltarsf_pmo_mejoras';

    /**
     * @var array Validation rules
     */
    public $rules = [
        'name' => 'required|unique:gibraltarsf_pmo_mejoras',
    ];

    public $customMessages = [
        'required' => 'Debe completar el atributo :attribute.',
        'unique' => 'Ya existe una mejora con el nombre :input.',
    ];
}
