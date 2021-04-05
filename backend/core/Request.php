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

  public function getBody() {

    $body = [];

    if ($this->getMethod() === 'get') {
      foreach ($_GET as $key => $val) {
        $body['key'] = filter_input(INPUT_GET, $key, FILTER_SANITIZE_SPECIAL_CHARS);  
      }
    }

    if ($this->getMethod() === 'post') {
      foreach ($_POST as $key => $val) {
        $body['key'] = filter_input(INPUT_POST, $key, FILTER_SANITIZE_SPECIAL_CHARS);  
      }
    }
  }
}