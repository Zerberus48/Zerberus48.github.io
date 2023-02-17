<?php
  include('Coneccion.php');
  session_start();
    if(!isset($_SESSION['emails'])){
        header('Location:index.php');
    }
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Boxicons CSS -->
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
        <link rel="stylesheet" href="Empleados.css">
        <link rel="icon" href="img/Logo.jpeg">
        <title>Storehouse</title>
    </head>
    <body onload="deshabilitaRetroceso()">
      <header>
        <i class='bx bx-menu none' onclick="menu_()" id="menu-x"></i>
        <i class='bx bx-x none' onclick="menu_()" id="x-menu"></i>
        <img src="img/Logo.jpeg" class="Logo"></img>
        <span class="logo_name">Storehouse</span>
      </header>
      <hr>
      <!-- sildebar -->
      <nav>
        <div class="sidebar close" id="sidebar_">
        <ul class="nav-links">
            <li>
                <a href="Inicio.php">
                    <i class='bx bx-home'></i>
                    <span class="link_name">Inicio</span>
                </a>
                <ul class="sub-menu blank">
                    <li><a class="link_name" href="Inicio.php">Inicio</a></li>
                </ul>
            </li>
            <li>
                <div class="iocn-link">
                    <a>
                        <i class='bx bx-cart'></i>
                        <span class="link_name">Transacciones</span>
                    </a>
                    <i class='bx bxs-chevron-down arrow' ></i>
                </div>
                <ul class="sub-menu">
                    <li><a class="link_name">Transacciones</a></li>
                    <li><a href="Transacciones/Compras.php">Compras</a></li>
                    <li><a href="Transacciones/Compras.php">Ventas</a></li>
                </ul>
            </li>
            <li>
                <div class="iocn-link">
                    <a>
                        <i class='bx bx-spreadsheet'></i>
                        <span class="link_name">Catalogo</span>
                    </a>
                    <i class='bx bxs-chevron-down arrow' ></i>
                </div>
                <ul class="sub-menu">
                    <li><a class="link_name">Catalogo</a></li>
                    <li><a href="Catalogo/Productos.php">Productos</a></li>
                    <li><a href="Catalogo/Marcas.php">Marcas</a></li>
                    <li><a href="Catalogo/Categorias.php">Categorias</a></li>
                    <li><a href="Catalogo/SubCategorias.php">SubCategorias</a></li>
                </ul>
            </li>
            <li>
                <div class="iocn-link">
                    <a>
                        <i class='bx bx-group'></i>
                        <span class="link_name">Clientes</span>
                    </a>
                    <i class='bx bxs-chevron-down arrow' ></i>
                </div>
                <ul class="sub-menu">
                    <li><a class="link_name">Clientes</a></li>
                    <li><a href="Clientes/Clientes.php">Clientes</a></li>
                    <li><a href="Clientes/Empresas.php">Empresas</a></li>
                </ul>
            </li>
            <li>
                <a>
                    <i class='bx bx-group'></i>
                    <span class="link_name">Empleados</span>
                </a>
                <ul class="sub-menu blank">
                    <li><a class="link_name">Empleados</a></li>
                </ul>
            </li>
            <li>
                <a href="Usuarios.php">
                    <i class='bx bx-group'></i>
                    <span class="link_name">Usuarios</span>
                </a>
                <ul class="sub-menu blank">
                    <li><a class="link_name" href="Usuarios.php">Usuarios</a></li>
                </ul>
            </li>
            <li>
                <a href="Proveedores.php">
                    <i class='bx bx-package'></i>
                    <span class="link_name">Proveedores</span>
                </a>
                <ul class="sub-menu blank">
                    <li><a class="link_name" href="Proveedores.php">Proveedores</a></li>
                </ul>
            </li>
            <li>
                <a href="logout.php">
                    <i class='bx bx-log-out'></i>
                    <span class="link_name">Log-out</span>
                </a>
                <ul class="sub-menu blank">
                    <li><a class="link_name" href="#">Log-out</a></li>
                </ul>
            </li>
        </ul>
      </div>
    </nav>
      
      <!-- Empleados -->
      <article>
        <div class="topbar">
          <h2>Empleados</h2>
          <button class="nuevo" id="btn-Abrir-Window"><i class='bx bx-plus-circle'></i>Nuevo Empleado</button>
        </div>
        <div class="templeados">
          <table>
            <tr>
              <th>NOMBRE</th>
              <th>SEXO</th>
              <th>FECHA.NAC</th>
              <th>E-MAIL</th>
              <th>TELEFONO</th>
              <th>DIRECCION</th>
            </tr>
            <?php
            $sql= "SELECT * FROM empleados";
            $resultado= mysqli_query($conection, $sql);

            while($mostrar=mysqli_fetch_array($resultado)){
            ?>
            <tr>
              <td><?php echo ucwords($mostrar['nombre']) ?></td>
              <td><?php echo ucwords($mostrar['sexo']) ?></td>
              <td><?php echo $mostrar['fechaNac'] ?></td>
              <td><?php echo $mostrar['email'] ?></td>
              <td><?php echo $mostrar['telefono'] ?></td>
              <td><?php echo ucwords($mostrar['direccion']) ?></td>
            </tr>
            <?php
            }
            ?>
          </table>
        </div>
        <div class="empleados">
        </div>
      </article>

      <!-- Ventana Nuevo Empleado -->
      <div class="overlay" id="overlay">
        <div class="popup" id="popup">
          <i class='bx bx-x bnt-cerrar-popup' id="bnt-cerrar-popup" onclick="AbrirWindow()"></i><br>
          <form class="form" action="Registrar-Empleados.php" method="POST">
            <h2>Nuevo Empleado</h2>
            <div class="form_container">
              <div class="form_group">
                <input type="text" id="name" class="form_input" placeholder=" " name="nombre" required>
                <label for="name" class="form_label">Nombre:</label>
                <span class="form_line"></span>
              </div>
              <div class="form_group">
                <input type="text" id="sexo" class="form_input" placeholder=" " name="sexo" required>
                <label for="sexo" class="form_label">Sexo:</label>
                <span class="form_line"></span>
              </div>
              <div class="form_group">
                <input type="date" id="fechanac" class="form_input" placeholder=" " name="fechaNac" required>
                <label for="fechanac" class="form_label">Fecha de Nacimiento:</label>
                <span class="form_line"></span>
              </div>
              <div class="form_group">
                <input type="email" id="email" class="form_input" placeholder=" " name="email" required>
                <label for="email" class="form_label">E-mail:</label>
                <span class="form_line"></span>
              </div>
              <div class="form_group">
                <input type="number" min="0" id="telefono" class="form_input" placeholder=" " name="telefono" required>
                <label for="telefono" class="form_label">Telefono:</label>
                <span class="form_line"></span>
              </div>
              <div class="form_group">
                <input type="text" id="direccion" class="form_input" placeholder=" " name="direccion" required>
                <label for="direccion" class="form_label">Direccion:</label>
                <span class="form_line"></span>
              </div>
            </div>
            <div class="buttons">
              <button type="reset" class="btn-reset"><i class='bx bx-reset'></i>Reset</button>
              <button type="submit" class="btn-submit"><i class='bx bx-save' name="guardar"></i>Guardar</button>
            </div>
          </form>
        </div>
      </div>
      <script src="Window.js"></script>
      <script src="Sidebar.js"></script>
    </body>
</html>