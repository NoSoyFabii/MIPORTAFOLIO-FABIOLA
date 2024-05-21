<?php

function connection(){
    $host="localhost";
    $user="id22192818_fabiolaandrea";
    $pass="Fabiola_290804";

    $bd="id22192818_fabiolaandrea";

    $connect=mysqli_connect($host,$user,$pass);

    mysqli_select_db($connect,$bd);

    return $connect;
};
?>