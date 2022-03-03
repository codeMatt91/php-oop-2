<?php

class Card
{

   public $number;
   public $type;
   public $date;
   public $balance;

   public function __construct($number, $type, $date, $balance)
   {
      $this->setNumber($number);
      $this->setType($type);
      $this->setDate($date);
      $this->setBalance($balance);
   }

   // function Number 
   public function getNumber()
   {
      return $this->number;
   }

   public function setNumber($number)
   {
      if (!is_numeric($number) || mb_strlen($number) < 10) return false;
      $this->number = $number;
   }

   // function Type 
   public function setType($type)
   {
      if (is_numeric($type)) return false;
      $this->type = $type;
   }
   public function getType()
   {
      return $this->type;
   }

   // function Date
   public function getDate()
   {
      return $this->date;
   }

   public function setDate($date)
   {
      if (!is_numeric($date) || $date < 2000) return false;
      $this->date = $date;

      echo 'La tua carta non é valida';
   }

   // function Balance 
   public function setBalance($balance)
   {
      if ($balance <= 0 || !is_numeric($balance)) return false;
      $this->balance = $balance;
   }
   public function getBalance()
   {
      return $this->balance;
   }

   
}
