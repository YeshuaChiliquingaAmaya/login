<?php
    // Datos de conexión a la base de datos en la nube
    $host = "biokskqzeaoic27nghad-mysql.services.clever-cloud.com";
    $username = "u4djfg6dudvl6mmr";
    $password = "uxC0t0MCa0RyNKRoew80";
    $database = "biokskqzeaoic27nghad";
    $port = 3306;

    // Crear la conexión
    $conexion = new mysqli($host, $username, $password, $database, $port);

    /* //Verificar la conexión 
    // Verificar si la conexión fue exitosa
    if ($conexion->connect_error) {
        die("Conexión fallida: " . $conexion->connect_error);
    } else {
        echo "Conexión exitosa a la base de datos en la nube.";
    }
    */
?>
