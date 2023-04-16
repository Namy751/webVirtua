<?php
    include ('conexion.php');

    $name = $_POST['nombre'];
    $product = $_POST['producto'];
    $brand = $_POST['marca'];
    $skin = $_POST['tipo_piel'];
    $condition= $_POST['afeccion'];
    $description= $_POST['descripcion'];
    $price = $_POST['precio'];
    $photo = $_POST['foto'];

        $insert = "INSERT INTO products (id, nombre, producto, marca, tipo_piel, afeccion, descripcion, precio, foto)
        values ('0','$name', '$product', '$brand','$skin', '$condition', '$description','$price','$photo')";
    
        $ir = mysqli_query($con,$insert);
    
        if($ir){
            echo "<script>
            alert('Se ha registrado con exito');
            location.href = 'panel.php';
        </script>";
        } else {
            echo "Se encontró un error";
        }
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
       
        mysqli_close($con);
?>