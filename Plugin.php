<?php namespace Gibraltarsf\Pmo;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function registerComponents()
    {
    }

    public function registerSettings()
    {
    }

    public function registerListColumnTypes()
    {
        return [
            // A local method, i.e $this->evalUppercaseListColumn()
            'icon' => [$this, 'evalIconListColumn'],
         ];
    }
    
    public function evalIconListColumn($value, $column, $record)
    {
        return '<i class="'.$value.'"></i>';
    }    
}
