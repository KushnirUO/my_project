<?php
require_once "../config/settings.php";

function dd($date, $stop=null){
    echo "<pre>Dump:<br>";
    print_r($date);
    echo "</pre>";
    if($stop!=null && $stop!=0)exit();
}


function connect(){
    $ar=get_param();

    dd($ar);
    $dsn = "mysql: dbname=".$ar['db_name'].";host=127.0.0.1";
    $user = $ar['user'];
    $password = $ar['password'];
    try {
        $link = new PDO($dsn, $user, $password);
        echo "success";
    } catch (PDOException $e){
        echo "some errors".$e->getMessage();
    }
    return $link;
}
