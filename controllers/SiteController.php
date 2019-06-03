<?php

namespace app\controllers;

use app\models\Gallery;
use app\models\Pages;
use app\models\Product;
use Yii;
use yii\data\ActiveDataProvider;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use app\models\NewsModel;
use app\controllers\NewsController;
use yii\helpers;

class SiteController extends Controller
{
    public $layout='site';
    /**
     * {@inheritdoc}
     */

    public function actionView($id){
        $model=$this->findModel($id);
        $model->views_count += 1;
        $model->update();
        return $this->render('view',[
            'model'=>$model
        ]);
    }
    protected function findModel($id){
        if(($model=NewsModel::findOne($id))!==null){
            return $model;
        }
    }



    public function actionView_product($id){
        $model=$this->findModelPro($id);
        $model->view_count += 1;
        $model->update();
        return $this->render('view_product',[
            'model'=>$model
        ]);
    }
    protected function findModelPro($id){
        if(($model=Product::findOne($id))!==null){
            return $model;
        }
    }




    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
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
                'class' => VerbFilter::className(),
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

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        $news = NewsModel::find()->limit('4')->orderBy(['id'=>SORT_DESC])->all();
        $product = Product::find()->limit('3')->orderBy(['id'=>SORT_DESC])->all();
        return $this->render('index', [
            'models'=>$news,
            'product'=>$product,
        ]);

    }

    /**
     * Login action.
     *
     * @return Response|string
     */
    public function actionLogin()
    {
        $news = new NewsModel();
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->redirect(['/admin/news']);
        }

        $model->password = '';
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
        Yii::$app->user->logout();

        return $this->goHome();
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

    public function actionNews()
    {
        $news = NewsModel::find();

        $provider = new ActiveDataProvider([
            'query'=>$news,
            'sort'=> ['defaultOrder'=>['id' => SORT_DESC]],
            'pagination'=>[
                'pageSize' => 5,
            ]
        ]);

        return $this->render('site_news', [
            'dataProvider' => $provider
        ]);

    }


    public function actionAbout()
    {
        $news = Pages::find()->limit('1')->one();
        return $this->render('about', [
            'models' => $news,
        ]);
    }

    public function actionSearch($key = null)
    {
        $dataProvider = false;
//        Yii::info($key, 'izlash');
        if ($key != null) {
            $search_query = NewsModel::find()
                ->where(['LIKE', 'name', $key])
                ->orWhere(['LIKE', 'article', $key]);
            $dataProvider = new ActiveDataProvider([
                'query' => $search_query
            ]);
            //Yii::info($search_query, 'search_result');
        }
        return $this->render('site_news', [
            'dataProvider' => $dataProvider
        ]);
    }

    public function actionMore(){
        return $this->render('_more');

    }

    public function actionGallery(){
        $models = Gallery::find()->all();

        return $this->render('gallery', [
            'models' => $models
        ]);
    }

    public function actionProduct(){
        $news = Product::find();

        $provider = new ActiveDataProvider([
            'query'=>$news,
            'sort'=> ['defaultOrder'=>['id' => SORT_DESC]],
            'pagination'=>[
                'pageSize'=>8
            ]
        ]);

        return $this->render('product', [
            'dataProvider' => $provider
        ]);

    }

    public function actionYangi()
    {
        $news = NewsModel::find()
                ->where(['LIKE', 'article', 'bu'])
                ->orWhere(['LIKE', 'name', 'bu'])
                ->orderBy(['id'=>SORT_DESC])
                ->all();

        echo '<pre>';
        var_dump($news);
        echo '</pre>';
    }

    public function actionChangeLang($lang_id){
        Yii::$app->session->set('language',$lang_id);
        return $this->goHome();
    }
}
