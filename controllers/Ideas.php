<?php namespace Gibraltarsf\Pmo\Controllers;

use Backend\Classes\Controller;
use BackendMenu;

class Ideas extends Controller
{
    public $implement = [        'Backend\Behaviors\ListController',        'Backend\Behaviors\FormController', 
    'Backend\Behaviors\RelationController'   ];
    //, 'Backend\Behaviors\ImportExportController'    ];
    
    public $listConfig = 'config_list.yaml';
    public $formConfig = 'config_form.yaml';
    public $relationConfig = 'config_relation.yaml';
    //public $importExportConfig = 'config_import_export.yaml';

    public $requiredPermissions = [
        'gibraltarsf.pmo.ideas' 
    ];

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('Gibraltarsf.Pmo', 'main-menu-pmo', 'side-menu-ideas');
    }

    public function onChangeValScore($idea_id)
    {
        $data = post();
        $value = $data['value_id'];
        $score = $data['score_id'];

        $ideaDb = $this->formFindModelObject($idea_id);
        $ideaDb->valueweights()->updateExistingPivot($value, ['score_id' => $score]);
        $ideaDb->save();

        $view = $this->makePartial('value_score', ['model' => $ideaDb]);
        return array("#Form-field-Idea-_value_score-group" => $view);
      
    }

    public function onChangeRiskScore($idea_id)
    {
        $data = post();
        $risk = $data['risk_id'];
        $score = $data['score_id'];

        $ideaDb = $this->formFindModelObject($idea_id);
        $ideaDb->riskweights()->updateExistingPivot($risk, ['score_id' => $score]);
        $ideaDb->save();

        $view = $this->makePartial('risk_score', ['model' => $ideaDb]);
        return array("#Form-field-Idea-_risk_score-group" => $view);
      
    }    
}
