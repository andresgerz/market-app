<?php

require_once __DIR__ . '/backend/vendor/autoload.php';
use backend\core\Application;

$app = new Applicacion();

$app->route->get('/', function() {
  return 'hi';
});
$app->run();