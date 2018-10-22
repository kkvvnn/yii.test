<?php

namespace app\controllers;

use yii\web\Controller;

class NowTimeController extends Controller
{
    public function actionIndex()
    {
        $now_time = date("H:i:s");

        return $this->render('index', ['time' => $now_time]);
    }
}