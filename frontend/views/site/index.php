<?php
/* @var $this yii\web\View */
$this->title = 'Ресурсы';

$items = [
    [
        'title' => 'Sintel',
        'href' => 'http://media.w3.org/2010/05/sintel/trailer.mp4',
        'type' => 'video/mp4',
        'poster' => 'http://media.w3.org/2010/05/sintel/poster.png'
    ],
    [
        'title' => 'Big Buck Bunny',
        'href' => 'http://upload.wikimedia.org/wikipedia/commons/7/75/Big_Buck_Bunny_Trailer_400p.ogg',
        'type' => 'video/ogg',
        'poster' => 'http://upload.wikimedia.org/wikipedia/commons/thumb/7/70/Big.Buck.Bunny.-.Opening.Screen.png/' .
            '800px-Big.Buck.Bunny.-.Opening.Screen.png'
    ],
    [
        'title' => 'Elephants Dream',
        'href' => 'http://upload.wikimedia.org/wikipedia/commons/transcoded/8/83/Elephants_Dream_%28high_quality%29.ogv/' .
            'Elephants_Dream_%28high_quality%29.ogv.360p.webm',
        'type' => 'video/webm',
        'poster' => 'http://upload.wikimedia.org/wikipedia/commons/thumb/9/90/Elephants_Dream_s1_proog.jpg/' .
            '800px-Elephants_Dream_s1_proog.jpg'
    ],
    [
        'title' => 'LES TWINS - An Industry Ahead',
        'href' => 'http://www.youtube.com/watch?v=zi4CIXpx7Bg',
        'type' => 'text/html',
        'youtube' => 'zi4CIXpx7Bg',
        'poster' => 'http://img.youtube.com/vi/zi4CIXpx7Bg/0.jpg'
    ],
    [
        'title' => 'KN1GHT - Last Moon',
        'href' => 'http://vimeo.com/73686146',
        'type' => 'text/html',
        'vimeo' => '73686146',
        'poster' => 'http://b.vimeocdn.com/ts/448/835/448835699_960.jpg'
    ]
];?>

<div class="site-index">

    <div class="jumbotron">
        <?= dosamigos\gallery\Carousel::widget([
            'items' => $items, 'json' => true,
            'clientEvents' => [
            'onslide' => 'function(index, slide) {
                console.log(slide);
            }'
        ]]);?>
    </div>

    <div class="body-content">

        <div class="row">
            <div class="col-lg-4">
                <h2>Удобство использования</h2>

                <p>Используя огромную базу данных товаров, вы с легкостью сможете расширить свой ассортимент товаров
                    наполнив их контентом.
                </p>

                <p><a class="btn btn-default" href="/">Узнать больше &raquo;</a></p>
            </div>
            <div class="col-lg-4">
                <h2>Сравнить товары</h2>

                <p>Теперь вы с легкостью сможете интегрировать в ваш проект форму сравнения однотипных товаров.</p>

                <p><a class="btn btn-default" href="/">Узнать больше &raquo;</a></p>
            </div>
            <div class="col-lg-4">
                <h2>Огромный ассортимент</h2>

                <p>Мы постоянно работаем над обновлением и совершенствованием описаний товаров в нашей базе данных.
                    Сейчас у нас <?=50000+0?> товаров
                </p>

                <p><a class="btn btn-default" href="/">Узнать больше &raquo;</a></p>
            </div>
        </div>

    </div>
</div>
