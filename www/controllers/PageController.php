<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\ContactForm;

class PageController extends Controller
{
    public $layout = 'inside';
    public function actionIndex()
    {
        return $this->render('hello');
    }


public function actionSay($message = 'Привет')
{
    return $this->render('about', ['message' => $message]);
}

public function actionView($id)
    {
        $response = Yii::$app->response;
        $response->format = \yii\web\Response::FORMAT_JSON;
        if ($id === "shalom") {
            $response->data = ['message' => 'SHALOM', 'code' => 777, 'Exit'=> 'In Jesus Christ'];
        } 
        if ($id == 1) {
            $response->data = ['message' => 'hello world', 'code' => 777];
        } else {
            $response->data = ['message' => 'hello world', 'code' => 100];
        }
    }

}