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
    <div class="container ">
        <div class="row header_wrap">
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
        <nav class="navbar navbar-expand-lg navbar-light bg-light">

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Dropdown
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="#">Disabled</a>
                    </li>
                </ul>
            </div>
        </nav>

    </div>

    <?= $content ?>
    <div class="container-fluid">
        <div class="footerStyle">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                        <h4 class="footerH4">THE MISSION OF GUITARFELLA</h4>
                        <p class="footerP">
                            We are your new best friend when it comes to guitars, gear, lessons and
                            everything else that goes with the greatest musical instrument in the world!
                            Choosing a guitar and learning how to play can be overwhelming.

                            Our expert team will guide you with gear reviews, lessons and advice to help
                            make your guitar life a little easier and more enjoyable. Guitarists,
                            welcome home.</p>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                        <h4 class="footerH4">THE MISSION OF GUITARFELLA</h4>
                        <ul>
                            <li class="footerMenuItem">test</li>
                            <li class="footerMenuItem">test</li>
                            <li class="footerMenuItem">test</li>
                            <li class="footerMenuItem">test</li>
                            <li class="footerMenuItem">test</li>
                            <li class="footerMenuItem">test</li>
                        </ul>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                        <h4 class="footerH4">THE MISSION OF GUITARFELLA</h4>
                        <ul>
                            <li class="footerMenuItem">test</li>
                            <li class="footerMenuItem">test</li>
                            <li class="footerMenuItem">test</li>
                            <li class="footerMenuItem">test</li>
                            <li class="footerMenuItem">test</li>
                            <li class="footerMenuItem">test</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php $this->endBody() ?>
    </body>
    </html>
<?php $this->endPage() ?>