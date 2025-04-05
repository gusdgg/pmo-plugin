<?php namespace Gibraltarsf\Pmo\Models;

use Model;
use Backend\Models\User;
use Gibraltarsf\Pmo\Models\Risktype;

/**
 * Model
 */
class Riesgo extends Model
{
    use \Winter\Storm\Database\Traits\Validation;
    

    /**
     * @var string The database table used by the model.
     */
    public $table = 'gibraltarsf_pmo_riesgos';

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
        'risktype' => [Risktype::class, 'key' => 'risktype_id', 'otherKey' => 'id'],
        'owner' => [User::class, 'key' => 'owner_id', 'otherKey' => 'id'],
    ];
}
