<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\helpers\Url;
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

<!--<div class="wrap">-->
    
        <header>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-1"></div>
                    <div class="col-lg-2">
                        <a href="<?php echo Url::to(['site/index']); ?>">
                           <?= Html::img('@web/img/logo2.png', ['alt' => 'Наш логотип']) ?> 
                        </a>       
                    </div>
                    <div class="col-lg-4 text-left">
                        <div class="row">
                            &nbsp
                        </div>
                        <div class="header-list">
                            <div class="row">
                                <a href="<?php echo Url::to(['site/index']); ?>">праздничные тортики</a> |
                                <a href="<?php echo Url::to(['site/index']); ?>">капкейки</a> |
                                <a href="<?php echo Url::to(['site/index']); ?>">кейкпопсы</a> |
                                <a href="<?php echo Url::to(['site/index']); ?>">меренги</a> 
                            </div>
                            <br />
                            <div class="row slogun">Закажи сладость своей мечты!</div>
                            <br />
                            <div class="row">Очень красивая цитата из жизни про тортики</div>
                            </div>    
                    </div>
                    <div class="col-lg-1"></div>   
                    <div class="col-lg-3">
                        <div class="header-socials text-center">
                            <div class="row">&nbsp</div><br /><br />
                            <div class="row">
                                <div class="col-lg-6">
                                    <p>(063)-948-93-54</p>
                                </div>
                                <div class="col-lg-6">
                                    <a href="">обратная связь</a>
                                </div>
                            </div>
                            <br />
                            <div class="row">
                                <div class="col-lg-4">&nbsp</div>
                                <div class="col-lg-4">
                                    <a href="">FB</a>
                                </div>
                                <div class="col-lg-4">
                                    <a href="">IG</a>
                                </div>
                            </div>
                        </div>  
                        <br />
                    </div>
                    <div class="col-lg-1"></div>
                </div>
            </div>
        </header>
        
<!---HEADER END -->
    <div class="container">
        
    
    <?php


    
    NavBar::begin([
        //'brandLabel' => Yii::$app->name,
        //'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar navbar-default',
        ],
    ]);
    $menuItems = [
        ['label' => 'Главная', 'url' => ['/site/index'], ['witdh' => '100']],
        ['label' => 'Ассортимент', 'url' => ['/site/about']],
        ['label' => 'Галлерея', 'url' => ['/site/contact']],
        ['label' => 'Доставка', 'url' => ['/site/contact']],
        ['label' => 'Оплата', 'url' => ['/site/contact']],
        ['label' => 'О нас', 'url' => ['/site/contact']]
    ];
    /*
    if (Yii::$app->user->isGuest) {
        $menuItems[] = ['label' => 'Signup', 'url' => ['/site/signup']];
        $menuItems[] = ['label' => 'Login', 'url' => ['/site/login']];
    } else {
        $menuItems[] = '<li>'
            . Html::beginForm(['/site/logout'], 'post')
            . Html::submitButton(
                'Logout (' . Yii::$app->user->identity->username . ')',
                ['class' => 'btn btn-link logout']
            )
            . Html::endForm()
            . '</li>';
    }
    */
    echo Nav::widget([
        'options' => ['class' => 'nav nav-tabs nav-justified'],
        'items' => $menuItems,
    ]);
    NavBar::end();
    ?>

    <div class="container">
        <!--
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    -->
        </div>
    </div>
<!--
<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; <?= Html::encode(Yii::$app->name) ?> <?= date('Y') ?></p>

        <p class="pull-right"><?= Yii::powered() ?></p>
    </div>
</footer>
-->
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
