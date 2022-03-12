<?php

require_once __DIR__ . '/Person.php';
require_once __DIR__ . '/CreditCard.php';
require_once __DIR__ . '/Product.php';
require_once __DIR__ . '/Customer.php';
require_once __DIR__ . '/Cart.php';

$card_1 = new CreditCard('54329898009838', 'Mastercard', 2022, 260);
$collare = new Product(55, 'accessory', 'dog');
$feed = new Product(40, 'food', 'cat');
var_dump($collare);
$customer_1 = new Customer('Mario', 'Rossi', $card_1, $signed = true);
var_dump($customer_1);


$customer_1->paymant($collare->price);
var_dump($customer_1);


$cart= new Cart($customer_1);
var_dump($cart);

$cart->setCart($feed);
var_dump($cart);
var_dump($customer_1);

$timestamp = strtotime('now');
echo date('d/m/Y', $timestamp);