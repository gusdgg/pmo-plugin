<?php namespace Gibraltarsf\Pmo\Controllers;

use Backend\Classes\Controller;
use BackendMenu;

class Roles extends Controller
{
    public $implement = [        'Backend\Behaviors\ListController',        'Backend\Behaviors\FormController'    ];
    
    public $listConfig = 'config_list.yaml';
    public $formConfig = 'config_form.yaml';

    public $requiredPermissions = [
        'gibraltarsf.pmo.tablas' 
    ];

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('Gibraltarsf.Pmo', 'main-menu-pmo', 'side-menu-tablas');
    }

    public function update($recordId, $context = null)
    {
        if ($this->user->hasAccess('gibraltarsf.pmo.roles.abm')) {
            return $this->asExtension('FormController')->update($recordId, $context);
        }
        return Backend::redirect('gibraltarsf/pmo/roles/preview/' . $recordId);
    }
}
