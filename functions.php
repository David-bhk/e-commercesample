<?php
//require Mysql conetion
require ('database/DBController.php');
// require Product Class
require ('database/Product.php');
// require Cart Class
require ('database/Cart.php');
// DBController object
$db = new DBController();

// Product object
$product = new Product($db);
$product_suffle=$product->getData();

// Cart object
$Cart = new Cart($db);
