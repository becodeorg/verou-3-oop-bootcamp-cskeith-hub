<?php
declare(strict_types=1);

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

require('item.php');
echo basketLoop($basket);
echo " Euro is the total price of your basket inc TAX";
?>