<?php

    include 'conexion_be.php';

    // Datos de conexión a la base de datos en la nube
    $nombre_completo = $_POST['nombre_completo'];
    $correo = $_POST['correo'];
    $usuario = $_POST['usuario'];
    $contrasena = $_POST['contrasena'];

    $query = "INSERT INTO usuarios (nombre_completo, correo, usuario, contrasena) 
              VALUES ('$nombre_completo', '$correo', '$usuario', '$contrasena')";

    // Crear la conexión
    $ejecutar = mysqli_query($conexion, $query);

    if($ejecutar){
        echo '
            <script>
                alert("Usuario almacenado exitosamente");
                window.location = "../index.php";
            </script>
        ';
    } else {
        echo '
            <script>
                alert("Inténtalo de nuevo, usuario no almacenado");
                window.location = "../index.php";
            </script>
        ';
    }

    // Cerrar la conexión
    mysqli_close($conexion);
?>