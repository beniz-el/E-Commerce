<?php
require __DIR__ . '/../../composer_vendor/autoload.php';
require __DIR__ . '/../../database/database.php';
require __DIR__ . '/../../models/Customer.php';
require __DIR__ . '/../../controllers/CustomersController.php';

//require_once('../database/db.php');
if(isset($_POST['submit']))
{
$newCustomer= new CustomersController();
$newCustomer->addCustomer();


}
?>
<div class="container">
<center><h1 style="font-weight: bold;">Ajouter un client</h1></center>
</div>

<div class="container">
  
   <form method="post">

   <div class="form-group"> 
          <label for="id">email</label>
          <input type="text" name="email" class="form-control" placeholder="email">
      </div>
      <div class="form-group"> 
          <label for="customer">first_name</label>
          <input type="text" name="first_name" class="form-control" placeholder="first_name">
      </div>

      <div class="form-group"> 
          <label for="customer">last_name</label>
          <input type="text" name="last_name" class="form-control" placeholder="last_name">
      </div>

      <div class="form-group"> 
          <label for="customer">adress</label>
          <input type="text" name="address_1" class="form-control" placeholder="adress">
      </div>
      <div class="form-group"> 
          <label for="username">username</label>
          <input type="text" name="username" class="form-control" placeholder="username">
      </div>

  
      <center>   <div class="form-group">
      <button  type="submit"  name="submit" class="btn btn-info">add</button>
      </div>
      </center>
      </div>
   </form>

</div>

