

<?php
require __DIR__ . '/../../composer_vendor/autoload.php';
require __DIR__ . '/../../database/database.php';
require __DIR__ . '/../../models/Product.php';
require __DIR__ . '/../../controllers/ProductsController.php';



$data = new ProductsController();
$products= $data->getAllProducts();

?>
<?php 
 if (isset($_POST['export'])) {

  $data= new ProductsController();
  $data->export1();
}
?>

<a class="btn btn-info" href="http://localhost/APIwoocommerce/index.php">LOGOUT</a>

<center>
<a class="btn btn-info" href="http://localhost/APIwoocommerce/?page=products/lister">Gestion des produits</a>
<a class="btn btn-info" href="http://localhost/APIwoocommerce/?page=order/lister">Gestion des commandes</a>
<a class="btn btn-info" href="http://localhost/APIwoocommerce/?page=customer/lister">Gestions des clients</a>
</center>

<div class="container">
<center><h1 style="font-weight: bold;">Liste des produits</h1></center>
</div>
<div class="container" style="margin-bottom:30px;">

<form method="post" >
<input type="hidden" name="export" value="exportCSV">
 <input type="submit"  class="btn btn-info" value="CSV export"/>
</form>

</div>


<div class="container">
 <table class="table table-dark">
  <thead>
    <tr>
              <th>id #</th>
              <th>name</th>
              <th>status</th>
              <th>price</th>
              <th>total_sales</th>
               <th>image</th>
               <th>Actions</th>
    </tr>
    </tr>
  </thead>
  <tbody>
                                              <?php
                  foreach($products as $product){
                  echo "<tr><td>" . $product["id"]."</td>
                            <td>" . $product["name"]."</td>
                            <td>" . $product["status"]."</td>
                            <td>" . $product["price"]."</td>
                            <td>" . $product["total_sales"]."</td>
                            <td><img height='50px' width='50px' src='".$product["images"][0]["src"]."'></td>
                          
                            <td class='d-flex flex-row'>
                            <form method='post' class='mr-1'action='?page=products/edit'>
                            <input type='hidden' name='id' value=".$product["id"].">
                            <button class='btn btn-sm btn-warning'><i class='fa fa-edit'>&nbsp;Update</i></button>
                            </form>
                           

                           
                            <form method='post' class='mr-1' action='?page=products/supprimer'>
                            <input type='hidden' name='id' value=".$product["id"].">
                            <button class='btn btn-sm btn-danger'><i class='fa fa-trash'>&nbsp;Delete</i></button>
                            </form>
                            </td>
                            
                            </tr>";
                
                  }
                  ?>
                  </tbody>
</table>
<center><a class="btn btn-info" href="http://localhost/APIwoocommerce/?page=products/ajouter">Ajouter un produis</a></center>
</div>