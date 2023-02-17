<?php
  session_start();
  include "Coneccion.php";
  
  $email=$_POST['email'];
  $password=$_POST['password'];
  $user=$_POST['user'];

  $sql="SELECT * FROM signup WHERE email = '$email' OR user = '$user'";
  $result=mysqli_query($conection, $sql);

  $row=mysqli_num_rows($result);

  if($row == 1){
    header('Location:index.php');
  }else{
    $_SESSION['emails']=$email;
    $reg="INSERT INTO signup(user, email, password) VALUES ('$user', '$email', '$password')";
    mysqli_query($conection, $reg);
    header('Location:Inicio.php');
  }
?>