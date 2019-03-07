<?php
/**
 * Created by PhpStorm.
 * User: Vadim
 * Date: 07.03.2019
 * Time: 9:42
 */

use yii\widgets\ActiveForm;
use yii\helpers\Html;
?>
<div class="row">
    <div class="col-lg-12 text-center">
        <?php
        $this->title = 'Свяжитесь с нами';
        $this->params['breadcrumbs'][] = $this->title;
        ?>
    </div>
</div>

<div class="site-contact">
    <h1 class="text-center"><?= Html::encode($this->title) ?></h1>
    <div class="row">
        <div class="col-lg-6 col-lg-offset-3">
            <?php $f = ActiveForm::begin(); ?>

            <?= $f->field($form, 'name')->textInput(['autofocus' => true]) ?>

            <?= $f->field($form, 'email') ?>

            <div class="form-group">
                <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
            </div>

            <?php ActiveForm::end(); ?>
        </div>
    </div>

</div>