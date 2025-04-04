<?php namespace Gibraltarsf\Pmo\Controllers;


use Backend\Classes\Controller;
use BackendMenu;


class Tablas extends Controller
{
    public $implement = [];
    
    public $requiredPermissions = ['gibraltarsf.pmo.tablas'];

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('Gibraltarsf.Pmo', 'main-menu-pmo', 'side-menu-tablas');
        // Include framework extras.
        $this->addJs('/modules/system/assets/js/framework.extras.js');
        $this->addCss('/modules/system/assets/css/framework.extras.css');


    }

    public function index()    // <=== Action method
    {




    }


}