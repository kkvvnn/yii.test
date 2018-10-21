<?php

namespace app\controllers;

use yii\web\Controller;

class LuckyController extends Controller 
{
    public function actionNumber()
    {
        $number = random_int(0, 100);

        return $this->render('number', ['number' => $number]);
    }
}