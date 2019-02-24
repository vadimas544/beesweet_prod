<?php

use common\widgets\MenuWidget;
use yii\helpers\Html;
use yii\helpers\Url;
?>

<div class="row">
	<div class="col-lg-3">
		<ul class="catalog category-products">
		<?= MenuWidget::widget(['tpl' => 'menu'])  ?>
		</ul>		
	</div>
    <div class="col-lg-9">
        <?php if(!empty($pop)) : ?>
            <div class="popular-items">
                <?php foreach($pop as $p) : ?>
                    <div class="col-lg-4 col-md-4 item">
                        <h2 class="text-center"><?= $p->name?></h2>
                        <div class="text-center">
                            <?= Html::img('@web/img/products/'.$p->img, ['alt' => $p->name, 'width' => 200, 'height' =>200])?>
                        </div><br />
                        <div class="text-center">
                            <a href="<?php echo Url::to(['cart/add', 'id' => $p->id]);?>" class="btn-default btn-sm btn-success add-to-card" data-id="<?= $p->id?>">Заказать</a>
                            <a href="<?php echo Url::to(['product/view', 'id' => $p->id]); ?>" class="btn-default btn-sm btn-success">Подробнее</a>
                            <h4 class="text-center"><?= $p->price?></h4>
                        </div>

                    </div>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
    </div>
</div>

			


