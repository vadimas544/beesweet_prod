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
		<div class="row">
			<div class="col-lg-3">
				<div class="text-center">
                            <?= Html::img('@web/img/products/'.$product->img, ['alt' => $product->name, 'width' => 200, 'height' =>200])?>
                </div><br />
			</div>
			<div class="col-lg-3">
				<h2 class="text-center"><?= $product->name?></h2>
				<h4 class="text-center"><?= $product->price?></h4>
				<div class="text-center">
					<a href="<?php echo Url::to(['product/view', ['id' => $product->id]]); ?>" class="btn btn-default text-center">Заказать</a>
				</div>
				
			</div>
		</div>
    </div>
</div>