<?php namespace Gibraltarsf\Pmo\Models;

use Model;

/**
 * Model
 */
class Score extends Model
{
    use \Winter\Storm\Database\Traits\Validation;
    

    /**
     * @var string The database table used by the model.
     */
    public $table = 'gibraltarsf_pmo_scores';

    /**
     * @var array Validation rules
     */
    public $rules = [
        'name' => 'required|unique:gibraltarsf_pmo_scores',
        'value' => 'required|numeric|min:0|max:100',
    ];
    

    public $customMessages = [
        'required' => 'Debe completar el atributo :attribute.',
        'unique' => 'Ya existe una puntuación con el nombre :input.',
    ];    
    
    /**
     * @var array Attribute names to encode and decode using JSON.
     */
    public $jsonable = [];
}
