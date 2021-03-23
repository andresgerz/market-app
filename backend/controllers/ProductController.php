<?php

//require('../assets/market-form.php');
//require_once('../class/Product.php');
require_once('../models/ProductModel.php');
//require_once('../views/ProductView.php');

class ProductController {
  
  private $product;

  public function __construct() {
    $this->product = (new ProductModel())->getProducts();
    //require_once('../views/ProductView.php');
  }


/* 
  protected function store($data_form) {
    $this->product->add(array('product' => $data_form['product'], 'price' => $data_form['price'] ));

  } */

}