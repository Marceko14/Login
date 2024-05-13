<?php 
//LLAMAR AL CONTROLADOR
require_once  "controladores/controlador.php";
//LLAMAR AL ENLACE 
require_once "Enlaces/enlace.php";


//INSTACIAMOS
$respuesta = new ControlPlantilla();
$respuesta -> control();


