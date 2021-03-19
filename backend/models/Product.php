<?php

class Product {
  private $db;

  public function __construct() {
    $this->db = new Database();
  }

  public function add($data) {
    $this->db->query = 'INSERT INTO products (id, price, units) VALUES(:id, :price, :units)';
  }

}