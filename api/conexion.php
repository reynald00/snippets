<?php @session_start();
    $con = new mysqli('localhost','rey','rey','snippets'); 
        if($con->connect_errno){
            die("ERROR EN LA CONEXIÓN");
        }
?>