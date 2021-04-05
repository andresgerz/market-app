<?php

namespace backend\core;

use Controller;

class SiteController extends Controller {

  public function home() {

    $params = [
      'name' => '2021'
    ];   

    return $this->render('home', $params);
  }
  
  public function contact() {

    $params = [
      'name' => 'today is the day'
    ]

    return $this->render('contact', $params);
  }

  public function handleContact(Request $request) {

    $body = $request->getBody();

    return 'Handling data';
  }
}