<?php 
class ControlPlantilla{

    static public function Control(){
        include "vistas/template.php";


    }
    //INTERACCION CON EL USUARIO 
    static public function EnlacesPaginasControles(){
        if (isset($_GET["action"])) {
            $enlaceControlador = $_GET["action"];
        } else {
            $enlaceControlador = "index";
        }
    //INSTANCIAMOS EL MODELO
    $respuesta = EnlacePagina :: EnlacePaginaModel($enlaceControlador);
    include $respuesta;

    }
    

  
}


