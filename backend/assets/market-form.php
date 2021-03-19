<?php

$data_form = array(
  'email' => $_POST['email-name'],
  'country' => $_POST['country-name'],
  'street' => $_POST['street-name'],
  'floor' => $_POST['floor-name'],
  'dept' => $_POST['dept-name'],
  'card' => $_POST['credit-card-name'],
  'nro_card' => $_POST['nro-credit-card-name']
);

echo '<pre>';
print_r($data_form);
echo '</pre>';