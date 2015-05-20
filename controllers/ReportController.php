<?php

namespace app\controllers;

class ReportController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }
    
    public function actionReport1() {
        return $this->render('report1');
    }
    
       

}
