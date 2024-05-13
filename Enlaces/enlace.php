<?php
class EnlacePagina{
    static public function EnlacePaginaModel($enlaceModel){

        if ($enlaceModel=="login.php" ||
            $enlaceModel=="compra.php"
        
        ) {
            $module = "vistas/layout/".$enlaceModel.".php";

            
        }
        
        return $module;
        
        
    }
    

}