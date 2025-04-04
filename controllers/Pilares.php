<?php namespace Gibraltarsf\Pmo\Controllers;

use Backend\Classes\Controller;
use BackendMenu;

class Pilares extends Controller
{
    public $implement = [        'Backend\Behaviors\ListController',        'Backend\Behaviors\FormController'    ];
    
    public $listConfig = 'config_list.yaml';
    public $formConfig = 'config_form.yaml';

    public $requiredPermissions = [
        'gibraltarsf.pmo.pilares' 
    ];

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('Gibraltarsf.Pmo', 'main-menu-pmo', 'side-menu-tablas');
    }

    public function update($recordId, $context = null)
    {

        if ($this->user->hasAccess('gibraltarsf.pmo.pilares.abm')) {
            // Call the FormController behavior update() method
            return $this->asExtension('FormController')->update($recordId, $context);

        }
        return Backend::redirect('gibraltarsf/pmo/pilares/preview/' . $recordId);

    }



}
