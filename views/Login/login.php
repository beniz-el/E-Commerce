<?php include'views/includes/header.php'?>
<?php
require __DIR__ . '/../../controllers/LoginController.php';


if(isset($_POST["submit"]))
{
    $login=new LoginController();
    $login->auth();
}
?>

<style>body {
  margin: 0;
  padding: 0;
  background-color: #17a2b8;
  height: 150vh;
}
#login .container #login-row #login-column #login-box {
  margin-top: 120px;
  max-width: 600px;
  height: 420px;
  border: 1px solid #9C9C9C;
  background-color: #EAEAEA;
}
#login .container #login-row #login-column #login-box #login-form {
  padding: 20px;
}
#login .container #login-row #login-column #login-box #login-form #register-link {
  margin-top: -85px;
}</style>
<div id="login">
        <h3 class="text-center text-white pt-5">Se conencter </h3>
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                        <form id="login-form" class="form" method="post">
                            <h3 class="text-center text-info">Login </h3>
                            <div class="form-group">
                                <label for="username" class="text-info">Le lien de votr site</label><br>
                                <input type="text" name="site" id="site" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="password" class="text-info">Consumer key</label><br>
                                <input type="password" name="ck" id="ck" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="password" class="text-info">Secret key</label><br>
                                <input type="password" name="cs" id="cs" class="form-control">
                            </div>
                            <div class="form-group">      
                               <button type="submit" name="submit" class="btn btn-info">Connect</button>
                               </div>
                           
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>