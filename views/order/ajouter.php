<?php
require __DIR__ . '/../../composer_vendor/autoload.php';
require __DIR__ . '/../../database/database.php';
require __DIR__ . '/../../models/Order.php';
require __DIR__ . '/../../controllers/OrdersController.php';


//require_once('../database/db.php');
if(isset($_POST['submit']))
{
$newOrder = new OrdersController();
$newOrder->addOrder();


}
?>
<div class="container">
<center><h1 style="font-weight: bold;">Ajouter une commande</h1></center>
</div>

<div class="container">
   <!--<a href="http://localhost/APIwoocommerce/?page=products/lister" class="btn btn-sm btn-secondary mr-2 mb-2">
   <i class="fas fa-home"></i>
   </a>-->
   <div class="row justify-content-md-center">
   <form method="post">

   
      <div class="form-group"> 
          <label for="id">first_name</label>
          <input type="text" name="first_name" class="form-control" placeholder="customer">
      </div>
     

      <div class="form-group"> 
          <label for="id">last_name</label>
          <input type="text" name="last_name" class="form-control" placeholder="customer">
      </div>
      <div class="form-group"> 
          <label for="phone">phone</label>
          <input type="text" name="phone" class="form-control" placeholder="customer">
      </div>
      <div class="form-group"> 
          <label for="email">email</label>
          <input type="text" name="email" class="form-control" placeholder="customer">
      </div>
      <div class="form-group"> 
          <label for="address_1">address_1</label>
          <input type="text" name="address_1" class="form-control" placeholder="customer">
      </div>
  
      <div class="form-group"> 
          <label for="id">product_id</label>
          <input type="text" name="product_id" class="form-control" placeholder="customer">
      </div>
      <div class="form-group"> 
          <label for="id">quantity</label>
          <input type="text" name="quantity" class="form-control" placeholder="customer">
      </div>
     
 
      <center>   <div class="form-group">
      <button  type="submit"  name="submit" class="btn btn-info">add</button>
      </div>
      </center>
      
   </form>

</div>