<?php
    include '../conexion.php';
    $email = $con->real_escape_string(htmlentities($_POST['email']));        
    $pass = $con->real_escape_string(htmlentities($_POST['pass']));

    $sel = $con->query("SELECT user,nombre,apellido,email,pass,foto FROM usuarios WHERE email = '$email' ");
    
    if ($f = $sel -> fetch_assoc()) {
        $correo = $f['email'];
        $password = $f['pass'];
        $nombre = $f['nombre'];
        $apellido = $f['apellido'];
        $user = $f['user'];
        $foto = $f['foto'];
    }

    $passEncriptada = password_verify($pass,$password);
    if ($email == $correo && $passEncriptada = true) {
        $_SESSION['user'] = $user;
        $_SESSION['foto'] = $foto;
        echo "success";
    } else {
        echo "fail";
    }
    

?>