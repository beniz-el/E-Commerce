<?php
require __DIR__ . '/../../composer_vendor/autoload.php';
require __DIR__ . '/../../database/database.php';
require __DIR__ . '/../../models/Customer.php';
require __DIR__ . '/../../controllers/CustomersController.php';


//require_once('../database/db.php');
if(isset($_POST['id']))
{
$existCustomer= new CustomersController();
$customer=$existCustomer->getoneCustomer();
}
if(isset($_POST['submit']))
{
$id=$_POST['id'];
$name=$_POST['name'];

$existCustomer = new CustomersController();
$existCustomer->updateCustomer($id);

}
?>
<div class="container">
<center><h1 style="font-weight: bold;">modification du client</h1></center>
</div>
<div class="container">
   
   <form method="post">
   <div class="form-group"type='hidden' > 
          <label for="id">id</label>
          <input type="text" name="id" class="form-control" placeholder="id"
          value="<?php echo $customer->id;?>"
         >
      </div>
      <div class="form-group" > 
          <label for="email">email</label>
          <input type="text" name="email" class="form-control" placeholder="email"
          value="<?php echo $customer->email;?>"
         >
      </div>
      <div class="form-group" > 
          <label for="first_name">first_name</label>
          <input type="text" name="first_name" class="form-control" placeholder="first_name"
          value="<?php echo $customer->first_name;?>"
         >
      </div>
   
      <div class="form-group" > 
          <label for="last_name">last_name</label>
          <input type="text" name="last_name" class="form-control" placeholder="last_name"
          value="<?php echo $customer->last_name;?>"
         >

         <div class="form-group" > 
          <label for="address_1">username</label>
          <input type="text" name="username" class="form-control" placeholder="username"
          value="<?php echo ($customer->username);?>"
         >
      </div>
      </div>
      <div class="form-group" > 
          <label for="address_1">address_1</label>
          <input type="text" name="address_1" class="form-control" placeholder="address_1"
          value="<?php echo ($customer->billing->address_1);?>"
         >
      </div>

      

      <div class="form-group">
      <button  type="submit"  name="submit" class="btn btn-info">update</button>
      </div>
   </form>
   
   </a>
</div>