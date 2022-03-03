<?php 

class Product {
   public $price;
   public $type;
   public $animal;

   public function __construct($price, $type, $animal)
   {
     $this->setPrice($price);
     $this->setType($type);
     $this->setAnimal($animal);
   }

   // function Price 
   public function getPrice()
   {
      return $this->price;
   }

   public function setPrice($price)
   {
      if (!is_numeric($price) || $price <= 0) return false;
      return $this->price;
   }

   // function Type 
   public function getType()
   {
      return $this->type;
   }

   public function setType($type)
   {
      if (is_numeric($type)) return false;
      return $this->type;
   }

   // function Animal 
   public function getAnimal()
   {
      return $this->Animal;
   }

   public function setAnimal($animal)
   {
      if (is_numeric($animal)) return false;
      return $this->animal;
   }
}
