<?php

require("../vendor/autoload.php");

$dotenv = Dotenv\Dotenv::createImmutable("../");
$dotenv->load();


class Database {

  private $db_password;
  private $db_host;
  private $db_user;
  private $db_name;
  private $statement;
  private $db;

  public function __construct() {
    $this->db_password = $_ENV['DB_PASSWORD'];
    $this->db_user = $_ENV['DB_USER'];
    $this->db_name = $_ENV['DB_NAME'];
    $this->db_host = $_ENV['DB_HOST'];
  }


  public function Connect() {

    try {
      $db = new PDO('mysql:host=' . $this->db_host . ';dbname=' . $this->db_name, $this->db_user, $this->db_password);
      
      $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

      $db->exec("SET CHARACTER SET UTF8");

    } catch (Exception $e) {
      die ("Error" . $e->getMessage());

      echo "Error line:" . $e->getLine();
    }
    return $db;
    
  }

  public function query($sql) {
    $this->statement = $this->db->prepare($sql);
  }
}