<?php

namespace backend\core;

class Applicacion {

  public Router $router;
  public Request $request;
  
  public function __construct() {
    
    $this->request = new Request();
    $this->router = new Router($this->request);


  }

  public function run() {
    
    $this->router->resolve();
  }

}