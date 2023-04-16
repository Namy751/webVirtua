<?php 
    include("conexion.php");
    $con=conectar();

$id=$_GET['id'];

$sql="SELECT * FROM products WHERE id='$id'";
$query=mysqli_query($con,$sql);

$row=mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <title>Actualizar</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        <link rel="Stylesheet"href="estilos.css"/>
        <link rel="Stylesheet"href="registro.css"/>
    
    </head>
    <body>
            
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
                <a href="panel.php" class="nav-link ">Panel de productos</a>
            </li>
           </ul>
        </nav>
    </div>
</header>
                <h1>Modificar producto</h1>
                <form action="update.php" method="post" class="form">
                    <div>  
                      <section class="main">
                      <figure class="main_figure">
                       <img src="./images/fondo sunset.jpg" class="main_img">
                      </figure>
                    <div class="main_contact">
                      <h2 class="main_title">Hola</h2>
                      <p class="main_paragraph">¡Bienvenido! Desea modificar un producto? </p>
                    </div>
                    <label class="id">Identificador <span><?php echo $row['id']?></span></label>
                    <input type="hidden" name="id" id="id" value="<?php echo $row['id']?>" />
                    <div>
                    <label for="nombre">Nombre:</label>
                      <input class="box" type="text" name="nombre" id="nombre" required placeholder="Nombre del producto" />
                    </div>
                    <div>
                      <label for="producto">Producto:</label>
                      <input class="box" type="text" name="producto" id="producto" required placeholder="Tipo de producto" />
                    </div>
                    <div>
                      <label for="marca">Marca: </label>
                      <input class="box" type="text" name="marca" id="marca" required placeholder="Marca del producto" />
                    </div>
                    <div>
                      <label for="tipo_piel">Tipo de piel: </label>
                      <input class="box" type="text" name="tipo_piel" id="tipo_piel" required placeholder="Tipo de piel" />
                    </div>
                    <div>
                      <label for="afeccion">Afeccion: </label>
                      <input class="box" type="text" name="afeccion" id="afeccion" required placeholder="Afeccion" />
                    </div>
                    <div>
                      <label for="descripcion">Descripcion:</label>
                      <input class="box" type="text" name="descripcion" id="descripcion" required placeholder="Descripcion del producto" />
                    </div>
                    <div>
                      <label for="precio">Precio:</label>
                      <input class="box" type="text" name="precio" id="precio" required placeholder="Precio del producto" />
                    </div>
                    <label for="foto">Foto:</label>
                    <input class="box" type="file" name="foto" id="foto" required  />
                  </div>
                    
                    <button class="btn" type="submit" name="registrar" id="registrar">Modificar</button>
                  </div>
                  </form>
            
                 
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