<?php 

session_start();
require_once('../models/CustomerModel.php');

$data_form = array(
  'name' => $_POST['name-name'],
  'surname' => $_POST['surname-name'],
  'email' => $_POST['email-name'],
  'country' => $_POST['country-name'],
  'state' => $_POST['state-name'],
  'city' => $_POST['city-name'],
  'address' => $_POST['address-name'],
  'floor' => $_POST['floor-name'],
  'dept' => $_POST['dept-name'],
  'card' => $_POST['card-name'],
  'nro_card' => $_POST['nro-card-name'],
  'password' => $_POST['password-name'],
  'password2' => $_POST['password-repeat-name']
);

echo '<pre>';
print_r($data_form);
echo '</pre>';


if (!empty($data_form['email']) && !empty($data_form['password']) && ($data_form['password'] === $data_form['password2'])) {
  echo 'verification';
  $customer = new CustomerModel();
  $customer->add($data_form);

  /* $_SESSION['customer_id'] = $data_form['email'];
  header('Location: /index.html'); */
} else {
  $message = 'Incomplete form!';
}