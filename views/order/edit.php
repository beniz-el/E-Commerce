<?php
require __DIR__ . '/../../composer_vendor/autoload.php';
require __DIR__ . '/../../database/database.php';
require __DIR__ . '/../../models/Order.php';
require __DIR__ . '/../../controllers/OrdersController.php';


//require_once('../database/db.php');
if(isset($_POST['id']))
{
$existOrder = new OrdersController();
$order=$existOrder->getoneOrder();
}
if(isset($_POST['submit']))
{
$id=$_POST['id'];
$name=$_POST['name'];

$existOrder = new OrdersController();
$existOrder->updateOrder($id);

}
?>
<div class="container">
<center><h1 style="font-weight: bold;">modification de la commande</h1></center>
</div>

<div class="container">
   
   <form method="post">
   <div class="form-group"type='hidden' > 
          <label for="id">id</label>
          <input type="text" name="id" class="form-control" placeholder="customer"
          value="<?php echo $order->id;?>"
         >
      </div>
      <div class="form-group"type='hidden' > 
          <label for="first_name">first_name</label>
          <input type="text" name="first_name" class="form-control" placeholder="customer"
          value="<?php echo $order->billing->first_name;?>"
         >
      </div>
      <div class="form-group"type='hidden' > 
          <label for="last_name">last_name</label>
          <input type="text" name="last_name" class="form-control" placeholder="customer"
          value="<?php echo $order->billing->last_name;?>"
         >
      </div>
      <div class="form-group"type='hidden' > 
          <label for="phone">phone</label>
          <input type="text" name="phone" class="form-control" placeholder="customer"
          value="<?php echo $order->billing->phone;?>"
         >
      </div>
      <div class="form-group"type='hidden' > 
          <label for="phone">email</label>
          <input type="text" name="email" class="form-control" placeholder="customer"
          value="<?php echo $order->billing->email;?>"
         >
      </div>
      <div class="form-group"type='hidden' > 
          <label for="address">address</label>
          <input type="text" name="address_1" class="form-control" placeholder="customer"
          value="<?php echo $order->shipping->address_1;?>"
         >
      </div>
     
      </div>
      

 
      </div>
      <center>
      <div class="form-group">
      <button  type="submit"  name="submit" class="btn btn-info">update</button>
      </div>
      </center>
   </form>

</div>