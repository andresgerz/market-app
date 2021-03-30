<?php


namespace backend\core;

class Request {


  public function getPath() {

    $path = $_SERVER['REQUEST_URI'] ?? '/';
    
    $position = strpos($path, '?');

    $position === false ? $path : '';

    return substr($path, 0, $position);
  }

  public function getMethod() {
    return strtolower($_SERVER['REQUEST_METHOD']);
  }
}