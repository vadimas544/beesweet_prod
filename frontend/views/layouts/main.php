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
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
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
                            <div class="row">Очень красивая цитата из жизни про тортики<br/>
                                             Очень красивая цитата из жизни про тортики
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-1"></div>   
                    <div class="col-lg-3">
                        <div class="header-socials text-center">
                            <div class="row">&nbsp</div><br /><br />
                            <div class="row">
                                <div class="col-lg-6">
                                    <p>(063)-948-93-54</p>
                                    <p>(095)-911-06-92</p>
                                </div>
                                <div class="col-lg-6">
                                    <a href="">обратная связь</a>
                                </div>
                            </div>
                            <br />
                            <div class="row">
                                <div class="col-lg-4">&nbsp</div>
                                <div class="col-lg-4">
                                    <a href=""><i class="fab fa-facebook-square"></i></a>
                                </div>
                                <div class="col-lg-4">
                                    <a href=""><i class="fab fa-instagram"></i></a>
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
        ['label' => 'Главная', 'url' => ['/site/index']],
        ['label' => 'Ассортимент',
         'url' => ['/site/catalog'],
         'items' => [
            ['label' => 'Тортики', 'url' => '#'],
         ]

    ],
        ['label' => 'Галлерея', 'url' => ['/site/gallery']],
        ['label' => 'Доставка', 'url' => ['/site/delivery']],
        ['label' => 'Оплата', 'url' => ['/site/buy']],
        ['label' => 'О нас', 'url' => ['/site/about']]
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

        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
<div class="container-fluid">
    <footer class="footer">
        <div class="jumbotron">
            <div class="row text-center">
                <div class="col-lg-1"></div>
                <div class="col-lg-2">
                    <p class="text-center">Навигация</p>
                    <ul >
                        <li class="text-center"><a href="<?php echo Url::to(['site/index']); ?>">главная</a> </li>
                        <li><a href="<?php echo Url::to(['site/index']); ?>">ассортимент</a></li>
                        <li><a href="<?php echo Url::to(['site/index']); ?>">галлерея</a></li>
                        <li><a href="<?php echo Url::to(['site/index']); ?>">доставка</a></li>
                        <li><a href="<?php echo Url::to(['site/index']); ?>">оплата</a></li> 
                        <li><a href="<?php echo Url::to(['site/index']); ?>">о нас</a></li>
                    </ul>
                </div>
                <div class="col-lg-2">
                    <p>
                       Наши контакты 
                    </p>
                    <p>
                        Beesweet<br/>
                        0639489354<br/>

                    </p>
                </div>
                <div class="col-lg-2">
                    <p>Ищите нас в</p>
                    <ul>
                      <li><a href="">FB</a></li>
                      <li><a href="">IG</a></li>
                    </ul>
                </div>
                <div class="col-lg-3">
                    <div class="map">
                        text<br />
                        text<br />
                        text<br />
                        text<br />
                    </div>
                MAP</div>
                <div class="col-lg-1"></div>
            </div>
        </div>        
    </footer>
</div>


<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
