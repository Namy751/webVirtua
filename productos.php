<?php

include("conexion.php");
$con=conectar();

$sql="SELECT * FROM products";
$query=mysqli_query($con,$sql);

?>

<!DOCTYPE html>
<html lang="es">
<head >
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sunset skincare </title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
    <link rel="Stylesheet"href="estilos.css"/>
    <link rel="Stylesheet"href="productos.css"/>
</head>
<body>
    <div class="head">
        <div class="loguito">
            <a href="index.php"><img src="./images/fondo sun.jpg" alt=""></a>
    </div>
    <header>
        <div class="container">
            <nav class="nav">
                <div class="menu-toggle">
                    <i class="fas fa-bars"></i> <!--AGREGAR ICONOS-->
                    <i class="fas fa-times"></i> <!--AGREGAR ICONOS-->
                </div>
                <a href="#" class="Logo sunset"></a>
                <ul class="nav-list">
                    <li class="nav-item">
                        <a href="index.php" class="nav-link active">Home</a>
                    </li>
                    
                    <li class="nav-item">
                        <a href="carrito.php" class="nav-link active">Ver Carrito</a>
                    </li>

                 
               </ul>
            </nav>
        </div>
    </header>

    <div class="container-prod">
    <div class="header-prod-container">
            <div class="title-container">
                <h1 class="title">PRODUCTOS DISPONIBLES</h1>
            </div>
            <div class="search-container">
                
            </div>
        </div>
    <div class="content-devices">
    <?php    
    if(isset($_GET['buscar'])) {
        $busqueda=$_GET['buscador'];
        $consulta = $con->query("SELECT * FROM products WHERE modelo LIKE '%$busqueda%'");
        while($row = $consulta->fetch_array()) {

?>
        <div class="products">
            <div class="devices">
                <p class="text">IDENTIFICADOR <span><?php echo $row['id']?></span></p>
                <p class="text"> <img src="<?php echo $row['foto']?>"width="40px" height="50px"></p>
                <p class="text">Nombre: <span><?php echo $row['nombre']?></span></p>
                <p class="text">Producto: <span><?php echo $row['producto']?></span></p>
                <p class="text">Marca: <span><?php echo $row['marca']?>$</span></p>
                <p class="text">Tipo de piel: <span><?php echo $row['tipo_piel']?></span></p>
                <p class="text">Afeccion: <span><?php echo $row['afeccion']?></span></p>
                <p class="text">Descripcion: <span><?php echo $row['descripcion']?></span></p>
                <p class="text">Precio: <span><?php echo $row['precio']?></span></p>
                </div>
            <div class="buttons">
                <form action="carrito.php" method="GET">
                    <button type="submit" name="carrito" value="<?php echo $row['id']?>">Agregar al carrito</button>
                </form>
                   
            </div>
        </div>

        <?php 
            }
        } else {
            while($row=mysqli_fetch_array($query)) {

    ?>
     <div class="products">
            <div class="devices">
                <p class="text">IDENTIFICADOR <span><?php echo $row['id']?></span></p>
                <p class="text"><img src="<?php echo $row['foto']?>" class="photo" alt=""></p>
                <p class="text">Nombre: <span><?php echo $row['nombre']?></span></p>
                <p class="text">Producto: <span><?php echo $row['producto']?></span></p>
                <p class="text">Marca: <span><?php echo $row['marca']?>$</span></p>
                <p class="text">Tipo de piel: <span><?php echo $row['tipo_piel']?></span></p>
                <p class="text">Afeccion: <span><?php echo $row['afeccion']?></span></p>
                <p class="text">Descripcion: <span><?php echo $row['descripcion']?></span></p>
                <p class="text">Precio: <span><?php echo $row['precio']?></span></p>
                </div>
            <div class="buttons">
                <form action="carrito.php" method="GET">
                    <button type="submit" name="carrito" value="<?php echo $row['id']?>">Agregar a carrito:)</button>
                </form>
                   
            </div>
        </div>
        <?php 
            }
        }
        ?>
    </div> 
</div>

<footer>
        <div class="container">
            <div class="footer-content">
                <div class="footer-content-about">
                   </div>
                <div class="footer-div">
                    <div class="social-media">
                        <h4>Siguenos en nuestras redes!</h4>
                        <ul class="social-icons">
                            <li>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fab fa-facebook-square"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fab fa-pinterest"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fab fa-tripadvisor"></i></a>
                            </li>
                        </ul>
                    </div>
                    <div>
                        <h4>Noticias</h4>
                        <form action="" class="news-form">
                            <input type="text" class="news-input"
                            placeholder="¡Ingresa tu email!"> <!--SE USA EN FORMULARIOS-->
                            <button class="news-btn" type="submit">
                                <i class="fas fa-envelope"></i>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
      </footer>
        <script>
      
          const selectElement = function(element) {
              return document.querySelector(element);
          }
      
      
          let menuToggle = selectElement('.menu-toggle');
          let body = selectElement('body');
      
          menuToggle.addEventListener('click', function(){
              body.classList.toggle('open');
          })
      
      </script>
      </body>
      
      </html>