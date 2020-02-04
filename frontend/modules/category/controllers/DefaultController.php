<?php

namespace app\modules\category\controllers;

use app\modules\category\models\CategoryBase;
use app\modules\item\models\Items;
use app\modules\site\components\SiteController;
use yii\web\Controller;
use yii\web\NotFoundHttpException;

/**
 * Default controller for the `category` module
 */
class DefaultController extends SiteController
{
    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionView()
    {
        $id = \Yii::$app->request->get('id');
        $category = CategoryBase::findOne($id);

        if (!$category) {
            throw new NotFoundHttpException();
        }

        $items = Items::getAllItems();

        return $this->render('view', [
            'items' => $items
        ]);

    }
}
