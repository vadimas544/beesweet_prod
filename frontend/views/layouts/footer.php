<?php
    use yii\helpers\Html;
    use yii\helpers\Url;
?>
<footer>
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-3 col-md-3 col-sm-3 navigation text-center">
				<h3>Навигация</h3>
				<ul >
                    <li class="text-center"><a href="<?php echo Url::to(['site/index']); ?>">главная</a> </li>
                    <li><a href="<?php echo Url::to(['category/view']); ?>">ассортимент</a></li>
                    <li><a href="<?php echo Url::to(['site/index']); ?>">галлерея</a></li>
                    <li><a href="<?php echo Url::to(['site/index']); ?>">доставка</a></li>
                    <li><a href="<?php echo Url::to(['site/index']); ?>">оплата</a></li>
                    <li><a href="<?php echo Url::to(['site/index']); ?>">о нас</a></li>
                </ul>	
			</div>
			<div class="col-lg-3 col-md-3 col-sm-3 text-center contacts">
              <h3>Наши контакты</h3>
              <p>Bee sweet</p>
              <p>(063)-948-93-54</p>
              <p>(095)-911-06-92</p>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3 text-center footer-soc">
                    <h3>Ищите нас в</h3>
                    <ul>
                        <li><a href=""><i class="fab fa-facebook-square"></i></a></li><br />
                        <li><a href=""><i class="fab fa-instagram"></i></a></li>
                    </ul>
            </div>
            <div class="col-lg-3 col-sm-3 col-md-3 map text-center">
                    <h3>Найти нас можно в:</h3>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2543.7511201148604!2d30.377258315942402!3d50.3898378996112!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40d4ca2b76711aed%3A0x4b1e4dfbe0077c3c!2z0YPQuy4g0JLQuNGC0Y_QvdGB0LrQsNGPLCA0LCDQktC40YjQvdC10LLQvtC1LCDQmtC40LXQstGB0LrQsNGPINC-0LHQu9Cw0YHRgtGMLCAwODEzMg!5e0!3m2!1sru!2sua!4v1552409033791" width="300" height="200" frameborder="1" style="border:1px solid #5E3E2A" allowfullscreen></iframe>
            </div>
		</div>
	</div>
</footer>
