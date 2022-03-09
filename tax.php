<?php

require('fruit.php');

$tax = 0;
$totalPrice = 0;


$totalPrice = $banana['pieces']* $banana['cost'];

$tax = $banana['tax'] * $totalPrice;

$priceWithTax = $totalPrice + $tax;


    
  





?>