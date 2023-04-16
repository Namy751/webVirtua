<?php

include("conexion.php");
$con=conectar();

$sql="SELECT * FROM products";
$query=mysqli_query($con,$sql);

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
    <link rel="Stylesheet"href="panel.css"/>

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
                <a href="index.php" class="nav-link active">Home</a>
            </li>
    </div>
</header>

<form action="registroproductos.php" method="post" class="form">
    <div>  
      <section class="main">
        <figure class="main_figure">
          <img src="./images/fondo sunset.jpg" class="main_img">
        </figure>
    <div class="main_contact">
      <h2 class="main_title">Hola</h2>
      <p class="main_paragraph">¡Bienvenido! registre un nuevo producto: </p>
    </div>
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
    <input class="box" type="text" name="foto" id="foto" required  />
  </div>
    
    <button class="btn" type="submit" name="registrar" id="registrar">Registrar</button>
  </div>
  </form>
</section>

        <div class="container">   
                <table>
                    <thead>
                    <tr>
                                <th>ID</th>
                                <th>Nombre</th>
                                <th>Producto</th>
                                <th>Marca</th>
                                <th>Tipo_piel</th>
                                <th>Afeccion</th>
                                <th>Descripcion</th>
                                <th>Precio</th>
                                <th>Foto</th>
                                <th></th>
                                <th></th>
                    </tr>
                    </thead>
                    <tbody>
                         <?php
                             while($row=mysqli_fetch_array($query)){
                         ?>
                        
                        <tr>
                            <td><?php echo $row['id']?></td>
                            <td><?php echo $row['nombre']?></td>
                            <td><?php echo $row['producto']?></td>
                            <td><?php echo $row['marca']?></td>
                            <td><?php echo $row['tipo_piel']?></td>
                            <td><?php echo $row['afeccion']?></td>
                            <td><?php echo $row['descripcion']?></td>
                            <td><?php echo $row['precio']?></td>
                            <td><img src="<?php echo $row['foto']?>"width="80px" height="70px"></td>

                        
                        <td><a href="actualizar.php?id=<?php echo $row['id'] ?>" class="btn">Editar</a></td>
                        <td><a href="delete.php?id=<?php echo $row['id']?>" class="btn">Eliminar</a></td>
                        </tr>
                        <?php
                             }
                         ?>
                    </tbody>
                </table>
        </div>


<footer>
  <div class="container">
      <div class="footer-content">
          <div class="footer-content-about">
             </div>
          <div class="footer-div">
              
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