<?php

require_once __DIR__ . '/backend/vendor/autoload.php';

use backend\controllers\SiteController;
use backend\controllers\AuthController;
use backend\core\Application;

$app = new Application(dirname(__DIR__));

$app->route->get('/', [SiteController::class, 'home']);

$app->route->get('/contact', [SiteController::class, 'contact']);

$app->route->post('/contact', [SiteController::class, 'handleContact']);


$app->route->get('/login', [AuthController::class, 'login']);
$app->route->post('/login', [AuthController::class, 'login']);

$app->route->get('/register', [AuthController::class, 'register']);
$app->route->post('/register', [AuthController::class, 'register']);

$app->run();