<?php

class Card
{

   public $number;
   public $type;
   public $date;
   public $balance;

   public function __construct($number, $type, $date, $balance)
   {
      $this->number = $number;
      $this->type = $type;
      $this->date = $date;
      $this->balance = $balance;
   }

   // function Number 
   public function getNumber()
   {
      return $this->number;
   }

   public function setNumber($number)
   {
      if (!is_numeric($number) || mb_strlen($number)) return false;
      return $this->number;
   }

   // function Type 
   public function setType($type)
   {
      if (is_numeric($type)) return false;
      return $this->type;
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
      return $this->date;
   }

   // function Balance 
   public function setBalance($balance)
   {
      if ($balance <= 0 || !is_numeric($balance)) return false;
      return $this->balance;
   }
   public function getBalance()
   {
      return $this->balance;
   }

   public function withdraw($amount)
   {
      if (!is_numeric($amount) || $amount < $this->balance) return false;

      $this->balance -= $amount;
   }
}
