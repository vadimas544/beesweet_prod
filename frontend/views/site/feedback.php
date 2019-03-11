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
    <?php if(Yii::$app->session->hasFlash('Feedback Submitted')) : ?>
        <div class="panel panel-default">
            <div class="panel-heading">Сообщение послано</div>
            <div class="panel-body">
                <p><b>Тема: </b><?=$model->subject?></p>
                <p><b>Сообщение: </b><?=$model->message?></p>
            </div>
        </div>
        <div class="alert alert-success">
            Спасибо за ваше сообщение. Мы свяжемся с вами как можно скорее.
        </div>
        <?php else :?>
        <h1 class="text-center"><?= Html::encode($this->title) ?></h1>
        <div class="row">
            <div class="col-lg-6 col-lg-offset-3">
                <?php $f = ActiveForm::begin(['id' => 'feedback-form']); ?>

                <?= $f->field($model, 'subject')->textInput(['autofocus' => true]) ?>

                <?= $f->field($model, 'message')->textarea(['rows' =>6]) ?>

                <div class="form-group">
                    <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
                </div>

                <?php ActiveForm::end(); ?>
            </div>
        </div>
    <?php endif; ?>
</div>

