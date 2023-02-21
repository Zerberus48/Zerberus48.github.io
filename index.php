<?php
  session_start();
  if(isset($_SESSION['emails'])){
    header('Location:Inicio.php');
  }
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="author" content="David Geovani, Andres Lopez, Jose Eduardo">
        <link rel="stylesheet" href="Index.css">
        <link rel="icon" href="img/Logo.jpeg">
        <title>Storehouse</title>
    </head>
    <body>
      <div id="background">
        <center>  
            <div id="container">
              <div id="login">
                <form action="iniciar_sesion.php" method="POST">
                  <label id="text">Iniciar Sesion</label>

                  <div class="form_container">
                  <div class="form_group">
                  <input type="email" name="email" placeholder="" required class="form_input">
                  <label class="form_label">Email:</label>
                  <span class="form_line"></span>
                  </div>

                  <div class="form_group">
                  <div class="show-hide">  
                  <input id="pswd" class="form_input" type="password" name="password"  placeholder="" required maxlength="10">
                  <label for="marca" class="form_label">Contraseña:</label>
                  <span class="form_line"></span>  
                  <div class="box form_input"><ion-icon name="eye-outline" id="hide" onclick="change()"></ion-icon><ion-icon id="show" name="eye-off-outline" onclick="change()"></ion-icon>
                  </div>

                  </div></div></div> 
                  <input type="submit" id="log_inb" value="Log in">
                </form>
              </div>
      </div>
        <script src="Index.js"></script>
        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    </body>
</html>
