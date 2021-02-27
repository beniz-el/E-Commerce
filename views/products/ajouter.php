<?php
require __DIR__ . '/../../composer_vendor/autoload.php';
require __DIR__ . '/../../database/database.php';
require __DIR__ . '/../../models/Product.php';
require __DIR__ . '/../../controllers/ProductsController.php';

//require_once('../database/db.php');
if(isset($_POST['submit']))
{
$newProduct = new ProductsController();
$newProduct->addProduct();


}
?>
<div class="container">
<center><h1 style="font-weight: bold;">Ajouter des produits</h1></center>
</div>

<div class="container">
   <!--<a href="http://localhost/APIwoocommerce/?page=products/lister" class="btn btn-sm btn-secondary mr-2 mb-2">
   <i class="fas fa-home"></i>
   </a>-->
   <div class="row justify-content-md-center">
   <form method="post">

   <div class="form-group"> 
          <label for="id">name</label>
          <input type="text" name="name" class="form-control" placeholder="name">
      </div>
      <div class="form-group"> 
          <label for="customer">type</label>
          <input type="text" name="type" class="form-control" placeholder="type">
      </div>

      <div class="form-group"> 
          <label for="customer">regular_price</label>
          <input type="text" name="regular_price" class="form-control" placeholder="regular_price">
      </div>

      <div class="form-group"> 
          <label for="customer">description</label>
          <input type="text" name="description" class="form-control" placeholder="description">
      </div>
      <div class="form-group"> 
          <label for="customer">short_description</label>
          <input type="text" name="short_description" class="form-control" placeholder="short_description">
      </div>

      <div class="form-group"> 
          <label for="customer">categories</label>
          <input type="text" name="categories" class="form-control" placeholder="categories">
      </div>

      <div class="form-group"> 
          <label for="customer">choisir une image</label>
          <input name="file" type="file"  class="hidden" >
      </div>

      <center><div class="form-group">
      <button  type="submit"  name="submit" class="btn btn-info">Ajouter un produit</button>
      </div>
      </center>
   </form>
   </div>
</div>
