<?php


namespace vlka\yii2requirements\controllers;


use yii\web\Controller;

class RequirementsController extends Controller
{
    public function actionIndex()
    {
        return $this->renderFile('@app/requirements.php');
    }
}