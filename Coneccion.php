<?php
    $server="localhost";
    $user_db="root";
    $password="";
    $database="StoreHouse";

    $conection = mysqli_connect($server,$user_db,$password,$database);
    if(!$conection){
        echo "Error en la conexion";
    }
?>