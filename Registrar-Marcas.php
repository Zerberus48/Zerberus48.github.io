<?php 
    include('Coneccion.php');

    $marca = trim($_POST['marca']);
    $insertar = "INSERT INTO marcas(id, marca) VALUES ('','$marca')";
    $sql=mysqli_query($conection, $insertar);
    echo "<script> window.location='Catalogo/Marcas.php'; </script>";

?>  