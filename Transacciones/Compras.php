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
        <link rel="stylesheet" href="Compras.css">
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
                    <li><a>Compras</a></li>
                    <li><a href="Ventas.php">Ventas</a></li>
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
                    <li><a href="../Catalogo/Productos.php">Productos</a></li>
                    <li><a href="../Catalogo/Marcas.php">Marcas</a></li>
                    <li><a href="../Catalogo/Categorias.php">Categorias</a></li>
                    <li><a href="../Catalogo/SubCategorias.php">SubCategorias</a></li>
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

      <!-- Compras -->
      <article>
        <div class="topbar">
          <h2>Compras</h2>
          <button class="nuevo" id="btn-Abrir-Window"><i class='bx bx-plus-circle'></i>Nueva Compra</button>
        </div>
        <div class="tcompras">
          <table>
            <tr>
              <th>EMPRESA</th>
              <th>FECHA DE EMISION</th>
              <th>TOTAL</th>
              <th>IVA</th>
              <th>RESPONSABLE</th>
            </tr>
            <?php
            $sql= "SELECT * FROM compras";
            $resultado= mysqli_query($conection, $sql);

            while($mostrar=mysqli_fetch_array($resultado)){
            ?>
            <tr>
              <td><?php echo ucwords($mostrar['proveedor']) ?></td>
              <td><?php echo ucwords($mostrar['fecha']) ?></td>
              <td><?php echo ucwords($mostrar['total']) ?></td>
              <td><?php echo ucwords($mostrar['iva']) ?></td>
              <td><?php echo ucwords($mostrar['id']) ?></td>
            </tr>
            <?php
            }
            ?>
          </table>
        </div>
      </article>

    <!-- Ventana Nueva Compra -->
        <div class="overlay" id="overlay">
            <div class="popup" id="popup">
                <i class='bx bx-x bnt-cerrar-popup' id="bnt-cerrar-popup" onclick="AbrirWindow()"></i>
                <center><h2>Registrar Compra</h2></center>
                <form class="form" oninput="subtotal_v.value=parseInt(cantidad.value)*parseInt(precio.value); importe_v.value=subtotal_v.value; importe_i.value=subtotal_v.value; iva.value=parseInt(importe_v.value)*0.16; total_v.value=parseInt(importe_v.value)*0.16+parseInt(importe_v.value); total_i.value=parseInt(importe_v.value)*0.16+parseInt(importe_v.value);" action="../Registrar-Compras.php" method="POST">

                    <fieldset>
                            <legend>Detalles De Compra</legend>
                            <div class="form_container">

                                <div class="form_group">
                                    <input list="productos" class="form_input">
                                    <label for="producto" class="form_label">Producto:</label>
                                    <span class="form_line"></span>

                                    <datalist id="productos" name="producto" class="form_input">
                                        <?php
                                            $sql= "SELECT * FROM productos";
                                            $resultado= mysqli_query($conection, $sql);

                                            while($mostrar=mysqli_fetch_array($resultado)){
                                            ?>
                                            <option value="<?php echo ucwords($mostrar['producto']) ?>"><?php echo ucwords($mostrar['producto']) ?></option>
                                            
                                        <?php
                                        }
                                        ?>
                                    </datalist>
                                </div>

                            </div>
                    
                        <div class="pop">
                            <div class="form_container">

                                <div class="form_group">
                                    <input type="number" min="0" id="cantidad" class="form_input" placeholder=" " name="cantidad" required>
                                    <label for="cantidad" class="form_label">Cantidad:</label>
                                    <span class="form_line"></span>
                                </div>

                                <div class="form_group">
                                    <input type="number" min="0" id="precio" class="form_input" placeholder=" " name="precio" required>
                                    <label for="precio" class="form_label">Precio:</label>
                                    <span class="form_line"></span>
                                </div>

                                <div class="form_group">
                                    <output name="subtotal_v" class="form_input" placeholder=" "></output>
                                    <input name="subtotal_i" class="form_input" placeholder=" " type="hidden">
                                    <label for="subtotal_v" class="form_label">SubTotal:</label>
                                    <span class="form_line"></span>
                                </div>

                            </div>

                            <div class="form_container">

                                <div class="form_group">
                                    <output name="importe_v" class="form_input" placeholder=" "></output>
                                    <input name="importe_i" class="form_input" placeholder=" " type="hidden">
                                    <label for="importe_v" class="form_label">Importe:</label>
                                    <span class="form_line"></span>
                                </div>

                                <div class="form_group">
                                    <input type="text" maxlength="0" class="form_input" placeholder=" " disabled value="16%" oncopy="return false;" required>
                                    <input name="iva" class="form_input" placeholder=" " type="hidden">
                                    <label for="iva" class="form_label">IVA:</label>
                                    <span class="form_line"></span>
                                </div>

                                <div class="form_group">
                                    <output name="total_v" class="form_input" placeholder=" "></output>
                                    <input name="total_i" class="form_input" placeholder=" " type="hidden">
                                    <label for="total" class="form_label">Total:</label>
                                    <span class="form_line"></span>
                                </div>

                            </div>
                        </div>
                    </fieldset>

                    <fieldset>
                            <legend>Informacion General</legend>
                            <div class="form_container">

                                <div class="form_group">
                                    <select name="proveedor" id="proveedor" class="form_input">
                                        <?php
                                        $sql= "SELECT * FROM proveedores";
                                        $resultado= mysqli_query($conection, $sql);

                                        while($mostrar=mysqli_fetch_array($resultado)){
                                        ?>
                                        <option value="<?php echo ucwords($mostrar['empresa']) ?>"><?php echo ucwords($mostrar['empresa']) ?></option>
                                        
                                        <?php
                                        }
                                        ?>
                                    </select>
                                    <label for="proveedor" class="form_label">Proveedor:</label>
                                    <span class="form_line"></span>
                                </div>

                                <div class="form_group">
                                    <input type="date" min="0" id="fecha" class="form_input" placeholder=" " name="fecha" required>
                                    <label for="fecha" class="form_label">Fecha:</label>
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