<?php 
    include('Coneccion.php');

    $empresa = trim($_POST['empresa']);
    $email = trim($_POST['email']);
    $telefono = trim($_POST['telefono']);
    $sitioweb = trim($_POST['sitioweb']);
    $direccion = trim($_POST['direccion']);
    $insertar = "INSERT INTO proveedores(id, empresa, email, telefono, sitioweb, direccion) VALUES ('','$empresa', '$email', '$telefono', '$sitioweb', '$direccion')";
    $sql=mysqli_query($conection, $insertar);
    echo "<script> window.location='Proveedores.php'; </script>";

?>  