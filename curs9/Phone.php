<?php

/*
 * create a Phone class that inherits the Product class;
 * has 2 properties in addition to description and availability with the values available or unavailable.
 * create a toString function that overrides the Product function and displays the following information:
 * "Product: $nameProduct, with the following $description, having the price $price is $availability"
 */

require_once 'Products.php';

class Phone extends Products
{
    protected string $description;
    protected string $availability;

    public function __construct(string $nameProduct, int $price, string $description, string $availability)
    {
        parent::__construct($nameProduct, $price);
        $this->description = $description;
        $this->availability = $availability;
    }

    public function anotherProd()
    {
        return "Product: $this->nameProduct  with the following: $this->description, price: $this->price\$, availability: $this->availability";
    }
}

$phone1 = new Phone('SAMSUNG', 1000, 'S-550', 'available');
echo $phone1->anotherProd();