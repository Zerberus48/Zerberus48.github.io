<?php 
    include('Coneccion.php');

    $nombre = trim($_POST['nombre']);
    $sexo = trim($_POST['sexo']);
    $fechaNac = trim($_POST['fechaNac']);
    $email = trim($_POST['email']);
    $telefono = trim($_POST['telefono']);
    $direccion = trim($_POST['direccion']);
    $insertar = "INSERT INTO empleados(id, nombre, sexo, fechaNac, email, telefono, direccion) VALUES ('','$nombre', '$sexo', '$fechaNac', '$email', '$telefono', '$direccion')";
    $sql=mysqli_query($conection, $insertar);
    echo "<script> window.location='Empleados.php'; </script>";

?>  