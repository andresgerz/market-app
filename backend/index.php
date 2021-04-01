<?php

require_once __DIR__ . '/backend/vendor/autoload.php';
use backend\core\Application;

$app = new Applicacion(dirname(__DIR__));

$app->route->get('/', 'home');

$app->route->get('/contact', 'contact');

$app->route->post('/contact', function() {
  return 'handle submit data';
});


$app->run();