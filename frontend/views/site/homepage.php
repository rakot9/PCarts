<?php
echo \yii\widgets\Menu::widget([
    'items' => [
        // Important: you need to specify url as 'controller/action',
        // not just as 'controller' even if default action is used.
        ['label' => 'На домашнюю', 'url' => ['site/homepage']],
        // 'Products' menu item will be selected as long as the route is 'product/index'
        ['label' => 'Товары', 'url' => ['product/index'], 'items' => [
            ['label' => 'Загрузить товары', 'url' => ['product/index', 'tag' => 'new']],
        ]],
        ['label' => 'Login', 'url' => ['site/login'], 'visible' => Yii::$app->user->isGuest],
    ],
]);

?>

<div>
    Content
</div>