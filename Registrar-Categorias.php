<?php 
    include('Coneccion.php');

    $categoria = trim($_POST['categoria']);
    $insertar = "INSERT INTO categorias(id, categoria) VALUES ('','$categoria')";
    $sql=mysqli_query($conection, $insertar);
    echo "<script> window.location='Catalogo/Categorias.php'; </script>";

?>  