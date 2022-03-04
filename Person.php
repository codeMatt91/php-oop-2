<?php

trait Person
{
   public $name;
   public $last_name;


   public function setName($name)
   {
      if (is_numeric($name)) return false;
      $this->name = $name;
   }

   public function getName()
   {

      return $this->name;
   }

   public function setLastName($last_name)
   {
      if (is_numeric($last_name)) return false;
      $this->last_name = $last_name;
   }

   public function getLastName()
   {

      return $this->last_name;
   }
}
