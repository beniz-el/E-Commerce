<?php
require __DIR__ . '/../../composer_vendor/autoload.php';
require __DIR__ . '/../../database/database.php';
require __DIR__ . '/../../models/Product.php';
require __DIR__ . '/../../controllers/ProductsController.php';


//require_once('../database/db.php');
if(isset($_POST['id']))
{
$existProduct = new ProductsController();
$product=$existProduct->getoneProduct();
}
if(isset($_POST['submit']))
{
$id=$_POST['id'];
$name=$_POST['name'];

$existProduct = new ProductsController();
$existProduct->updateProduct($id);

}
?>
<div class="container">
<center><h1 style="font-weight: bold;">modification des produits</h1></center>
</div>
<div class="container">
  
   <div class="container">
   <form method="post">
   <div class="form-group"type='hidden' > 
          <label for="id">id</label>
          <input type="text" name="id" class="form-control" placeholder="id"
          value="<?php echo $product->id;?>"
         >
      </div>
   <div class="form-group"> 
          <label for="name">name</label>
          <input type="text" name="name" class="form-control" placeholder="name"
          value="<?php echo $product->name;?>"
         >
      </div>
      <div class="form-group"> 
          <label for="type">type</label>
          <input type="text" name="type" class="form-control" placeholder="type"
          value="<?php echo $product->type;?>">

      </div>

      <div class="form-group"> 
          <label for="regular_price">regular_price</label>
          <input type="text" name="regular_price" class="form-control" placeholder="regular_price"
          value="<?php echo $product->regular_price;?>">
          
      </div>

      <div class="form-group"> 
          <label for="description">description</label>
          <input type="text" name="description" class="form-control" placeholder="description"
          value="<?php echo $product->regular_price;?>">
      </div>
      <div class="form-group"> 
          <label for="short_description">short_description</label>
          <input type="text" name="short_description" class="form-control" placeholder="short_description"
          value="<?php echo $product->short_description;?>">
      </div>

      <div class="form-group"> 
          <label for="categories">categories</label>
          <input type="text" name="categories" class="form-control" placeholder="categories">
          
      </div>

      <div class="form-group"> 
          <label for="images">images</label>
          <input name="file" type="file"  class="hidden" >
      </div>

      <center>
      <div class="form-group">
      <button  type="submit"  name="submit" class="btn btn-info">update</button>
      </div>
      </center>
   </form>
   </div>
</div>