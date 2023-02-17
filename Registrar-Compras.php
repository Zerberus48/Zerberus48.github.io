<?php 
    include('Coneccion.php');

    $producto = trim($_POST['producto']);
    $cantidad = trim($_POST['cantidad']);
    $precio = trim($_POST['precio']);
    $subtotal = trim($_POST['subtotal_i']);
    $iva = trim($_POST['iva']);
    $total = trim($_POST['total_i']);
    $proveedor = trim($_POST['proveedor']);
    $fecha = trim($_POST['fecha']);
    $insertar = "INSERT INTO compras(id, producto, cantidad, precio, subtotal, iva, total, proveedor, fecha) 
        VALUES ('','$producto', '$cantidad', '$precio', '$subtotal', '$iva', '$total', '$proveedor', '$fecha')";
    $sql=mysqli_query($conection, $insertar);
    echo "<script> window.location='Transacciones/Compras.php'; </script>";

?>  