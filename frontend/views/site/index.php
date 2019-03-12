<?php
use yii\helpers\Url;
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
            <img src="../img/new_1.jpg" class="img-thumbnail rounded mx-auto d-block" alt="...">
        </div>
        <br>
        <div class="row">
            <p>Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века. В то время некий безымянный печатник создал большую коллекцию размеров и форм шрифтов, используя Lorem Ipsum для распечатки образцов. Lorem Ipsum не только успешно пережил без заметных изменений пять веков, но и перешагнул в электронный дизайн. Его популяризации в новое время послужили публикация листов Letraset с образцами Lorem Ipsum в 60-х годах и, в более недавнее время, программы электронной вёрстки типа Aldus PageMaker, в шаблонах которых используется Lorem Ipsum</p>
        </div>
        <br>
        <button type="button" class="btn btn-secondary">Подробнее...</button>
        <br>
    </div>
    <div class="col-lg-4 col-md-4 text-center advantage">
        <div class="row">
            <img src="../img/new_1.jpg" class="img-thumbnail rounded mx-auto d-block" alt="...">
        </div>
        <br>
        <div class="row">
            <p class="mx-auto">Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века. В то время некий безымянный печатник создал большую коллекцию размеров и форм шрифтов, используя Lorem Ipsum для распечатки образцов. Lorem Ipsum не только успешно пережил без заметных изменений пять веков, но и перешагнул в электронный дизайн. Его популяризации в новое время послужили публикация листов Letraset с образцами Lorem Ipsum в 60-х годах и, в более недавнее время, программы электронной вёрстки типа Aldus PageMaker, в шаблонах которых используется Lorem Ipsum</p>
        </div>
        <br>
        <button type="button" class="btn btn-secondary">Подробнее...</button>
        <br>
    </div>
    <div class="col-lg-4 col-md-4 text-center advantage">
        <div class="row">
            <img src="../img/new_1.jpg" class="img-thumbnail rounded mx-auto d-block" alt="...">
        </div>
        <br>
        <div class="row text-center">
            <p class="mx-auto">Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века. В то время некий безымянный печатник создал большую коллекцию размеров и форм шрифтов, используя Lorem Ipsum для распечатки образцов. Lorem Ipsum не только успешно пережил без заметных изменений пять веков, но и перешагнул в электронный дизайн. Его популяризации в новое время послужили публикация листов Letraset с образцами Lorem Ipsum в 60-х годах и, в более недавнее время, программы электронной вёрстки типа Aldus PageMaker, в шаблонах которых используется Lorem Ipsum</p>
        </div>
        <br>
        <button type="button" class="btn btn-secondary">Подробнее...</button>
        <br>
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