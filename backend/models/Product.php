<?php

require_once('./backend/database/database.php');

class Product {
  private $db;

  public function __construct() {
    $this->db = new Database();
    $this->db->Connect();
  }

  public function add($data) {
    $this->db->query = 'INSERT INTO products (id, price, units) VALUES(:id, :price, :units)';
  }

  public function all() {
    return $this->db->query('SELECT * FROM users');
  }

}