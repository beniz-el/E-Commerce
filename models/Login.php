<?php
require __DIR__ . '/../database/database.php';

class Login
{
    static  public function connect($data)
    {
        $ck=$data['ck'];
        $cs=$data['cs'];
        $site=$data['site'];
        $login= new DB();
        $login->connect($ck, $cs,$site);


    }
}
?>