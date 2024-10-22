<?php

// create a class Products with properties: nameProduct and price.
// reate a toString() function that show info for the Product in the form: "Product: $productname, price: $price."
class Products
{
    public string $nameProduct;
    public int $price;

    public function __construct($nameProduct, $price)
    {
        $this->nameProduct = $nameProduct;
        $this->price = $price;
    }

    public function __toString()
    {
        return "Product: $this->nameProduct, price: $this->price \$.";
    }
}

$product = new Products('mere', 5);
echo $product;

