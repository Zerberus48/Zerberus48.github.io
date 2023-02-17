<?php 
    include('Coneccion.php');

    $empresa = trim($_POST['empresa']);
    $email = trim($_POST['email']);
    $telefono = trim($_POST['telefono']);
    $direccion = trim($_POST['direccion']);
    $insertar = "INSERT INTO empresas(id, empresa, email, telefono, direccion) VALUES ('','$empresa', '$email', '$telefono', '$direccion')";
    $sql=mysqli_query($conection, $insertar);
    echo "<script> window.location='Clientes/Empresas.php'; </script>";

?>  