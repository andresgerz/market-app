<?php


class CustomerModel {
  
  private $customers;
  private $db;
  protected $message;

  public function __construct() {
    require_once('../database/db.php');
    $this->db = (new Database())->connect();
    $this->customers = array();
    $this->message = '';

  }

  public function add($data) {

    $query = 'INSERT INTO customers (name,surname,password,email,country,state,city,address,floor,dept,card,nro_card) VALUES(:name,:surname,:password,:email,:country,:state,:city,:address,:floor,:dept,:card,:nro_card)';
    
    $stmt = $this->db->prepare($query);
    $stmt->bindParam(':name',$data['name']);
    $stmt->bindParam(':surname',$data['surname']);
    $password = password_hash($data['password'], PASSWORD_BCRYPT);
    $stmt->bindParam(':password',$password);
    $stmt->bindParam(':email',$data['email']);
    $stmt->bindParam(':country',$data['country']);
    $stmt->bindParam(':state',$data['state']);
    $stmt->bindParam(':city',$data['city']);
    $stmt->bindParam(':address',$data['address']);
    $stmt->bindParam(':floor',$data['floor']);
    $stmt->bindParam(':dept',$data['dept']);
    $stmt->bindParam(':card',$data['card']);
    $stmt->bindParam(':nro_card',$data['nro_card']);
    
    echo '<pre>';
    var_dump($stmt);
    echo '</pre>';

    if ($stmt->execute()) {
      $this->message = 'Successfully';
    } else {
      $this->message = 'Error add to database';
    }
  }


}

/* 
`name` VARCHAR(100) NOT NULL,
  `surname` VARCHAR(100) NOT NULL,
  `email` VARCHAR(100) NOT NULL,
  `country` VARCHAR(100) NOT NULL,
  `state` VARCHAR(100) NOT NULL,
  `city` VARCHAR(100) NOT NULL,
  `address` VARCHAR(100) NOT NULL,
  `floor` INT(4) NOT NULL,
  `dept` VARCHAR(50) NOT NULL,
  `card` VARCHAR(100) NOT NULL,
  `nro_card` VARCHAR(16) NOT NULL, */