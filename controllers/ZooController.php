<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\Zoo;


class ZooController extends Controller
{

    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::class,
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::class,
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }



    public function actionIndex()
    {
        $zoo = Zoo::find()->all();
        return $this->renderPartial('index', ['zoo' => $zoo]);
    }
    public function actionCreate()
    {
        $zoo = new Zoo();
        if ($this->request->isPost) {
            $formData = Yii::$app->request->post();
            if ($zoo->load($formData)) {
                if ($zoo->save()) {
                    //   return $this->redirect(['index']);
                    return "success";
                }
            }
            print_r($zoo->getErrors());
            return "failure";
        }
        return $this->renderAjax('create', ['zoo' => $zoo]);
    }


    public function actionUpdate($id)
    {
        $zoo = Zoo::findOne($id);
        if ($zoo->load(yii::$app->request->post()) && $zoo->save()) {
            // $session = Yii::$app->session;
            // $session->setFlash('message', 'Updated Successfully');
            // return $this->redirect(['index']);
            return "success";
            
        }
        return $this->renderAjax('update', ['zoo' => $zoo]);
    }
    public function actionDelete($id)
    {
        $zoo = Zoo::findOne($id);
        $zoo->delete();
        if($zoo){
            return "deleted";
        }
        // $session = yii::$app->session;
        // $session->setFlash('message', 'Deleted Successfully');
        // return $this->redirect(['index']);
    }
    
}