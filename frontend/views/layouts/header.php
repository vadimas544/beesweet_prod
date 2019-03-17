<?php
use yii\helpers\Url;
use yii\helpers\Html;

?>

<header>
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-3 col-md-3 col-sm-3 logo">
				<div class="text-center">
					<a href="<?php echo Url::to(['site/index']); ?>">
                        <?= Html::img('@web/img/logo2.png', ['alt' => 'Наш логотип', 'width' => 250]) ?>
                    </a>				
				</div>
			</div>
			<div class="col-lg-5 col-md-5 col-sm-5 info-header">
				<div class="row">
					<div class="header-list">
                        <a href="<?php echo Url::to(['category/view', 'id' => 2]); ?>">праздничные тортики</a> |
                        <a href="<?php echo Url::to(['category/view', 'id' => 8]); ?>">капкейки</a> |
                        <a href="<?php echo Url::to(['category/view', 'id' => 14]); ?>">кейкпопсы</a> |
                        <a href="<?php echo Url::to(['category/view', 'id' => 13]); ?>">меренги</a>
                    </div>
				</div>
				<div class="row slogun">
					<p>Закажи сладость своей мечты!</p>
				</div>
				<div class="row quote">
					<p>Очень красивая цитата из жизни про тортики<br/>
                            Очень красивая цитата из жизни про тортики
                        </p>
				</div>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-4 socials">
				<div class="row">
					<div class="col-lg-offset-6 col-md-offset-6 col-sm-offset-6">
						<div class="text-center">
							<div class="cart">
								<a href="#" onclick="return getCart();"><i class="fas fa-shopping-cart"  style="width: 15px;"></i></a>
							</div>	
						</div>			
					</div>
				</div>
				<div class="row phone-feed">
					<div class="col-lg-6 col-md-6 col-sm-12 phones">
						<p>(063)-948-93-54</p>
	                    <p>(095)-911-06-92</p>
					</div>
					<div class="col-lg-6 col-md-6 hidden-sm">
						<div class="feedback">
							<a href="<?php echo Url::to(['site/feedback']); ?>">обратная связь</a>
						</div>
					</div>
				</div>
				<div class="row socials-but text-left">
					<div class="col-lg-6 hidden-md hidden-sm hidden-xs">
<!--						<p>Мы в соцсетях</p>-->
					</div>
					<div class="col-lg-3 col-md-6 col-sm-6 col-xs-6">
						<a href="https://www.facebook.com/profile.php?id=100018508111972"><i
                                        class="fab fa-facebook-square"></i></a>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-6 col-xs-6">
						<a href="https://www.instagram.com/ira_samoilenko_/?hl=ru"><i class="fab fa-instagram"></i></a>
					</div>
				</div>
			</div>	
		</div>
	</div>
</header>