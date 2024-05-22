<?php

use yii\bootstrap5\Html;
use yii\bootstrap5\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Bookings $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="bookings-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'user_id')->textInput(['type' => 'text', 'readonly' => '']) ?>

    <?= $form->field($model, 'table_id')->textInput(['type' => 'text', 'readonly' => '']) ?>

    <?= $form->field($model, 'date')->textInput(['type' => 'text', 'readonly' => '']) ?>

    <?= $form->field($model, 'time')->textInput(['type' => 'text', 'readonly' => '']) ?>

    <?= $form->field($model, 'status_id')->dropDownList([2 => 'Подтверждена', 3 => 'Отклонена'], ['prompt' => ['text' => 'Новая', 'options' =>['style'=>'display:none']]]) ?>

    <div class="form-group">
        <?= Html::submitButton('Сменить статус', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
