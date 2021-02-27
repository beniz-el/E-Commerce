<?php
require __DIR__ . '/../../composer_vendor/autoload.php';
require __DIR__ . '/../../database/database.php';
require __DIR__ . '/../../models/Customer.php';
require __DIR__ . '/../../controllers/CustomersController.php';



$data = new CustomersController();
$customers= $data->getAllCustomers();

?>

<a class="btn btn-info" href="http://localhost/APIwoocommerce/index.php">LOGOUT</a>

<center>
<a class="btn btn-info" href="http://localhost/APIwoocommerce/?page=products/lister">Gestion des produits</a>
<a class="btn btn-info" href="http://localhost/APIwoocommerce/?page=order/lister">Gestion des commandes</a>
<a class="btn btn-info" href="http://localhost/APIwoocommerce/?page=customer/lister">Gestions des clients</a>
</center>

<div class="container">
<center><h1 style="font-weight: bold;">Liste des clients</h1></center>
</div>
<div class="container">
   
 <table class="table table-dark">
 
  <thead  >
    <tr>
    <th>id</th>
    <th>Email</th>
    <th>Name</th>
      <th>Billing Address</th>
  <!-- <th>Total Orders</th>-->
    <!--  <th>Total spent</th>-->
      <th>Avatar</th>
    </tr>
    
  </thead>
  <tbody  >
                                              <?php
                  foreach($customers as $customer){
                  echo "<tr><td>" . $customer["id"]."</td>
                            <td>" . $customer["email"]."</td>
                            <td>" . $customer["first_name"].$customer["last_name"]."</td>
                            <td>" .  $customer["billing"]["address_1"]."</td>
                            <td><img height='50px' width='50px' src='".$customer["avatar_url"]."'></td>
                            <td class='d-flex flex-row'>
                            <form method='post' class='mr-1'action='?page=customer/edit'>
                            <input type='hidden' name='id' value=".$customer["id"].">
                            <button class='btn btn-sm btn-warning'><i class='fa fa-edit'></i></button>
                            </form>
                           

                           
                            <form method='post' class='mr-1' action='?page=customer/supprimer'>
                            <input type='hidden' name='id' value=".$customer["id"].">
                            <button class='btn btn-sm btn-danger'><i class='fa fa-trash'></i></button>
                            </form>
                            </td>
                            
                            </tr>";
                
                  }
                  ?>
                  </tbody>
</table>
<center><a class='btn btn-sm btn-info' href="http://localhost/APIwoocommerce/?page=customer/ajouter">Add</a></center>

</div>