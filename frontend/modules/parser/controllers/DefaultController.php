<?php

namespace app\modules\parser\controllers;

use yii\web\Controller;
use InstagramAPI\Instagram;

/**
 * Default controller for the `parser` module
 */


class DefaultController extends Controller
{
    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex()
    {

        $ins = new Instagram();

        return $this->render('index');
    }
}
