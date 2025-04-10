<?php namespace Gibraltarsf\Pmo\Models;

use Model;

/**
 * Model
 */
class Person extends Model
{
    use \Winter\Storm\Database\Traits\Validation;
    

    /**
     * @var string The database table used by the model.
     */
    public $table = 'gibraltarsf_pmo_persons';

    /**
     * @var array Validation rules
     */
    public $rules = [
        'last_name' => 'required',
        'first_name' => 'required',
    ];
    
    /**
     * @var array Attribute names to encode and decode using JSON.
     */
    public $jsonable = [];

    protected $fillable = [
        'id',
        'user_id',
        'last_name',
        'first_name',
        'pilar_id',
        'inmediato_id',
        'supervisor_id',
        'gerente_id',
        'role_id',
    ];
    

    public $belongsTo = [
        'rol' => [\Gibraltarsf\Pmo\Models\Role::class, 'key' => 'role_id', 'otherKey' => 'id'],
        'pilar' => [\Gibraltarsf\Pmo\Models\Pilar::class, 'key' => 'pilar_id', 'otherKey' => 'id'],
        'inmediato' => [\Gibraltarsf\Pmo\Models\Person::class, 'key' => 'inmediato_id', 'otherKey' => 'id'],
        'supervisor' => [\Gibraltarsf\Pmo\Models\Person::class, 'key' => 'supervisor_id', 'otherKey' => 'id'],
        'gerente' => [\Gibraltarsf\Pmo\Models\Person::class, 'key' => 'gerente_id', 'otherKey' => 'id'],
    ];

    public function getFullNameAttribute()
    {
        return (trim($this->first_name) . ' ' . trim($this->last_name));
    }

    public function getPersonOptions()
    {
        return self::all()->pluck('full_name', 'id')->toArray();
    }
}
