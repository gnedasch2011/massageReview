<?php

namespace app\modules\item\controllers;

use app\modules\site\components\SiteController;
use yii\web\Controller;

/**
 * Default controller for the `item` module
 */
class AdminController extends SiteController
{
    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
    }
}
