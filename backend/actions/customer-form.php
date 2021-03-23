<?php

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
  'card' => $_POST['credit-card-name'],
  'nro_card' => $_POST['nro-credit-card-name']
);

echo '<pre>';
print_r($data_form);
echo '</pre>';


$product = new ProductController();
$product->$this->store($data_form);