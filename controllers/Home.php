<?php namespace Gibraltarsf\Pmo\Controllers;

use Backend\Classes\Controller;
use BackendMenu;


class Home extends Controller
{
    public $implement = [];
    
    public $requiredPermissions = ['gibraltarsf.pmo'];

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('Gibraltarsf.Pmo', 'main-menu-pmo');

        // Include framework extras.
        $this->addJs('/modules/system/assets/js/framework.extras.js');
        $this->addCss('/modules/system/assets/css/framework.extras.css');

        
    }

    public function index()    // <=== Action method
    {

        //Cargo el js para mqtt
        $this->addJs('/plugins/gibraltarsf/importaciones/assets/js/mqttws31.js');
        $this->addJs('/plugins/gibraltarsf/importaciones/assets/js/realtime.js');

    }




}



