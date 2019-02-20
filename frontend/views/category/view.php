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
        <?php if(!empty($products)) : ?>
            <div class="popular-items">
                <?php foreach($products as $product) : ?>
                    <div class="col-lg-4 col-md-4 item">
                        <h2 class="text-center"><?= $product->name?></h2>
                        <div class="text-center">
                            <?= Html::img('@web/img/products/'.$product->img, ['alt' => $product->name, 'width' => 200, 'height' =>200])?>
                        </div><br />
                        <a href="<?php echo Url::to(['category/view', ['id' => $product->id]]); ?>" class="btn btn-default text-center">Подробнее</a>
                        <h4 class="text-center"><?= $product->price?></h4>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
    </div>
</div>