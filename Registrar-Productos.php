<?php 
    include('Coneccion.php');

    $producto = trim($_POST['producto']);
    $stock = trim($_POST['stock']);
    $stock_min = trim($_POST['stock_min']);
    $marca = trim($_POST['marca']);
    $categoria = trim($_POST['categoria']);
    $costo = trim($_POST['costo']);
    $utilidad = trim($_POST['utilidad']);
    $precio = trim($_POST['precio']);
    $insertar = "INSERT INTO productos(id, producto, stock, stock_min, marca, categoria, costo, utilidad, precio) 
        VALUES ('','$producto', '$stock', '$stock_min', '$marca', '$categoria', '$costo', '$utilidad', '$precio')";
    $sql=mysqli_query($conection, $insertar);
    echo "<script> window.location='Catalogo/Productos.php'; </script>";

?>  