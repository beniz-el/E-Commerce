<?php include 'views/includes/header.php';?>
<?php
require_once './composer_vendor/autoload.php';
require_once './controllers/HomeController.php';
$home = new HomeController();
$pages=['home',
'products/ajouter','products/edit','products/supprimer','products/lister',
'order/ajouter','order/edit','order/supprimer','order/lister',
'customer/ajouter','customer/edit','customer/supprimer','customer/lister'

];

if(isset($_GET['page']))
{
    if(in_array($_GET['page'],$pages))
    {
        $page=$_GET['page'];
        $home->index($page);
    }
    else{
       print("404");
    }
}
    else{
        $home->index('Login/login');
      
    }


//$home->index($_GET['page']);
//$home->index('home');

?>

