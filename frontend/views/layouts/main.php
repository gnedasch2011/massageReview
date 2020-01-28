<?php

/* @var $this \yii\web\View */

/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
    <!DOCTYPE html>
    <html lang="<?= Yii::$app->language ?>">
    <head>
        <meta charset="<?= Yii::$app->charset ?>">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?php $this->registerCsrfMetaTags() ?>
        <title><?= Html::encode($this->title) ?></title>
        <?php $this->head() ?>
    </head>
    <body>
    <?php $this->beginBody() ?>
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 text-left" itemprop="publisher"
                 itemscope="" itemtype="https://schema.org/Organization">
                <div class="logo" itemprop="logo" itemscope=""
                     itemtype="https://schema.org/ImageObject">
                    <img itemprop="image url" width="50px"
                         src="https://23aiyo90nb2su46r3da4zqnx-wpengine.netdna-ssl.com/wp-content/uploads/2016/07/sh-logo.png"
                         data-src="https://23aiyo90nb2su46r3da4zqnx-wpengine.netdna-ssl.com/wp-content/uploads/2016/07/sh-logo.png"
                         alt="">
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 text-right">
                <div class="search">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control"
                               placeholder="Massage Chairs"
                               aria-label="Recipient's username"
                               aria-describedby="button-addon2">
                        <div class="input-group-append">
                            <button class="btn btn-outline-secondary buttonSearch" type="button"
                                    id="button-addon2">Search
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="wrapHeader menuWrap">
        <div class="container">
            <div class="row">
                <ul class="full-width">
                    <li class="activeItem">
                        <a href="#">О компании</a>
                        <ul>
                            <li><a href="#">История</a></li>
                            <li><a href="#">Успехи</a></li>
                            <li><a href="#">Команда</a></li>
                        </ul>
                    </li>
                    <li class="active"><a href="#">Услуги</a></li>
                    <li><a href="#">Технологии</a></li>
                    <li><a href="#">Проекты</a></li>
                    <li><a href="#">Контакты</a></li>
                </ul>
            </div>
        </div>
    </div>
    <?= $content ?>
    <?php $this->endBody() ?>
    </body>
    </html>
<?php $this->endPage() ?>