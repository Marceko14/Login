<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./vistas/style/estilo.css">
    <link rel="shortcut icon" href="./vistas/img/login.png" type="image/x-icon">
    <title>USERS</title>
</head>
<body>
     <header>
        <div class="contenedor">

            <form action="controladores/insertar.php" method="post">
                
                <img class="form-img" src="./vistas/img/fondo3.jpg" alt="">
                <p>HELLO</p>
                <p class="p-container" >WORLD!</p>

                <h1>login</h1>
                <div>
                    <input class="user-input" type="text" id="input" name="nombre" required placeholder="User">
                </div>
                <div>
                    <input type="password" id="input" name="clave"required placeholder="Password">

                </div>
                <button type="submit">Iniciar Sesión</button>
                
            </form>
        </div>
        

        

        
        
        
     </header>
    <section>

        <?php 
        $enlace  = new ControlPlantilla();
        $enlace ->EnlacesPaginasControles();
        ?>
    </section>

    
</body>
</html>