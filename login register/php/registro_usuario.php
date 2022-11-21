<?php

    include 'conexion_bd.php';

    $nombre_completo = $_POST['nombre_completo'];
    $correo = $_POST['correo'];
    $usuario = $_POST['usuario'];
    $pasword = $_POST['pasword'];

    $query = "INSERT INTO usuarios(nombre_completo, correo, usuario, pasword) 
              VALUES('$nombre_completo', '$correo', '$usuario','$pasword')";

    $ejecutar = mysqli_query($conexion, $query);

    if($ejecutar){
        echo '
            <script>
                alert("Usuario almacenado exitosamente");
                window.location = "../index.php";
            </script>
        ';
    }else{
        echo '
            <script>
                alert("Intentalo de nuevo usuario no almacenado");
                window.location = "../index.php";
            </script>
        ';
    }
?>