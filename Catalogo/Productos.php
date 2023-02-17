<?php
    include('../Coneccion.php');
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
        <link rel="stylesheet" href="Productos.css">
        <link rel="icon" href="../img/Logo.jpeg">
        <title>Storehouse</title>
    </head>
    <body>
      <header>
        <i class='bx bx-menu none' onclick="menu_()" id="menu-x"></i>
        <i class='bx bx-x none' onclick="menu_()" id="x-menu"></i>
        <img src="../img/Logo.jpeg" class="Logo"></img>
        <span class="logo_name">Storehouse</span>
      </header>
      <hr>
      <!-- sildebar -->
      <nav>
        <div class="sidebar close" id="sidebar_">
        <ul class="nav-links">
            <li>
                <a href="../Inicio.php">
                    <i class='bx bx-home'></i>
                    <span class="link_name">Inicio</span>
                </a>
                <ul class="sub-menu blank">
                    <li><a class="link_name" href="../Inicio.php">Inicio</a></li>
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
                    <li><a href="../Transacciones/Compras.php">Compras</a></li>
                    <li><a href="../Transacciones/Compras.php">Ventas</a></li>
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
                    <li><a>Productos</a></li>
                    <li><a href="Marcas.php">Marcas</a></li>
                    <li><a href="Categorias.php">Categorias</a></li>
                    <li><a href="SubCategorias.php">SubCategorias</a></li>
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
                    <li><a href="../Clientes/Clientes.php">Clientes</a></li>
                    <li><a href="../Clientes/Emplesas.php">Empresas</a></li>
                </ul>
            </li>
            <li>
                <a href="../Empleados.php">
                    <i class='bx bx-group'></i>
                    <span class="link_name">Empleados</span>
                </a>
                <ul class="sub-menu blank">
                    <li><a class="link_name" href="../Empleados.php">Empleados</a></li>
                </ul>
            </li>
            <li>
                <a href="../Usuarios.php">
                    <i class='bx bx-group'></i>
                    <span class="link_name">Usuarios</span>
                </a>
                <ul class="sub-menu blank">
                    <li><a class="link_name" href="../Usuarios.php">Usuarios</a></li>
                </ul>
            </li>
            <li>
                <a href="../Proveedores.php">
                    <i class='bx bx-package'></i>
                    <span class="link_name">Proveedores</span>
                </a>
                <ul class="sub-menu blank">
                    <li><a class="link_name" href="../Proveedores.php">Proveedores</a></li>
                </ul>
            </li>
            <li>
                <a href="../logout.php">
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
      
    
      <!-- Productos -->
      <article>
        <div class="topbar">
          <h2>Productos</h2>
          <button class="nuevo" id="btn-Abrir-Window"><i class='bx bx-plus-circle'></i>Nuevo Producto</button>
        </div>
        <div class="tproductos">
          <table>
            <tr>
              <th>PRODUCTO</th>
              <th>MARCA</th>
              <th>COSTO</th>
              <th>UTILIDAD</th>
              <th>PRECIO</th>
              <th>STOCK</th>
              <th>STOCK_MIN</th>
            </tr>
            <?php
            $sql= "SELECT * FROM productos";
            $resultado= mysqli_query($conection, $sql);

            while($mostrar=mysqli_fetch_array($resultado)){
            ?>
            <tr>
              <td><?php echo ucwords($mostrar['producto']) ?></td>
              <td><?php echo ucwords($mostrar['marca']) ?></td>
              <td><?php echo ucwords($mostrar['costo']) ?></td>
              <td><?php echo ucwords($mostrar['utilidad']) ?></td>
              <td><?php echo ucwords($mostrar['precio']) ?></td>
              <td><?php echo ucwords($mostrar['stock']) ?></td>
              <td><?php echo ucwords($mostrar['stock_min']) ?></td>
            </tr>
            <?php
            }
            ?>
          </table>
        </div>
        <div class="productos">
        </div>
      </article>

    <!-- Ventana Nuevo Producto -->
        <div class="overlay" id="overlay">
            <div class="popup" id="popup">
                <i class='bx bx-x bnt-cerrar-popup' id="bnt-cerrar-popup" onclick="AbrirWindow()"></i>
                <center><h2>Nuevo Producto</h2></center>
                <form class="form" oninput=" result.value=parseInt(costo.value)+parseInt(utilidad.value); precio.value=result.value" action="../Registrar-Productos.php" method="POST">
                    
                    <div class="pop">
                        <fieldset>
                            <legend>Informacion General</legend>
                            <div class="form_container">

                                <div class="form_group">
                                    <input type="text" id="producto" class="form_input" placeholder=" " name="producto" required>
                                    <label for="producto" class="form_label">Producto:</label>
                                    <span class="form_line"></span>
                                </div>

                                <div class="form_group">
                                    <input type="number" min="0" id="stock" class="form_input" placeholder=" " name="stock" required>
                                    <label for="stock" class="form_label">Stock:</label>
                                    <span class="form_line"></span>
                                </div>

                                <div class="form_group">
                                    <input type="number" min="0" id="stock_min" class="form_input" placeholder=" " name="stock_min" required>
                                    <label for="stock_min" class="form_label">Stock Minimo:</label>
                                    <span class="form_line"></span>
                                </div>

                            </div>
                        </fieldset>

                        <fieldset>
                            <legend>Clasificacion</legend>
                            <div class="form_container">

                                <div class="form_group">
                                    <select name="marca" id="marca" class="form_input">
                                        <?php
                                        $sql= "SELECT * FROM marcas";
                                        $resultado= mysqli_query($conection, $sql);

                                        while($mostrar=mysqli_fetch_array($resultado)){
                                        ?>
                                        <option value="<?php echo ucwords($mostrar['marca']) ?>"><?php echo ucwords($mostrar['marca']) ?></option>
                                        
                                        <?php
                                        }
                                        ?>
                                    </select>
                                    <label for="marca" class="form_label">Marca:</label>
                                    <span class="form_line"></span>
                                </div>

                                <div class="form_group">
                                    <select name="categoria" id="categoria" class="form_input">
                                        <?php
                                        $sql= "SELECT * FROM categorias";
                                        $resultado= mysqli_query($conection, $sql);

                                        while($mostrar=mysqli_fetch_array($resultado)){
                                        ?>
                                        <option value="<?php echo ucwords($mostrar['categoria']) ?>"><?php echo ucwords($mostrar['categoria']) ?></option>
                                        
                                        <?php
                                        }
                                        ?>
                                    </select>
                                    <label for="categoria" class="form_label">Cateoria:</label>
                                    <span class="form_line"></span>
                                </div>

                            </div>
                        </fieldset>
                    </div>

                    <fieldset>
                            <legend>Informacion De Valor</legend>
                            <div class="form_container">

                                <div class="form_group">
                                    <input type="number" min="0" id="costo" class="form_input" placeholder=" " name="costo" required> 
                                    <label for="costo" class="form_label">Costo:</label>
                                    <span class="form_line"></span>
                                </div>

                                <div class="form_group">
                                    <input type="number" min="0" id="utilidad" class="form_input" placeholder=" " name="utilidad" required> 
                                    <label for="utilidad" class="form_label">Utilidad:</label>
                                    <span class="form_line"></span>
                                </div>

                                <div class="form_group">
                                    <output name="result" for="costo  utilidad" class="form_input" placeholder=" "></output>
                                    <input name="precio" class="form_input" placeholder=" " type="hidden">
                                    <label for="result" class="form_label">Precio:</label>
                                    <span class="form_line"></span>
                                </div>

                            </div>
                            
                    </fieldset> 
                    <div class="buttons">
                        <button type="reset" class="btn-reset"><i class='bx bx-reset'></i>Reset</button>
                        <button type="submit" class="btn-submit"><i class='bx bx-save'></i>Guardar</button>
                    </div>
                </form>
            </div>
        </div>
      <script src="../Window.js"></script>
      <script src="../Sidebar.js"></script>
    </body>
</html>