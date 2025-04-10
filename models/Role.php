<?php namespace Gibraltarsf\Pmo\Models;

use Model;

/**
 * Model
 */
class Role extends Model
{
    use \Winter\Storm\Database\Traits\Validation;
    

    /**
     * @var string The database table used by the model.
     */
    public $table = 'gibraltarsf_pmo_roles';

    /**
     * @var array Validation rules
     */
    public $rules = [
        'name' => 'required|unique:gibraltarsf_pmo_roles',
    ];
    

    public $customMessages = [
        'required' => 'Debe completar el atributo :attribute.',
        'unique' => 'Ya existe un rol con el nombre :input.',
    ];    
    /**
     * @var array Attribute names to encode and decode using JSON.
     */
    public $jsonable = [];

    public $hasMany = [
        'personas' => [\Gibraltarsf\Pmo\Models\Person::class, 'key' => 'role_id', 'otherKey' => 'id'],
    ];
}
