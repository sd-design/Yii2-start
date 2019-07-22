<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\ContactForm;

class MyController extends Controller
{
    public function actionIndex()
    {
        return $this->render('hello');
    }


public function actionSay($message = 'Привет')
{
    return $this->render('about', ['message' => $message]);
}

public function actionYa()
    {
        $response = Yii::$app->response;
        $response->format = \yii\web\Response::FORMAT_JSON;
        $response->data = [ 'message' => 'hello world','code' => 100];
    }

public function actionPage($id)
    {
        $response = Yii::$app->response;
        $response->format = \yii\web\Response::FORMAT_JSON;
        if($id == 1){            
            $response->data = ['message' => 'hello world', 'code' => 777];}
        else{ $response->data = ['message' => 'hello world', 'code' => 100];}
        
    }
    public function actionView($id)
    {
        $response = Yii::$app->response;
        $response->format = \yii\web\Response::FORMAT_JSON;
        if ($id == 1) {
            $response->data = ['message' => 'hello world', 'code' => 777];
        } else {
            $response->data = ['message' => 'hello world', 'code' => 100];
        }
    }

}