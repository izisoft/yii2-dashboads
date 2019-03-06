<?php
/**
* Set base controller for this module, all controller extends this.
*
**/
namespace izi\dashboard\controllers;
 
use yii\filters\VerbFilter;
use yii\filters\AccessControl;

class ControllerBase extends \yii\web\Controller
{
    public $layout = 'main';
    
    
    public function behaviors()
    {        
        return [             
            'access' => [
                'class' => AccessControl::className(),                
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                    'logout' => ['POST'],
                ],
            ],
        ];
    }
}
