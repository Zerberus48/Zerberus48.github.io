<?php
    include('Coneccion.php');
    session_start();
    if(!isset($_SESSION['emails'])){
        header('Location:index.php');
    }
    $sql="SELECT count(*) AS id FROM productos";
    if($result=mysqli_query($conection,$sql)){
        $productos=mysqli_fetch_assoc($result);
    }
    $sql="SELECT count(*) AS id FROM clientes";
    if($result=mysqli_query($conection,$sql)){
        $clientes=mysqli_fetch_assoc($result);
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
        <link rel="stylesheet" href="Inicio.css">
        <link rel="icon" href="img/Logo.jpeg">
        <title>Storehouse</title>
    </head>
    <body>
      <header>
        <i class='bx bx-menu' onclick="menu_()" id="menu-x"></i>
        <i class='bx bx-x' onclick="menu_()" id="x-menu"></i>
        <img src="img/Logo.jpeg" class="Logo"></img>
        <span class="logo_name">Storehouse</span>
      </header>
      <hr>
      <!-- sildebar -->
      <nav>
      <div class="sidebar close" id="sidebar_">
        <ul class="nav-links">
            <li>
                <a>
                    <i class='bx bx-home'></i>
                    <span class="link_name">Inicio</span>
                </a>
                <ul class="sub-menu blank">
                    <li><a class="link_name">Inicio</a></li>
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
                    <li><a href="Transacciones/Ventas.php">Ventas</a></li>
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
                <a href="Empleados.php">
                    <i class='bx bx-group'></i>
                    <span class="link_name">Empleados</span>
                </a>
                <ul class="sub-menu blank">
                    <li><a class="link_name" href="Empleados.php">Empleados</a></li>
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
      <article>
        <!-- Reporte General -->
            <h2 class="titulo">Reporte General</h2>
            <div class="tarjet-info">
              <div class="carta">  
                <i class='bx bx-cart  isize'></i>
                <h1>$ <h1></h1></h1>
                <h4>Total Ventas</h4>
              </div>
              <div class="carta">  
                <i class='bx bx-credit-card  isize'></i>
                <h1>$ <h1></h1></h1>
                <h4>Total Compras</h4>
              </div>
              <div class="carta">  
                <i class='bx bx-desktop  isize'></i>
                <h1><?php echo$productos['id']; ?></h1>
                <h4>Total Productos</h4>
              </div>
              <div class="carta">  
                <i class='bx bx-user  isize'></i>
                <h1><?php echo$clientes['id']; ?></h1>
                <h4>Clientes</h4>
              </div>
            </div>

        <!-- Reporte de ventas -->
            <br>
            <h2 class="titulo">Reporte De Ventas</h2>
      </article>
      <script src="Sidebar.js"></script>
    </body>
</html>