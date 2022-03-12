<?php 

require_once __DIR__ . '/Product.php';
require_once __DIR__ . '/Customer.php';
require_once __DIR__ . '/RegisteredCustomer.php';

class Cart 
{
    private $owner;
    public $products = [];
    public $tot_price=0;

    public function __construct($owner)
    {
        $this->setOwner($owner);
    }

    public function setOwner($owner){
        if(!($owner instanceof Customer) || !($owner instanceof RegisteredCustomer) && !is_object($owner)) return false;
        $this->owner = $owner;

    }

    public function setCart($product){
        if(!$product instanceof Product && !is_object($product) ) return false;

        $this->products[] = $product;
        $this->owner->credit_card->balance -= $product->price;
        $this->tot_price += $product->price;
    }
}
?>