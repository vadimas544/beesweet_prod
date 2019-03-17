<?php
use yii\helpers\Url;
use yii\helpers\Html;


/* @var $this yii\web\View */

$this->title = 'My Yii Application';
//$this->registerJsFile('@web/js/common.js',['depends' => '\yii\web\YiiAsset']    );
?>
<div id="main">
        <div class="row">
            <div class="col-lg-12 text-center">
                <p>самые вкусные тортики в вишневом</p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 text-center">
                <a href="<?= Url::to(['category/'])?>">заказать тортик</a>
            </div>
        </div>
</div>
<!-------------------END JUMBOTRON--------------->

<!---------------------ADVANTAGES----------------->


<div class="row">
    <div class="col-lg-12 text-center adv">
        <p>начинки на любой вкус</p><br>
    </div>
</div>
<div class="row">
    <div class="col-lg-4 col-md-4 text-center advantage">
        <div class="row">
            <?= Html::img('@web/img/nachinki/trishokolada.png', ['alt' => 'Три шоколада', 'width' => 300, 'height' => 250]) ?>
        </div>
        <br>
        <div class="row">
            <p>Нежное сочетание шоколадного бисквита и трёх видов бельгийского шоколада в муссе создают изысканную вкусовую гармонию. Такой десерт придётся по вкусу и взрослым и детям. Торт три шоколада — кондитерский шедевр, который станет украшением вашего праздника или отличным поводом собраться с друзьями за чашечкой чая.</p>
        </div>
        <br>
    </div>
    <div class="col-lg-4 col-md-4 text-center advantage">
        <div class="row">
            <?= Html::img('@web/img/nachinki/dark_wood.png', ['alt' => 'Черный лес', 'width' => 300, 'height' => 250]) ?>
        </div>
        <br>
        <div class="row">
            <p>Шварцвальдский вишневый торт, он же " Черный лес", он же " Шварцвальд", он же " Блэк Форест" - появился в Германии в 30-х годах и приобрел мировую известность и популярность. Торт со взбитыми сливками, вишней и с шоколадным бисквитом - не оставит никого равнодушным... в него влюбляются сразу же, с первого кусочка.</p>
        </div>
        <br>
    </div>
    <div class="col-lg-4 col-md-4 text-center advantage">
        <div class="row">
            <?= Html::img('@web/img/nachinki/esterhazi.png', ['alt' => 'Эстерхази', 'width' => 300, 'height' => 250]) ?>
        </div>
        <br>
        <div class="row text-center">
            <p>В классическом виде торт Эстерхази – это хрустящие белково-миндальные коржи с легким ароматом корицы, смазанные заварным масляным кремом с привкусом вишни. Украшен торт лепестками из миндальных орехов по бокам и нежной паутинкой по молочно-белому верху. Такое изысканное на вид и вкус кондитерское произведение искусства с легкостью может стать украшением любого праздничного стола.</p>
        </div>
        <br>
    </div>
    <div class="row advantage">
        <div class="col-lg-4 col-lg-offset-4 col-md-4 col-md-offset-4">
            <a href="<?= Url::to(['site/feelings'])?>" class="btn btn-block">перейти к начинкам</a>
        </div>
    </div>
</div>

<!---------------------END ADVANTAGES--------------->
<div class="gallery">
    <div class="row text-center">
        <p class="mx-auto">галлерея работ</p>
    </div>


    <div class="row">
        <div id="block-for-slider">
            <div id="viewport">
                <ul id="slidewrapper">
                    <li class="slide"><img src="https://hsto.org/files/8d4/b19/80d/8d4b1980d48c418090e2c4466d8c06e1.jpg" alt="1" class="slide-img"></li>
                    <li class="slide"><img src="https://hsto.org/files/ef1/3d7/97e/ef13d797e4c642c7a1d4b2b91f7ad7b3.jpg" alt="2" class="slide-img"></li>
                    <li class="slide"><img src="https://hsto.org/files/ec5/592/f1e/ec5592f1e814401eb38305682a8e88d4.jpg" alt="3" class="slide-img"></li>
                    <li class="slide"><img src="https://hsto.org/files/eda/61a/3c5/eda61a3c53db408d820643998d9acd81.jpg" alt="4" class="slide-img"></li>
                </ul>

                <div id="prev-next-btns">
                    <div id="prev-btn" class="button">&lt;</div>
                    <div id="next-btn" class="button">&gt;</div>
                </div>

                <ul id="nav-btns">
                    <li class="slide-nav-btn"></li>
                    <li class="slide-nav-btn"></li>
                    <li class="slide-nav-btn"></li>
                    <li class="slide-nav-btn"></li>
                </ul>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-4  mx-auto">
            <button type="button" class="btn btn-secondary">Перейти в галлерею</button>
        </div>
    </div>
</div>