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
    public $table = 'gibraltarsf_pmo_pilares';

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

    /*
    public function getPilarOptions($value, $formData)
    {
        
            $options = array();
            $pilares = Pilar::orderBy('name')->get();
            foreach ($pilares as $pilar) {
                $options[$pilar->id] = [$pilar->name , 'icon-circle  ' . $pilar->color];
            }
            
            return $options;
            
    }
    */

    public $hasMany = [
        'personas' => [\Gibraltarsf\Pmo\Models\Person::class, 'key' => 'pilar_id', 'otherKey' => 'id'],
    ];
}
