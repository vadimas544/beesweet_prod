<?php 

use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ActiveForm;

?>


<?php if( Yii::$app->session->hasFlash('success') ): ?>
 <div class="alert alert-success alert-dismissible" role="alert">
 <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
 <?php echo Yii::$app->session->getFlash('success'); ?>
 </div>
<?php endif;?>

 <?php if(!empty($session['cart'])) :?>
    <div class="table-responsive">
        <table class="table table-hover table-striped">
            <thead>
                <tr>
                    <th>Фото</th>
                    <th>Наименование</th>
                    <th>Цена</th>
                    <th>К-во</th>
                    <th>Сумма</th>
                    <th><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($session['cart'] as $id => $item) :?>
                    <tr>
                        <td><?= \yii\helpers\Html::img("@web/img/products/{$item['img']}", ['height' => 50]);?></td>
                        <td><a href="<?= Url::to(['product/view', 'id' => $id]);?>"><?= $item['name']?></a></td>
                        <td><?= $item['price']?></td>
                        <td><?= $item['qty']?></td>
                        <td><?= $item['price']*$item['qty']?></td>
                        <td><span data-id="<?=$id?>" class="glyphicon glyphicon-remove text-danger del-item" aria-hidden="true"></span></td>
                    </tr>
                <?php endforeach; ?>
                    <tr>
                        <td colspan="5">Итого: </td>
                        <td><?= $_SESSION['cart.qty']  ?></td>
                    </tr>
                <tr>
                    <td colspan="5">На сумму: </td>
                    <td><?= $_SESSION['cart.sum']  ?></td>
                </tr>
            </tbody>
        </table>
    </div>
    <hr />
    <?php $form = ActiveForm::begin() ?>
		<?= $form->field($order, 'name');?>
		<?= $form->field($order, 'email');?>
		<?= $form->field($order, 'phone');?>
		<?=Html::submitButton('Заказать', ['class' => 'btn btn-success']);?>

    <?php $form = ActiveForm::end() ?>

<?php else:?>
    <h1>Ваша корзина пуста</h1>
<?php endif; ?>
