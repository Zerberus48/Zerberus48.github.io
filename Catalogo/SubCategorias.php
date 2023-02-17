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
        <link rel="stylesheet" href="SubCategorias.css">
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
                    <li><a href="Productos.php">Productos</a></li>
                    <li><a href="Marcas.php">Marcas</a></li>
                    <li><a href="Categorias.php">Categorias</a></li>
                    <li><a>SubCategorias</a></li>
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

      <!-- SubCategorias -->
      <article>
        <div class="topbar">
          <h2>SubCategorias</h2>
          <button class="nuevo" id="btn-Abrir-Window"><i class='bx bx-plus-circle'></i>Nueva SubCategoria</button>
        </div>
        <div class="tsubcategorias">
          <table>
            <tr>
              <th>SUBCATEGORÍA</th>
              <th>CATEGORIA</th>
              <th>PRODIEDAD</th>
            </tr>
            <?php
            $sql= "SELECT * FROM subcategorias";
            $resultado= mysqli_query($conection, $sql);

            while($mostrar=mysqli_fetch_array($resultado)){
            ?>
            <tr>
              <td><?php echo ucwords($mostrar['subcategoria']) ?></td>
              <td><?php echo ucwords($mostrar['categoria']) ?></td>
              <td><?php echo ucwords($mostrar['propiedades']) ?></td>
            </tr>
            <?php
            }
            ?>
          </table>
        </div>
        <div class="subcategoria">
        </div>
      </article>

    <!-- Ventana Nueva SubCategoria -->
        <div class="overlay" id="overlay">
            <div class="popup" id="popup">
                <i class='bx bx-x bnt-cerrar-popup' id="bnt-cerrar-popup" onclick="AbrirWindow()"></i><br>  
                <form class="form" action="../Registrar-SubCategorias.php" method="POST">
                    <h2>Nueva SubCategoria</h2>
                    <div class="form_container">
                        <div class="form_group">
                            <input type="text" id="subcategoria" class="form_input" placeholder=" " name="subcategoria" required>
                            <label for="subcategoria" class="form_label">SubCategoria:</label>
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
                            <label for="categoria" class="form_label">Categoria:</label>
                            <span class="form_line"></span>
                        </div>

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
                            <label for="marca" class="form_label">Marca Relacionada:</label>
                            <span class="form_line"></span>
                        </div>

                        <div class="form_group">
                            <input type="text" id="propiedades" class="form_input" placeholder=" " name="propiedades" required>
                            <label for="propiedades" class="form_label">Propiedades:</label>
                            <span class="form_line"></span>
                        </div>
                    </div>
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