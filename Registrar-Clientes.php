<?php 
    include('Coneccion.php');

    $nombre = trim($_POST['nombre']);
    $email = trim($_POST['email']);
    $telefono = trim($_POST['telefono']);
    $direccion = trim($_POST['direccion']);
    $insertar = "INSERT INTO clientes(id, nombre, email, telefono, direccion) VALUES ('','$nombre', '$email', '$telefono', '$direccion')";
    $sql=mysqli_query($conection, $insertar);
    echo "<script> window.location='Clientes/Clientes.php'; </script>";

?>  