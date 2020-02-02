<?php

    require 'conexion.php';


    $Nombre = $_POST['nombre'];
    $Apellidos = $_POST['apellidos'];
    $Telefono = $_POST['telefono'];
    $Email = $_POST['email'];

    $insertar = "INSERT INTO  usuarios (nombre,apellidos,telefono,email) VALUES ('$Nombre','$Apellidos','$Telefono','$Email')";

    $query = mysqli_query($conectar,$insertar);

    if($query){

        echo 'correcto';
        
    }

    else{
        echo 'incorrecto';
    }


?>