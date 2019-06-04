<?php

// web/index.php
require_once __DIR__.'C:\Users\danilo\php-getting-started\vendor\autoload.php';

$app = new Silex\Application();

$app->get('/hello/{name}', function ($name) use ($app) {
    return 'Hello '.$app->escape($name);
});

$app->run();