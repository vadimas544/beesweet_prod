<?php
use yii\helpers\Url;
use yii\helpers\Html;

?>
<header>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-1"></div>
                    <div class="text-center">
                        <div class="col-lg-2 logo">
                            <a href="<?php echo Url::to(['site/index']); ?>">
                                <?= Html::img('@web/img/logo2.png', ['alt' => 'Наш логотип', 'width' => 200]) ?>
</a>
</div>
</div>
<div class="col-lg-4 text-left">
    <div class="row">
        &nbsp
    </div>
    <div class="header-list">
        <div class="row">
            <a href="<?php echo Url::to(['category/view', 'id' => 2]); ?>">праздничные тортики</a> |
            <a href="<?php echo Url::to(['category/view', 'id' => 8]); ?>">капкейки</a> |
            <a href="<?php echo Url::to(['category/view', 'id' => 14]); ?>">кейкпопсы</a> |
            <a href="<?php echo Url::to(['category/view', 'id' => 13]); ?>">меренги</a>
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
        <div class="row">
            <a href="#" onclick="return getCart();"><i class="fas fa-shopping-cart" style="width: 15px; margin-top: 10px; float: right; margin-right: 70px;"></i></a>
        </div><br />
        <div class="row">
            <div class="col-lg-6">
                <p>(063)-948-93-54</p>
                <p>(095)-911-06-92</p>
            </div>
            <div class="col-lg-6">
                <a href="<?php echo Url::to(['site/feedback']); ?>">обратная связь</a>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4">&nbsp</div>
            <div class="col-lg-4">
                <a href="https://www.facebook.com/profile.php?id=100018508111972"><i class="fab fa-facebook-square"></i></a>
            </div>
            <div class="col-lg-4">
                <a href="https://www.instagram.com/ira_samoilenko_/?hl=ru"><i class="fab fa-instagram"></i></a>
            </div>
        </div>
    </div>
    <br />
</div>
<div class="col-lg-1"></div>
</div>
</div>
</header>