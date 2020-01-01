<?php


namespace vlka\yii2requirements;


use yii\base\Application;
use yii\base\BootstrapInterface;
use yii\base\Component;

class Bootstrap extends Component implements BootstrapInterface
{

    /**
     * @inheritDoc
     */
    public function bootstrap($app)
    {
        if($app instanceof \yii\web\Application){
            $app->controllerMap['requirements'] = 'vlka\yii2requirements\controllers\RequirementsController';
        }
    }
}