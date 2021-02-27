<?php
require __DIR__ . '/../composer_vendor/autoload.php';
use Automattic\WooCommerce\Client;
 
  class DB{
     public function connect($ck, $cs,$site)
    {

        $woocommerce = new Client(
            $site,
            $ck,
            $cs,
            [
                'wp_api' => true,
                'version' => 'wc/v3',
                'query_string_auth' => true // Force Basic Authentication as query string true and using under HTTPS
            ]
        );
       
      //  echo json_encode($woocommerce->get('products'));
        return  $woocommerce ;
    }
}
/*
/*
'http://localhost/wordpress',
            'ck_3240a21cabb4f0ce82ad342174a9ca138df2d0c7',
            'cs_320f222b61556d8580322e208140e82512879e72', 
            */
?>

