<?php
namespace backend\controllers;

use Yii;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\LoginForm;
use backend\models\General;

/**
 * Site controller
 */
class SiteController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                    [
                        'actions' => ['login', 'error'],
                        'allow' => true,
                    ],
                    [
                        'actions' => ['logout', 'index', 'general', 'submit'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * @inheritdoc
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
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

    /**
     * Login action.
     *
     * @return string
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        } else {
            return $this->render('login', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Logout action.
     *
     * @return string
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    public function actionGeneral(){
        if(empty(\app\models\General::findOne(1))){
            $model = new \app\models\General();
        }else{
        $model = \app\models\General::findOne(1);}
        return $this->render('general', ['model'=>$model]);
    }
    public function actionSubmit(){
        $request = Yii::$app->request;
       if(empty(\app\models\General::findOne(1))){
            $model = new \app\models\General();
        }else{
        $model = \app\models\General::findOne(1);}
        $model->title =  $request->post('title');
        $model->description = $request->post('description');
        $model->phone = $request->post('phone');
        $model->address = $request->post('address');
        $model->facebook = $request->post('facebook');
        $model->google_coordinate = $request->post('google_gps');
        $model->save();
        Yii::$app->session->setFlash('success', "Амжилттай хадгалагдлаа");
        return $this->render('general', ['model'=>$model]);
    }
}
