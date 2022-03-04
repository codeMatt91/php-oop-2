<?php

require_once __DIR__ . '/Person.php';
require_once __DIR__ . '/CreditCard.php';
require_once __DIR__ . '/Product.php';
require_once __DIR__ . '/Customer.php';

$card_1 = new CreditCard('54329898009838', 'Mastercard', 2022, 260);
$collare = new Product(55, 'accessory', 'dog');
var_dump($collare);
$customer_1 = new Customer('Mario', 'Rossi', $card_1, $signed = true);
var_dump($customer_1);

$customer_1->paymant($collare->price);
var_dump($customer_1);
