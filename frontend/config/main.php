<?php
$params = array_merge(
    require __DIR__ . '/../../common/config/params.php',
    require __DIR__ . '/../../common/config/params-local.php',
    require __DIR__ . '/params.php',
    require __DIR__ . '/params-local.php'
);

$config = [
    'id' => 'app-frontend',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'controllerNamespace' => 'frontend\controllers',
    'components' => [
        'view' => [
            'class' => 'yii\web\View',
            'renderers' => [
                'twig' => [
                    'class' => 'yii\twig\ViewRenderer',
                    'cachePath' => '@runtime/Twig/cache',
                    // Array of twig options:
                    'options' => [
                        'auto_reload' => true,
                    ],
                    'globals' => [
                        'html' => ['class' => '\yii\helpers\Html'],
                    ],
                    'uses' => ['yii\bootstrap'],
                ],
                'theme' => [
                    'basePath' => '@app/themes/default',
                    'baseUrl' => '@web/themes/default',
                    'pathMap' => [
                        '@app/views' => '@app/themes/default',
                        '@app/modules' => '@app/themes/default/modules',
                    ]
                ]
            ],
        ],

//        'view' => [
//            'class' => 'yii\web\View',
//            'renderers' => [
//                'twig' => [
//                    'class' => 'yii\twig\ViewRenderer',
//                    'cachePath' => '@runtime/Twig/cache',
//                    // Array of twig options:
//                    'options' => [
//                        'auto_reload' => true,
//                    ],
//                    'globals' => [
//                        'html' => ['class' => '\yii\helpers\Html'],
//                    ],
//                    'uses' => ['yii\bootstrap'],
//                ],
//                // ...
//            ],
//        ],
        'request' => [
            'csrfParam' => '_csrf-frontend',
        ],
        'user' => [
            'identityClass' => 'common\models\User',
            'enableAutoLogin' => true,
            'identityCookie' => ['name' => '_identity-frontend', 'httpOnly' => true],
        ],
        'session' => [
            // this is the name of the session cookie used for login on the frontend
            'name' => 'advanced-frontend',
        ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],

        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => [
                ['class' => 'app\modules\url\components\UrlRule'],
            ],
        ],
    ],
    'modules' => [
        'url' => 'app\modules\url\Module',
        'category' => [
            'class' => 'app\modules\category\Module',
        ],
        'page' => [
            'class' => 'app\modules\page\Module',
        ],
        'image' => [
            'class' => 'app\modules\image\Module',
        ],
        'site' => [
            'class' => 'app\modules\site\Module',
        ],
        'parser' => [
            'class' => 'app\modules\parser\Module',
        ],
    ],
    'params' => $params,
];

if (YII_ENV_DEV) {
    $config['bootstrap'][] = 'gii';
    $config['bootstrap'][] = 'log';
    $config['modules']['gii'] = [
        'class' => 'yii\gii\Module',
        'allowedIPs' => ['127.0.0.1'],
    ];
    $config['bootstrap'][] = 'debug';
    $config['modules']['debug'] = [
        'class' => 'yii\debug\Module',
//        'class' => 'app\modules\common\components\debug\Module',
        'allowedIPs' => ['89.207.92.216', '127.0.0.1', '*'],
    ];

}

return $config;