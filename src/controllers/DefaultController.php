<?php
namespace izi\dashboard\controllers;

use Yii; 

/**
 * 
 */
class DefaultController extends ControllerBase
{
    
    
    public function actionIndex()
    {      
        return $this->render('index');
    }
             
}
