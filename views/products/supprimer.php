<?php
require __DIR__ . '/../../composer_vendor/autoload.php';
require __DIR__ . '/../../database/database.php';
require __DIR__ . '/../../models/Product.php';
require __DIR__ . '/../../controllers/ProductsController.php';


if(isset($_POST['id']))
{
$existProduct = new ProductsController();
$existProduct->deleteProduct();
}

?>