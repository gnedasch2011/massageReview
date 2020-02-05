<?php

namespace app\modules\site\components;

use yii\filters\AccessControl;
use yii\web\Controller;


class AdminController extends Controller
{

    public $layout = '//admin/column2';


//    public function behaviors()
//    {
//        return [
//            'access' => [
//                'class' => AccessControl::className(),
//                'rules' =>  [
//                    [
//                        'actions' => ['/user/login', 'error'],
//                        'allow' => true
//                    ],
//                    [
//						'actions' => ['logout', 'index'],
//                        'allow' => true,
//                        'roles' => ['@']
//                    ],
//                ]
//            ]
//        ];
//    }


}