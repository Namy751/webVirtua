<?php

include("conexion.php");
$con=conectar();

$id=$_POST['id'];
$name=$_POST['nombre'];
$product=$_POST['producto'];
$brand=$_POST['marca'];
$skin=$_POST['tipo_piel'];
$condition=$_POST['afeccion'];
$description=$_POST['descripcion'];
$price=$_POST['precio'];
$photo=$_POST['foto'];

$sql="UPDATE products SET  nombre='$name',producto='$product',marca='$brand',tipo_piel='$skin',afeccion='$condition',descripcion='$description',precio='$price',foto='$photo' WHERE id='$id'";
$query=mysqli_query($con,$sql);

if($query){
    echo "<script>
    alert('Se ha modificado con exito');
    location.href = 'panel.php';
</script>";
} else {
    echo "Se encontró un error";
}