<?php
declare(strict_types=1);

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

require('fruit.php');

echo " this is the number of banana u want is {$banana['pieces']}";
echo "<br>";
echo " and the cost is {$banana['cost']} a piece";
echo "<br>";
echo " the tax on a banana is {$banana['tax']}%";
echo "<br>";
echo " you will pay {$tax} tax";
echo "<br>";
echo "the total price is {$totalPrice} euro";

?>