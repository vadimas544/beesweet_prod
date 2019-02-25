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
                        <input type="text" value="1" id="qty" size="1" style="margin-top: 20px;"/>
                    </div>
                    </div>
                <br>
                <div class="row button-cart">
                    <a href="<?php echo Url::to(['cart/add', 'id' => $product->id]);?>" data-id="<?= $product->id ?>" class="btn btn-success add-to-cart"><i class="fa fa-shopping-cart"></i> В корзину</a>
                </div>
                </div>

            </div>
		</div>
</div>
<div class="row">
    <div class="col-lg-9 col-lg-offset-3">
        <div class="text-center">
            <h3>Популярные заказы</h3>
        </div>
        <br>
        <div id="carousel-example-generic" class="carousel" data-ride="carousel">

            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                <?php $count = count($hits); $i=0; foreach ($hits as $hit) :?>
                    <?php if($i % 3 ==0 || $i == $count) :?>
                <div class="item <?php if($i == 0) echo 'active';?>">
                    <?php endif; ?>
                    <div class="col-lg-2">
                            <div class="text-center">
                                <?= Html::img('@web/img/products/'.$hit->img, ['alt' => $hit->name, 'width' => 300, 'height' =>300])?>
                            </div>
                    </div>
                    <?php $i++; if($i % 3 ==0) :?>
                </div>
                    <?php endif; ?>
                <?php endforeach; ?>
            </div>

            <!-- Controls -->
            <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
</div>

