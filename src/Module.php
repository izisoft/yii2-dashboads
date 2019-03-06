<?php
namespace izi\dashboard;

use Yii;

class Module extends \yii\base\Module

{
    public $moduleName = 'dashboard';
    /**
     * @inheritdoc
     */
    public $controllerNamespace ;
    
    /**
     * @inheritdoc
     */
    public function init()
    {
        Yii::setAlias('@' . $this->moduleName, __DIR__);
        
        $this->controllerNamespace = "izi\\{$this->moduleName}\\controllers";
        
        parent::init();
        Yii::$app->view->theme = new \yii\web\Theme([
            'pathMap' => [
                /**
                 * thiết lập pathmap cho các mục cấp con trước (thư mục có độ sâu lớn nhất phải thiết lập đầu tiên)
                 *     
                 * uncomment if you want
                 * '@dashboard' => [
                 *  "@app/modules/dashboard/v1.5",
                 *  "@app/modules/dashboard/v1.0",
                 * ],
                */
            ],
            'baseUrl' => "@web/themes/{$this->moduleName}",
            'basePath'=>'@dashboard/views',                    
        ]);
        // custom initialization code goes here

    }
}
