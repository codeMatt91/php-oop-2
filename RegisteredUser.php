<?php

require_once __DIR__ . '/Customer.php';
require_once __DIR__ . '/Person.php';

class RegisteredCustomer extends Customer
{

   use Person;

   public $mail;
   public $password;
   public $address;

   public function __construct($name, $last_name, $mail, $password, $address, $credit_card, $signed = true)
   {
      parent::__construct($name, $last_name, $credit_card, $signed = true);
      $this->setName($name);
      $this->setLastName($last_name);
      $this->setMail($mail);
      $this->setPassword($password);
      $this->setAddress($address);
      $this->signed = $signed;
      $this->setCreditCard($credit_card);
   }

   public function setCreditCard($credit_card)
   {
      if (!is_object($credit_card) === false) return false;
      $this->credit_card = $credit_card;
   }

   public function getCreditCard()
   {
      return $this->credit_card;
   }

   public function setMail($mail)
   {
      if (is_numeric($mail)) return false;
      $this->mail = $mail;
   }

   public function getMail()
   {
      return $this->mail;
   }

   public function setPassword($password)
   {
      if (is_numeric($password) || strlen($password) <= 5) return false;
      $this->password = $password;
   }

   public function getPassword()
   {
      return $this->password;
   }

   public function setAddress($address)
   {
      if (is_numeric($address) || strlen($address) <= 5) return false;
      $this->address = $address;
   }

   public function getAddress()
   {
      return $this->address;
   }
}
