<?php include 'views/includes/header.php';?>
<?php include 'views/includes/navbar.php';?>

<?php
require __DIR__ . '/composer_vendor/autoload.php';

use Automattic\WooCommerce\Client;

$woocommerce = new Client(
    'http://localhost/wordpress',
    'ck_3240a21cabb4f0ce82ad342174a9ca138df2d0c7',
    'cs_320f222b61556d8580322e208140e82512879e72',
    [
        'wp_api' => true,
        'version' => 'wc/v3',
        'query_string_auth' => true // Force Basic Authentication as query string true and using under HTTPS
    ]
);
//echo json_encode($woocommerce->get('products'));


try {
    $results = $woocommerce->get('orders');
    $products = $woocommerce->get('products');
    $customers = $woocommerce->get('customers');
    $result = count($results);
    $customer = count($customers);
    $product = count($products);
    $results = json_encode($woocommerce->get('orders'));
    $products = json_encode($woocommerce->get('products'));
    $customers =json_encode( $woocommerce->get('customers'));
    $results = json_decode( $results,true);
    $products = json_decode($products, true);
    $customers =json_decode( $customers,true);

    //you can set any date which you want
               $query = ['date_min' => '2021-01-01', 'date_max' => '2021-10-30'];
  /*  $sales = $woocommerce->get('reports/sales', $query);
    $sale = $sales[0]["total_sales"];*/
    }
    catch(HttpClientException $e) {
    $e->getMessage(); // Error message.
    $e->getRequest(); // Last request data.
    $e->getResponse(); // Last response data.
    }

    if (isset($_POST['btn-update'])) {
        $status = $_POST['bookId'];
        $st = $_POST['ostatus'];
        $woocommerce->put('orders/' . $status, array(
        'status' => $st
        ));
        header('Location: http://localhost/APIwoocommerce/index1.php');
        }

    if (isset($_POST['btn-delete'])) {
            $oid = $_POST['cId'];
            $woocommerce->delete('orders/' . $oid, ['force' => true]);
            header('Location: http://localhost/APIwoocommerce/index1.php');
            }
?>
<div class="container">
                                  <h2 class="sub-header">Products </h2>
                                  <div class='table-responsive'>
                                      <table id='myTable' class='table table-striped table-bordered'>
                                          <thead>
                                              <tr>
                                                  <th>SKU</th>
                                                  <th>Name</th>
                                                  <th>Status</th>
                                                  <th>Price</th>
                                                  <th>Total Sales</th>
                                                  <th>Picture</th>
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
                            <td><img height='50px' width='50px' src='".$product["images"][0]["src"]."'></td></tr>";
                  }
                  ?>
                                          </tbody>
                                      </table>
                                  </div>
  </div>




