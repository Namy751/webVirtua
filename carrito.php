<?php

session_start();
include("conexion.php");

$car = array(
    'productos' => array(),
    'subtotal' => 0,
    'total' => 0
);

if(isset($_SESSION["carrito"])){
    $car = $_SESSION["carrito"];
}
$carritosGuardados = [];
if(isset($_SESSION["carritos"])){
    $carritosGuardados = $_SESSION["carritos"];
}

calcular($car, $carritosGuardados);

if(isset($_GET["carrito"])){
    print $_SESSION["carrito"]['total'];
    $id = $_GET["carrito"];
    if($id){
        add($id, $car, $con, $carritosGuardados);
    }
}

if(isset($_GET["remove"])){
    $id = $_GET["remove"];
    if(isset($id) || $id == 0){
        remove($id, $car, $carritosGuardados);
    }
}

function add($p = [], &$car, &$con, &$carritosGuardados){
    $sql = mysqli_query($con, "SELECT * FROM products WHERE id = '$p' ");
    $resul = mysqli_fetch_array($sql);
    $resul['cantidad'] = 1;
    array_push($car['productos'], $resul);
    $_SESSION["carrito"] = $car;
    calcular($car, $carritosGuardados);
}

function calcular(&$car, &$carritosGuardados){
    $car['subtotal'] = 0;
    $car['total'] = 0;
    $car['index'] = 0;

    foreach($car['productos'] as &$p){
        $car['subtotal'] += $p['precio'] * $p['cantidad'];
    }
    $car['total'] = $car['subtotal'];
    $_SESSION["carrito"] = $car;

    $carritosGuardados[$car['index']] = $car;
    $_SESSION["carritos"] = $carritosGuardados;
}

function remove($index = 0, &$car, &$carritosGuardados){
    array_splice($car['productos'], $index, 1);
    calcular($car, $carritosGuardados);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="Stylesheet"href="estilos.css"/>
    <link rel="Stylesheet"href="registro.css"/>
    <link rel="Stylesheet"href="carrito.css"/>

    <title>Panel de administrador</title>
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
                <a href="productos.php" class="nav-link ">Productos en tienda</a>
            </li>
    </div>
</header>

<div class="shopping_cart-container">
    <h1>CARRITO DE COMPRAS</h1>
  



    <div class="container-products">
        <?php
            foreach($car['productos'] as $key =>$row){
        ?>
        <div class="car_products">
            <div class="devices-container">
                <p class="text">Nombre: <?php echo $row['nombre']?></p>
                <img src="<?php echo $row['foto']?>"width="40px" height="110px">
                 <p class="text">Precio: <?php echo $row['precio']?>$</p>
                <p class="text">Cantidad: <?php echo $row['cantidad']?></p>
            </div>
            <form class="form"action="carrito.php" method="get">
                <button type="submit" name="remove" value="<?php echo $key ?>"> ELIMINAR</button>
            </form>
        </div>

        <?php
            }
            ?>
    </div>
        <h1>Total: <?php echo $car['total'] ?>$</h1>
</div>

<div class="options">
        
<form action="productos.php" method="get">
        <button class="button"type="submit" name="p" value="p">Regresar a productos</button>
    </form>
    <form action="correo.php" method="get">
        <button class="button" type="submit" name="comprar" value="comprar">Comprar</button>
    </form>
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