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
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d2139.014112214479!2d30.37660360315045!3d50.39021664690636!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sru!2sua!4v1550068734731" width="300" height="200" frameborder="0" style="border:0" allowfullscreen></iframe></div>
            </div>
        </div>
</div>
</footer>
</div>
