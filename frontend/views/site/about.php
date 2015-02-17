<?php
use yii\helpers\Html;

/* @var $this yii\web\View */
$this->title = 'About';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>Коротко о нашем сервисе. Мы предоставляем услуги интернет-магазинам. Наши клиенты получают:
        <ul>
            <li>
                Качественную информацию по товару
            </li>
            <li>
                Интеграцию поискового сервиса (ищем товар по запросу покупателей сайта) на сайт клиента
            </li>
            <li>
                Интеграцию сервиса сравнения характеристик товара
            </li>
        </ul>
    </p>

    <code><?= __FILE__ ?></code>
</div>
