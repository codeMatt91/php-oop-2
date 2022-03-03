<?php

require_once __DIR__ . '/Person.php';
require_once __DIR__ . '/Card.php';
require_once __DIR__ . '/Product.php';

class Customer extends Person
{

   public $signed;
   public $card;


   public function __construct($name, $last_name, $age, $card, $signed = false)
   {
      parent::__construct($name, $last_name, $age);
      $this->setCard($card);
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

   // Function Paymant
   public function paymant($amount)
   {
      if (!is_numeric($amount) || $amount < $this->balance) return false;

      $this->balance -= $amount;

      echo "Pagamento andato a buon fine";
   }

   // Function upgradeBalance
   public function upgradeBalance($amount)
   {
      if (!$amount || !is_numeric($amount) || $amount > $this->balance) return false;
      $this->balance -= $amount;

      echo "Saldo aggiornato: " . $this->balance;
   }
}
