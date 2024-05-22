<?php

/** @var yii\web\View $this */
/** @var yii\bootstrap5\ActiveForm $form */
/** @var app\models\ContactForm $model */

use yii\bootstrap5\ActiveForm;
use yii\bootstrap5\Html;
use yii\captcha\Captcha;

$this->title = 'Контактные данные';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-contact">
    <h1><?= Html::encode($this->title) ?></h1>
<ul>
    <li><span class="regis">Адрес: </span><span class="register">набережная канала Грибоедова, 5</span></li>
    <li><span class="regis">Телефон: </span><span class="register">+7 (333) 020 88 77</span></li>
    <li><span class="regis">Почта: </span><span class="register">support@restik.net</span></li>
</ul>
    <h2><u>Мы на карте</u></h2>
    <img width="800" src="/web/images/map.png" alt="Карта">



</div>
