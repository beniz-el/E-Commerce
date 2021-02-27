<?php
require __DIR__ . '/../../composer_vendor/autoload.php';
require __DIR__ . '/../../database/database.php';
require __DIR__ . '/../../models/Customer.php';
require __DIR__ . '/../../controllers/CustomersController.php';


if(isset($_POST['id']))
{
$existCustomer = new CustomersController();
$existCustomer->deleteCustomer();
}

?>