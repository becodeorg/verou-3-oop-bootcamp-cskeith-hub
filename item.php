<?php

class Item {
    public $name;
    public $amount;
    public $cost;
    public $tax;

    public function __construct(string $name, int $amount, float $cost,float $tax)
    {
        $this->name = $name;
        $this->amount = $amount;
        $this->cost = $cost;
        $this->tax = $tax;
    }

    public function totalPrice()
    {
        $priceItem = $this->cost * $this->amount;

        $priceTax = $priceItem * $this->tax;

        $totalPrice = $priceItem + $priceTax;

        return $totalPrice;
    }

}

$basket = [
    'banana' => new Item("banana", 6, 1, 0.06),
    'apple' => new Item("apple", 3, 1.5, 0.06),
    'wine' => new Item("wine", 2, 10, 0.21)
];

function basketLoop($basket)
{
    $basketTotal = 0;

    foreach($basket as $item)
    {
        $basketTotal = $basketTotal + $item->totalPrice();
        
        
    }
    return $basketTotal;
}

?>