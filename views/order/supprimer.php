<?php
require __DIR__ . '/../../composer_vendor/autoload.php';
require __DIR__ . '/../../database/database.php';
require __DIR__ . '/../../models/Order.php';
require __DIR__ . '/../../controllers/OrdersController.php';


if(isset($_POST['id']))
{
$existOrder = new OrdersController();
$existOrder->deleteOrder();
}

?>