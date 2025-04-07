<?php namespace Gibraltarsf\Pmo\Controllers;

use Backend\Classes\Controller;
use BackendMenu;

class Valcriterias extends Controller
{
    public $implement = [        'Backend\Behaviors\ListController',        'Backend\Behaviors\FormController' ,
    'Backend\Behaviors\RelationController'   ];
    //, 'Backend\Behaviors\ImportExportController'    ];
    
    public $listConfig = 'config_list.yaml';
    public $formConfig = 'config_form.yaml';
    public $relationConfig = 'config_relation.yaml';
    //public $importExportConfig = 'config_import_export.yaml';

    public $requiredPermissions = [
        'gibraltarsf.pmo.tablas' 
    ];

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('Gibraltarsf.Pmo', 'main-menu-pmo', 'side-menu-tablas');
    }
}
