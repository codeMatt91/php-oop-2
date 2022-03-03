<?php

require_once __DIR__ . '/Person.php';
require_once __DIR__ . '/Card.php';
require_once __DIR__ . '/Product.php';

class Customer extends Person
{

   public $signed;
   public $card;
   public $product;

   public function __construct($card, $product, $signed = false)
   {
      $this->setCard($card);
      $this->setProduct($product);
   }

   // Function setCard
   public function setCard($card)
   {
      if ($card instanceof Card === false) return false;
      $this->card = $card;
   }

   public function getCard()
   {
      return $this->card;
   }

   //Function Product
   public function setProduct($product){
      if($product instanceof Product === false || is_numeric($product)) return false;
      $this->product = $product;
   }

   public function getProduct()
   {
      return $this->product;
   }
}
