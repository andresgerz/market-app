<?php



class ProductModel {
  private $db;
  private $products;
  
  public function __construct() {
    require_once('../database/db.php');
    $this->db = (new Database())->connect();
    $this->products = array();
  }

  
  public function getProducts() {
    $query = $this->db->query('SELECT * FROM products');
    $row = $query->fetch(PDO::FETCH_ASSOC);

    foreach($query as $row) {
      array_push($products, $row);
    }

    return $products;
  }
  /* 
  public function add($data) {
    $this->db->query = 'INSERT INTO products (' . $data['price'] .  
    ', price) VALUES(:id, :price, :units)';
  } */
}