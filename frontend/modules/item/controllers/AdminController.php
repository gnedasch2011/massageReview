<?php

namespace app\modules\item\controllers;

use app\modules\item\models\Cons;
use app\modules\item\models\Pros;
use app\modules\item\models\Specifications;
use app\modules\site\components\SiteController;
use yii\base\Model;
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


        $model->populateRelation('pros', new Pros());
        $model->populateRelation('specificationsItems', new Specifications());
        $cons[] = new Cons();
        $cons[] = new Cons();
        $model->populateRelation('cons', $cons);



//        $model->populateRelation('cons', [new Cons()]);

        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            Model::loadMultiple($model->cons, Yii::$app->request->post());
            $model->pros->load(Yii::$app->request->post());
            $model->specificationsItems->load(Yii::$app->request->post());
            echo "<pre>";
            print_r($model);
            die();
            $model->pros->save();
            $model->images->save();
            $model->specificationsItems->save();

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
