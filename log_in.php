<?php
  session_start();
  include "Coneccion.php";

  $email=$_POST['email'];
  $password=$_POST['password'];

  $sql="SELECT * FROM signup WHERE email = '$email' and password = '$password'";
  $result=mysqli_query($conection, $sql);

  $row=mysqli_num_rows($result);

  if($row == 1){
    $_SESSION['emails']=$email;
    header('Location:Inicio.php');
  }else{
    header('Location:index.php');
  }
?>