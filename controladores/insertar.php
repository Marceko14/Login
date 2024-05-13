<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $clave = $_POST["clave"];

    $USER= "root";
    $DB = "webLoginDB";
    $PASSWORD = "";
    $SERVER ="localhost";
$con = new mysqli($SERVER,$USER,$PASSWORD,$DB);

if ($con->connect_error) {
    die("Conexión fallida: " . $con->connect_error);
}

$sql = "INSERT INTO Users (nombre, clave) VALUES ('$nombre','$clave')";


    if ($con->query($sql) === TRUE) {
        echo "Datos insertados correctamente";
    } else {
        echo "Error al insertar datos: " . $con->error;
    }

    // Cierra la conexión
    $con->close();
}