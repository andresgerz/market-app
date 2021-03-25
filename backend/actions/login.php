<?php 


session_start();

if (isset($_SESSION['user_id'])) {
  //header('Location: /php-login');
}

$email = $_POST['email-name'];
$password = $_POST['password-name'];

if (!empty($email) && !empty($password)) {
  
  require __DIR__ . '/../models/CustomerModel.php';  
  
  $customer = new CustomerModel();
  $data_customer = $customer->getCustomers($email);
  
  echo '<pre>';
  var_dump($data_customer);
  echo '</pre>';
  echo '<pre>';
  //var_dump(password_verify($password, $data_customer['password']));
  echo '</pre>';
  if (($data_customer['password'] === $password) && $email === $data_customer['email']) {
    echo 'OK';
    $_SESSION['customer_id'] = $data_customer['id_customer'];
    //header('Location: /login');
  } else {
    echo 'NO';
    $message = 'Sorry, don\'t work login';
  }
}