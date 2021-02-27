<?php
require __DIR__ . '/../../composer_vendor/autoload.php';
require __DIR__ . '/../../database/database.php';
require __DIR__ . '/../../models/Order.php';
require __DIR__ . '/../../controllers/OrdersController.php';


//require_once('../database/db.php');

$data = new OrdersController();
$orders= $data->getAllOrders();

?>

<a class="btn btn-info" href="http://localhost/APIwoocommerce/index.php">LOGOUT</a>

<center>
<a class="btn btn-info" href="http://localhost/APIwoocommerce/?page=products/lister">Gestion des produits</a>
<a class="btn btn-info" href="http://localhost/APIwoocommerce/?page=order/lister">Gestion des commandes</a>
<a class="btn btn-info" href="http://localhost/APIwoocommerce/?page=customer/lister">Gestions des clients</a>
</center>

<div class="container">
<center><h1 style="font-weight: bold;">Liste des commandes</h1></center>
</div>


<div class="container">
 <table class="table table-dark">
  <thead>
    <tr>
                                          <th>Order #</th>
                                               <th>Customer</th>
                                               <th>Address</th>
                                               <th>Contact</th>
                                               <th>Order Date</th>
                                               <th>Status</th>
                                               <th>Actions</th>
    </tr>
    </tr>
  </thead>
  <tbody>
                                              <?php
                  foreach($orders as $order){
                  echo "<tr><td>" . $order["id"]."</td>
                            <td>" .  $order["billing"]["first_name"].$order["billing"]["last_name"]."</td>
                           
                            <td>" . $order["shipping"]["address_1"]."</td>
                            <td>" . $order["billing"]["phone"]."</td>
                            <td>" . $order["date_created"]."</td>
                            <td>" . $order["status"]."</td>
                          
                            <td class='d-flex flex-row'>
                            <form method='post' class='mr-1'action='?page=order/edit'>
                            <input type='hidden' name='id' value=".$order["id"].">
                            <button class='btn btn-sm btn-warning'><i class='fa fa-edit'></i></button>
                            </form>
                           

                           
                            <form method='post' class='mr-1' action='?page=order/supprimer'>
                            <input type='hidden' name='id' value=".$order["id"].">
                            <button class='btn btn-sm btn-danger'><i class='fa fa-trash'></i></button>
                            </form>
                            </td>
                            
                            </tr>";
                
                  }
                  ?>
                  </tbody>
</table>
<center><a class="btn btn-info" href="http://localhost/APIwoocommerce/?page=order/ajouter">Ajouter une commande</a></center>
</div>