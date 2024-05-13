<?php
static pub$USER= "root";
static public final $DB = "webLoginDB";
static public final $PASSWORD = "";
static public final $SERVER ="localhost";
$con = mysqli_connect($SERVER,$USER,$PASSWORD,$DB);
if ($con) {
    echo"Conexion exitosa";
} else {
    echo"Conexion invalida";
}
?>
<?php
class Conexion{
    static public function insertar(){
        $nombre = $_POST['nombre'];
        $clave = $_POST['clave'];
        $sql = "INSERT INTO Users (nombre,clave) VALUES('$nombre','$clave')";
    if ($conexion->query($sql) === TRUE) {
        echo "Datos insertados correctamente.";
    } else {
        echo "Error al insertar datos: " . $conexion->error;
    }
    
    // Cerrar la conexión
    $conexion->close();
    
    }

}

?>