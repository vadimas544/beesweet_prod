<?php
use yii\helpers\Html;
use common\widgets\MenuWidget;
use yii\helpers\Url;
use yii\widgets\LinkPager;
?>

<div class="row">
    <div class="col-lg-3">
        <ul class="catalog category-products">
            <?= MenuWidget::widget(['tpl' => 'menu'])  ?>
        </ul>
    </div>
    <div class="col-lg-9">
        <?php if(!empty($feelings)) : ?>
            <div class="popular-items">
                <?php foreach($feelings as $fill) : ?>
                    <div class="col-lg-6 col-md-6 item">
                        <h2 class="text-center"><?= $fill->name?></h2>
                        <div class="text-center">
                            <?= Html::img('@web/img/'.$fill->img, ['alt' => $fill->name, 'width' => 200, 'height' =>200])?>
                        </div><br />
                        <div class="text-center">
                            <h4 class="text-center"><?= $fill->description?></h4>
                        </div>

                    </div>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
    </div>
</div>



