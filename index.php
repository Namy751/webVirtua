<?php
    session_start();
    include('conexion.php');
    if(isset($_SESSION['correo'])){
        $sesion = true;

        $identificador = $_SESSION['correo'];
        $buscarUsuario = $con->query("SELECT * FROM users WHERE correo='$identificador'");

        $row = $buscarUsuario->fetch_array();

        $usuario = $row['nombre'];
        $type = $row['type'];
    }

    else {
        $sesion = false;
    }
?>
<!DOCTYPE html>
<html lang="es">
<head >
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sunset skincare </title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
    <link rel="Stylesheet"href="estilos.css"/>
</head>
<body>
    <div class="head">
        <div class="loguito">
            <a href="index.html"><img src="./images/fondo sun.jpg" alt=""></a>
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
                    <?php if($sesion==true){
                       
                            if($type==1){
                                echo'<li class="nav-item">
                                <a href="panel.php" class="nav-link ">Panel de administrador</a>
                            </li>'; 
                            }
                            if ($type==0){
                                echo'<li class="nav-item">
                        <a href="productos.php" class="nav-link ">Productos en tienda</a>
                    </li>';
                            }
                            echo'<li class="nav-item">
                    <a href="cerrar-sesion.php" class="nav-link ">Cerrar sesion</a>
                </li>';
                    } else{
                        echo' <li class="nav-item">
                        <a href="login.html" class="nav-link active">Iniciar Sesión</a>
                    </li>';
                    echo'<li class="nav-item">
                    <a href="registro.html" class="nav-link ">Registro</a>
                </li>';
                    }
                    ?>

<?php if($sesion==true){
                       
                       if($type==1){

                       }
                       if ($type==0){
                        
                       }
                    }
               ?>
                   
                  
                    
                    
               </ul>
            </nav>
        </div>
       
       
    </header>
    
    <section class="hero" id="hero">
        <div class="container">
            <h2 class="h2-sub">
                <span class="fil">B</span>ienvenido <!--aplicar estilo al texto o agrupar elementos en línea-->
            </h2>
            <h1 class="head">Sunset skincare</h1>
            <div class="he-des">
                <h5>Healthy beautiful</h5>
                <a href="productos.html" class="btn cta-btn">Explorar</a>
            </div>
        </div>
    </section>

    <section class="dis-sto">
        <div class="container">
            <div class="res-info">
                <img src="./images/fondo sunset.jpg" alt=""> <!--AGREGAR IMAGENES-->
            </div>
            <div class="res-des pad-rig">
                <div class="global">
                    <h2 class="h2-sub">
                    <span class="fil">C</span>onocenos
                    </h2>
                    <h1 class="head hea-dark">Nuestra mision</h1>
                    <div class="circle">
                        <i class="fas fa-circle"></i> <!--AGREGAR ICONOS-->
                    </div>
                </div>
                <p>
                   Colaborar en todo momento al bienestar y salud de la piel poniendo a su alcance productos cosmeticos y dermatologicos al publico en general, creando así valor a Sunset Skincare. 
                </p>
            </div>    
        </div>
        </div>
    </section>

    <section class="taste bt">
        <div class="container">
            <div class="global">
                <h2 class="h2-sub"></h2>
                <h1 class="head hea-dark">Nuestra vision</h1>
                <div class="circle">
                    <i class="fas fa-circle"></i>
                </div>
            </div>
            <p>
                Ser una empresa líder en distribucion de productos de Skincare en México. 
            </p>
            <a href="#" class="btn cta-btn">Saber mas:)</a>
        </div>

    </section>

    <section class="disco">
        <div class="container">
            <div class="res-info">
                <div class="res-des">
                    <div class="global">
                        <h2 class="h2-sub">
                            <span class="fil">D</span>escubre
                        </h2>
                        <h1 class="head hea-dark">Nuestros productos</h1>
                    </div>
                        <p>
                            Descubre todos los beneficios de una buena rutina de skincare. 
                        </p>
                        <a href="productos.html" class="btn cta-btn">Descubrir productos</a>
                        <div class="image-group pad-rig">
                            <img src="./images/producto-2.jpg" alt="">
                            <img src="./images/producto-3.jpg" alt="">
                        </div>
                </div>
            </div>
        </div>
    </section>
    <section class="pb bt">
        <div class="container">
            <div class="global">
                <h2 class="h2-sub">
                    <span class="fil">I</span>mportancia
                </h2>
                <h1 class="head">Del cuidado de la piel</h1>
                        <div class="circle">
                            <i class="fas fa-circle"></i>
                        </div>
                    </div>
                    <p>
                        Un buen cuidado de la piel y elegir un estilo de vida saludable pueden ayudarte a retrasar el envejecimiento de la piel y prevenir diversos problemas de la piel.
                    </p>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="res-info">

                <div class="image-group">
                    <img src="./images/imagenInic5.jpg" alt="">
                    <img src="./images/producto-6.jpg" alt="">
                </div>
                <div class="res-des pad-rig">
                    <div class="global">
                        <h2 class="h2-sub">
                            <span class="fil">I</span>dentifica
                        </h2>
                        <h1 class="head hea-dark">Tu tipo de piel</h1>
                        <div class="circle">
                            <i class="fas fa-circle"></i>
                        </div>
                    </div>
                    <p>
                       Evalua diferentes aspectos de la piel para darte una rutina de cuidado personalizada y obtener los mejores beneficios :)
                    </p>
                    <a href="#" class="btn cta-btn">Empezar ahora</a>
                </div>
             </div>
        </div>
    </section>

    <!--FOOTER-->
   
<footer>
        <div class="container">
            <div class="footer-content">
                <div class="footer-content-about">
                    <h4>Nosotros</h4>
                    <div class="circle">
                        <i class="fas fa-circle"></i>
                    </div>
                    <p>Sunset skincare es una pequeña empresa que comenzó con la idea de empezar un emprendimiento que lograra satisfacer nuestras expectativas. 
                    Impulsados por el fuerte deseo de dar a conocer la importancia que tiene el cuidado de la piel y fomentar a que mas personas le den importancia y cuidado que requiere la piel. </p>
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

    <!--SE USA PARA INSERTAR O REFERENCIAR UN SCRIPT EJECUTABLE-->
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

