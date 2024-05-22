<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Bookings $model */

$this->title = 'Изменить статус: ' . $model->id;
$this->params['breadcrumbs'][] = 'Смена статуса';
?>
<div class="bookings-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form_admin', [
        'model' => $model,
    ]) ?>

</div>
