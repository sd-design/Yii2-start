<?php

/* @var $this yii\web\View */

$this->title = 'МОЁ Yii Application';
?>
<div class="site-index">

    <div class="jumbotron">
        <h1>Controller => Page</h1>

        <p class="lead">Твое Yii-powered application.</p>

        <p><a class="btn btn-lg btn-warning" href="/page/1">Можно перейти на страницу с id</a></p>
    
    </div>

    <div class="body-content">

        <div class="row">
            <div class="col-lg-4">
                <h2>Heading</h2>

                <p>Пришлось обновить через Композер - и в итоге это стала версия 2.0.23 и 'defaultRoute'  как переменная не работает в urlManager. Но зато должен работать view с отдельным id</p>

                <p><a class="btn btn-primary" href="/my/page/1">/my/page/1</a></p>
            </div>
            <div class="col-lg-4">
                <h2>Heading</h2>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                    fugiat nulla pariatur.</p>

                <p><a class="btn btn-primary" href="http://www.yiiframework.com/forum/">Yii Forum &raquo;</a></p>
            </div>
            <div class="col-lg-4">
                <h2>Heading</h2>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                    fugiat nulla pariatur.</p>

                <p><a class="btn btn-primary" href="http://www.yiiframework.com/extensions/">Yii Extensions &raquo;</a></p>
            </div>
        </div>

    </div>
</div>
