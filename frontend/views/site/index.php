<?php
/* @var $this yii\web\View */
$this->title = 'My Yii Application';

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
        <h1>Congratulations!</h1>

        <p class="lead">You have successfully created your Yii-powered application.</p>

        <p><a class="btn btn-lg btn-success" href="http://www.yiiframework.com">Get started with Yii</a></p>

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
                <h2>Heading</h2>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                    fugiat nulla pariatur.</p>

                <p><a class="btn btn-default" href="http://www.yiiframework.com/doc/">Yii Documentation &raquo;</a></p>
            </div>
            <div class="col-lg-4">
                <h2>Heading</h2>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                    fugiat nulla pariatur.</p>

                <p><a class="btn btn-default" href="http://www.yiiframework.com/forum/">Yii Forum &raquo;</a></p>
            </div>
            <div class="col-lg-4">
                <h2>Heading</h2>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                    fugiat nulla pariatur.</p>

                <p><a class="btn btn-default" href="http://www.yiiframework.com/extensions/">Yii Extensions &raquo;</a></p>
            </div>
        </div>

    </div>
</div>
