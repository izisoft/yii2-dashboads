<?php
namespace izi\dashboad;

use Yii;

class Module extends \yii\base\Module

{
    public $moduleName = 'dashboad';
    /**
     * @inheritdoc
     */
    public $controllerNamespace ;
    
    /**
     * @inheritdoc
     */
    public function init()
    {
        Yii::setAlias('@dashboad', __DIR__);
        
        $this->controllerNamespace = "izi\\{$this->moduleName}\\controllers";
        
        parent::init();
        Yii::$app->view->theme = new \izi\web\Theme([
            'pathMap' => [
                /**
                 * thiết lập pathmap cho các mục cấp con trước (thư mục có độ sâu lớn nhất phải thiết lập đầu tiên)
                 *     
                 * uncomment if you want
                '@dashboad' => [
                    "@app/modules/dashboads/v1.5",
                    "@app/modules/dashboads/v1.0",
                ],
                */
            ],
            'baseUrl' => "@web/themes/{$this->moduleName}",
            'basePath'=>'@dashboad/views',
            'viewPath'=>'@dashboad/views'
        
        ]);
        // custom initialization code goes here

    }
}
