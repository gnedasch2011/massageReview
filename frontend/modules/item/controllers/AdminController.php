<?php

namespace app\modules\item\controllers;

use app\modules\site\components\SiteController;
use yii\web\Controller;
use Yii;

/**
 * Default controller for the `item` module
 */
class AdminController extends \app\modules\site\components\AdminController
{
    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex()
    {

        $model = new \app\modules\item\models\Items();

        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if (!$model->save()) {
                echo "<pre>";
                print_r($model->errors);
                die();
            }
            // form inputs are valid, do something here
            return;
        } else {
//            echo "<pre>";
//            print_r($model->errors);
//            die();
        }

        return $this->render('index', [
            'model' => $model,
        ]);

    }
}
