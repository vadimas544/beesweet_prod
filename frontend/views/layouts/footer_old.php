<?php
    use yii\helpers\Html;
    use yii\helpers\Url;
?>
<div class="container-fluid">
    <footer class="footer">
        <div class="jumbotron">
            <div class="row text-center">
                <div class="col-lg-1"></div>
                <div class="col-lg-2 navigation text-center">
                    <p class="text-center">Навигация</p>
                    <ul >
                        <li class="text-center"><a href="<?php echo Url::to(['site/index']); ?>">главная</a> </li>
                        <li><a href="<?php echo Url::to(['category/view']); ?>">ассортимент</a></li>
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
                        Bee sweet
                    <p>(063)-948-93-54</p>
                    <p>(095)-911-06-92</p>

                    </p>
                </div>
                <div class="col-lg-2">
                    <p>Ищите нас в</p>
                    <ul>
                        <li><a href=""><i class="fab fa-facebook-square"></i></a></li><br />
                        <li><a href=""><i class="fab fa-instagram"></i></a></li>
                    </ul>
                </div>
                <div class="col-lg-4 center-block">
                    <p>Найти нас можно в:</p>
                   <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2543.7511201148604!2d30.377258315942402!3d50.3898378996112!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40d4ca2b76711aed%3A0x4b1e4dfbe0077c3c!2z0YPQuy4g0JLQuNGC0Y_QvdGB0LrQsNGPLCA0LCDQktC40YjQvdC10LLQvtC1LCDQmtC40LXQstGB0LrQsNGPINC-0LHQu9Cw0YHRgtGMLCAwODEzMg!5e0!3m2!1sru!2sua!4v1552409033791" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
            </div>
        </div>
</div>
</footer>
</div>
