0<?php 
    include('Coneccion.php');

    $subcategoria = trim($_POST['subcategoria']);
    $categoria = trim($_POST['categoria']);
    $marca = trim($_POST['marca']);
    $propiedades = trim($_POST['propiedades']);
    $insertar = "INSERT INTO subcategorias(id, subcategoria, categoria, marca, propiedades) VALUES ('','$subcategoria', '$categoria', '$marca', '$propiedades')";
    $sql=mysqli_query($conection, $insertar);
    echo "<script> window.location='Catalogo/SubCategorias.php'; </script>";

?>  