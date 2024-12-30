<?php

namespace app\controllers;

use app\models\Penilaian;
use app\models\PenilaianSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * PenilaianController implements the CRUD actions for Penilaian model.
 */
class PenilaianController extends Controller
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
     * Lists all Penilaian models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new PenilaianSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Penilaian model.
     * @param int $prodi_id_prodi Prodi Id Prodi
     * @param int $indikator_id_indikator Indikator Id Indikator
     * @param string $tahun Tahun
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($prodi_id_prodi, $indikator_id_indikator, $tahun)
    {
        return $this->render('view', [
            'model' => $this->findModel($prodi_id_prodi, $indikator_id_indikator, $tahun),
        ]);
    }

    /**
     * Creates a new Penilaian model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Penilaian();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'prodi_id_prodi' => $model->prodi_id_prodi, 'indikator_id_indikator' => $model->indikator_id_indikator, 'tahun' => $model->tahun]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Penilaian model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $prodi_id_prodi Prodi Id Prodi
     * @param int $indikator_id_indikator Indikator Id Indikator
     * @param string $tahun Tahun
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($prodi_id_prodi, $indikator_id_indikator, $tahun)
    {
        $model = $this->findModel($prodi_id_prodi, $indikator_id_indikator, $tahun);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'prodi_id_prodi' => $model->prodi_id_prodi, 'indikator_id_indikator' => $model->indikator_id_indikator, 'tahun' => $model->tahun]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Penilaian model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $prodi_id_prodi Prodi Id Prodi
     * @param int $indikator_id_indikator Indikator Id Indikator
     * @param string $tahun Tahun
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($prodi_id_prodi, $indikator_id_indikator, $tahun)
    {
        $this->findModel($prodi_id_prodi, $indikator_id_indikator, $tahun)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Penilaian model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $prodi_id_prodi Prodi Id Prodi
     * @param int $indikator_id_indikator Indikator Id Indikator
     * @param string $tahun Tahun
     * @return Penilaian the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($prodi_id_prodi, $indikator_id_indikator, $tahun)
    {
        if (($model = Penilaian::findOne(['prodi_id_prodi' => $prodi_id_prodi, 'indikator_id_indikator' => $indikator_id_indikator, 'tahun' => $tahun])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
