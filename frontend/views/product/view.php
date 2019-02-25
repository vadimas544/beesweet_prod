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
			<div class="col-lg-5">
                <div class="image-prod">
                    <a href="">
                        <?= Html::img('@web/img/products/'.$product->img, ['alt' => $product->name, 'width' => 300, 'height' =>300])?>
                    </a>
                </div>
			</div>
			<div class="col-lg-4" style="display: block">
				<h2 class="text-left"><?= $product->name?></h2>
				<div class="text-left desc-prod">
					<p>Описание</p>
                    <p><?= $product->description?></p>
                </div>
			</div>
            <div class="col-lg-3 cart-prod">
                <div class="row">
                    <div class="text-center">
                        <h2 class="text-center"><?= $product->price.' грн/кг'?></h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8 text-center">
                        <h3>Кол-во:</h3>
                    </div>
                    <div class="col-lg-4 text-center">
                        <select name="" id="">
                            <option value="">1</option>
                            <option value="">2</option>
                        </select>
                    </div>
                    </div>
                <br>
                <div class="row button-cart">
                    <a href="<?php echo Url::to(['product/view', ['id' => $product->id]]); ?>" class="btn btn-success">Заказать</a>
                </div>
                </div>

            </div>
		</div>
    </div>
</div>