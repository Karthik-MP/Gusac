<?php

    define("DB_SERVER","localhost");

    define("DB_USER","id16605893_gusac_web");

    define("DB_PASS","kEFj?W|i5wvTqbpi");

    define("DB_NAME","id16605893_gusac");



    $con = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);

    if(!$con){

        die("Connection Failed".mysqli_connect_error());

    }



?>
