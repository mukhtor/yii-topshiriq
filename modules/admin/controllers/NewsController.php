<?php

namespace app\modules\admin\controllers;

use Yii;
use app\models\NewsModel;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use app\models\ImageUpload;
use yii\web\UploadedFile;

/**
 * NewsController implements the CRUD actions for NewsModel model.
 */
class NewsController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
            'accses'=>[
                'class'=>AccessControl::className(),
                    'rules'=>[

                        [
                            'actions'=>['_form','create','index','update','view','logout','delete'],
                            'allow'=>true,
                            'roles'=>['@'],
                        ]
                    ]
            ]
        ];
    }

    /**
     * Lists all NewsModel models.
     * @return mixed
     */
    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => NewsModel::find(),
        ]);

        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);

    }

    /**
     * Displays a single NewsModel model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new NewsModel model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $size='news';
        $model = new NewsModel();
        $model_upload=new ImageUpload();
        if(Yii::$app->request->isPost){
            $model_upload->imageFile=UploadedFile::getInstance($model_upload,'imageFile');
            $images=$model_upload->upload($size);
            if(is_array($images)){
                $model->image     = $images['original'];
                $model->thumb_img = $images['thumb'];
            }

            if($model->load(Yii::$app->request->post()) && $model->validate())
            {
                $model->save();
                return $this->redirect(['news/index', 'id' => $model->id]);
            }
        }


        return $this->render('create', [
            'model' => $model,
            'model_upload'=>$model_upload,
        ]);
    }

    /**
     * Updates an existing NewsModel model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing NewsModel model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }
    public function actions()
    {
        return [
            'image-upload' => [
                'class' => 'vova07\imperavi\actions\UploadFileAction',
                'url' => 'http://yii2-project.uz/uploads/', // Directory URL address, where files are stored.
                'path' => 'uploads/', // Or absolute path to directory where files are stored.
            ],
        ];
    }



    /**
     * Finds the NewsModel model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return NewsModel the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = NewsModel::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
