<?php

namespace app\controllers;

use app\models\Akreditasi;
use app\models\AkreditasiSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * AkreditasiController implements the CRUD actions for Akreditasi model.
 */
class AkreditasiController extends Controller
{
    /**
     * @inheritDoc
     */
    public function behaviors()
    {
        return array_merge(
            parent::behaviors(),
            [
                'verbs' => [
                    'class' => VerbFilter::className(),
                    'actions' => [
                        'delete' => ['POST'],
                    ],
                ],
            ]
        );
    }

    /**
     * Lists all Akreditasi models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new AkreditasiSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Akreditasi model.
     * @param int $prodi_id_prodi Prodi Id Prodi
     * @param int $lembaga_id_lembaga Lembaga Id Lembaga
     * @param string $id ID
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($prodi_id_prodi, $lembaga_id_lembaga, $id)
    {
        return $this->render('view', [
            'model' => $this->findModel($prodi_id_prodi, $lembaga_id_lembaga, $id),
        ]);
    }

    /**
     * Creates a new Akreditasi model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Akreditasi();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'prodi_id_prodi' => $model->prodi_id_prodi, 'lembaga_id_lembaga' => $model->lembaga_id_lembaga, 'id' => $model->id]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Akreditasi model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $prodi_id_prodi Prodi Id Prodi
     * @param int $lembaga_id_lembaga Lembaga Id Lembaga
     * @param string $id ID
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($prodi_id_prodi, $lembaga_id_lembaga, $id)
    {
        $model = $this->findModel($prodi_id_prodi, $lembaga_id_lembaga, $id);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'prodi_id_prodi' => $model->prodi_id_prodi, 'lembaga_id_lembaga' => $model->lembaga_id_lembaga, 'id' => $model->id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Akreditasi model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $prodi_id_prodi Prodi Id Prodi
     * @param int $lembaga_id_lembaga Lembaga Id Lembaga
     * @param string $id ID
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($prodi_id_prodi, $lembaga_id_lembaga, $id)
    {
        $this->findModel($prodi_id_prodi, $lembaga_id_lembaga, $id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Akreditasi model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $prodi_id_prodi Prodi Id Prodi
     * @param int $lembaga_id_lembaga Lembaga Id Lembaga
     * @param string $id ID
     * @return Akreditasi the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($prodi_id_prodi, $lembaga_id_lembaga, $id)
    {
        if (($model = Akreditasi::findOne(['prodi_id_prodi' => $prodi_id_prodi, 'lembaga_id_lembaga' => $lembaga_id_lembaga, 'id' => $id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
