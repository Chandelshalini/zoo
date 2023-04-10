<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\Animals;
use yii\data\Pagination;
use yii\web\UploadedFile;


class AnimalsController extends Controller
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
        $animal = Animals::find()->all();
  
      
        return $this->renderPartial('index', ['animal' => $animal]);
    }

    public function actionCreate()
    {
        $animal = new Animals();
        if ($this->request->isPost) {
           
            $formData = Yii::$app->request->post();
            
            if ($animal->load($formData)) {
            
                if ($animal->save()) {
                    
                    return "success";
                }
            }
        }
        return $this->renderAjax('create', ['animal' => $animal]);
    }

    public function actionUpdate($id)
    {

        $animal = Animals::findOne($id);
        if ($animal->load(yii::$app->request->post()) && $animal->save()) {

            return "success";
        }

        return $this->renderAjax('update', ['animal' => $animal]);
    }
    public function actionDelete($id)
    {
        $animal = Animals::findOne($id);
        $animal->delete();
        if ($animal) {
            return "deleted";
        }
        //   return $this->redirect(['site/dashboard']);  
    }
}