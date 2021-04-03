<?php

require_once __DIR__ . '/backend/vendor/autoload.php';

use backend\controllers\SiteController;
use backend\core\Application;

$app = new Application(dirname(__DIR__));

$app->route->get('/', [SiteController::class, 'home']);

$app->route->get('/contact', [SiteController::class, 'contact']);

$app->route->post('/contact', [SiteController::class, 'handleContact']);


$app->run();