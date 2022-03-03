<?php

require_once __DIR__ . '/Person.php';
require_once __DIR__ . '/Card.php';
require_once __DIR__ . '/Product.php';

class Customer extends Person
{

   public $signed;
   public $card;
   public $credit_card;


   public function __construct($name, $last_name, $age, $card, $credit_card, $signed = false)
   {
      parent::__construct($name, $last_name, $age);
      $this->setCard($card);
      $this->setCreditCard($credit_card);
      $this->credit_card = $credit_card;
      $this->signed = $signed;
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

   public function setCreditCard($total)
   {
      if (!is_numeric($total) || $total < 0) return false;
      $this->credit_card = $total;
   }
   public function getCreditCard()
   {
      return $this->credit_card;
   }
   // Function Paymant
   public function paymant($amount)
   {
     
      $success = $this->card->paymant($amount);
      if (!$success) return false;
      $total = $this->credit_card - $amount;
      $this->setCreditCard($total);


      echo "Pagamento andato a buon fine";
   }
}
