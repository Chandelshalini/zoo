<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use app\models\Registration;
use app\models\Animals;
use app\models\Zoo;


class SiteController extends Controller
{
    /**
     * {@inheritdoc}
     */
    // public function behaviors()
    // {
    //     return [
    //         'access' => [
    //             'class' => AccessControl::class,
    //             'only' => ['logout'],
    //             'rules' => [
    //                 [
    //                     'actions' => ['logout'],
    //                     'allow' => true,
    //                     'roles' => ['@'],
    //                 ],
    //             ],
    //         ],
    //         'verbs' => [
    //             'class' => VerbFilter::class,
    //             'actions' => [
    //                 'logout' => ['post'],
    //             ],
    //         ],
    //     ];
    // }


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

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
    }
    public function actionHome()
    {
        return $this->render('home');
    }
    public function actionDashboard()
    {  
        if (Yii::$app->session->get('isLoggedIn')) {
          
            $userCount = Registration::find()->count();
            $animalCount = Animals::find()->count();
            $zooCount = Zoo::find()->count();
            return $this->render('dashboard', ['userCount' => $userCount, 'animalCount' => $animalCount, 'zooCount' => $zooCount]);
        }
        return $this->redirect(['login']);
    }
    public function actionSignup()
    {
        $model = new Registration();

        if ($this->request->isPost) {
            $formData = Yii::$app->request->post();

            if ($model->load($formData)) {
                if ($model->save()) {
                    return $this->redirect(['login']);
                }
            }
        }
        return $this->render('signup', ['model' => $model]);
    }

    public function actionLogin()
    {
        $role=yii::$app->session->get('role');
        if (yii::$app->session->get('role')) {
          if($role=='admin'){
            return $this->redirect(['dashboard']);
          }
          else{
            return $this->redirect(['home']);
          }
        }
        $model = new Registration();
        if ($this->request->isPost) {
            $user = $this->request->post('Registration');
            $model = Registration::findOne(['email' => $user['email']]);
            $role = $model->role;
            Yii::$app->session->set('role', $role);
            if (!isset($model)) {
                return "Invalid Username and Password!Try again";
            } else {
                if ($model['password'] == $user['password']) {
                    Yii::$app->session->set('email', $user['email']);
                    Yii::$app->session->set('isLoggedIn', true);
                    $role = Yii::$app->session->get('role');
                    if($role=='admin'){
                    return $this->redirect(['dashboard']);
                    }
                    else{
                        return $this->redirect(['home']);
                    }
                } 
                else {
                    return "Invalid Password";
                }
            }
        }
        

        return $this->render('login', [
            'model' => $model,
        ]);
    }




    /**
     * Logout action.
     *
     * @return Response
     */
    public function actionLogout()
    {
        // Yii::$app->user->logout();
        $session = Yii::$app->session;
        $session->remove('email');
        Yii::$app->session->remove('isLoggedIn');
        $session->destroy();

        return $this->redirect(['index']);
    }

    /**
     * Displays contact page.
     *
     * @return Response|string
     */
    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->refresh();
        }
        return $this->render('contact', [
            'model' => $model,
        ]);
    }

    /**
     * Displays about page.
     *
     * @return string
     */
    public function actionAbout()
    {
        return $this->render('about');
    }
}