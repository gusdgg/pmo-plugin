<?php namespace Gibraltarsf\Pmo\Models;

use Model;
use Backend\Models\User;
use Gibraltarsf\Pmo\Models\Pilar;
use Backend\Facades\BackendAuth;

/**
 * Model
 */
class Idea extends Model
{
    use \Winter\Storm\Database\Traits\Validation;
    

    /**
     * @var string The database table used by the model.
     */
    public $table = 'gibraltarsf_pmo_ideas';

    /**
     * @var array Validation rules
     */
    public $rules = [
        'name' => 'required|unique:gibraltarsf_pmo_ideas',
        'code' => 'required|unique:gibraltarsf_pmo_ideas',
    ];
    
    public $customMessages = [
        'required' => 'Debe completar el atributo :attribute.',

    ];
    
    /**
     * @var array Attribute names to encode and decode using JSON.
     */
    public $jsonable = [];

    public $belongsTo = [
        'creator' => [User::class, 'key' => 'created_by', 'otherKey' => 'id'],
        'requestor' => [User::class, 'key' => 'requestor_id', 'otherKey' => 'id'],
        'pilar' => [Pilar::class, 'key' => 'pilar_id', 'otherKey' => 'id'],
        'supervisor' => [User::class, 'key' => 'supervisor_id', 'otherKey' => 'id'],
        'pm' => [User::class, 'key' => 'pm_id', 'otherKey' => 'id'],
        'sponsor' => [User::class, 'key' => 'sponsor_id', 'otherKey' => 'id'],
    ];

    
    public function beforeCreate()
    {
        $this->created_by = BackendAuth::getUser()->id;
        $this->status = 'Borrador';
    }


}
