<?php
    include ('conexion.php');

    $email = $_POST['correo'];
    $pass = $_POST['contrasena'];

    $consulta = mysqli_query ($con, "SELECT * FROM users WHERE correo = '$email' && contrasena = '$pass'");
    if ($rows = mysqli_fetch_array($consulta)) {
        session_start();
        $_SESSION['correo'] = $email;

        echo "<script>
        alert('LOGUEADO CORRECTAMENTE');
        location.href = 'index.php';
    </script>";
    
    } else {
        echo "<script>
        alert('Error DATOS NO VALIDADOS');
        location.href = 'login.html';
    </script>";
    }

    mysqli_close($con);
?>