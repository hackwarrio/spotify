<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user= scalable=no,initial-scale=1.0, maximun-scale=1.0,minimum-scale= 1.0">
    <title> Premium</title>
    
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;400;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="recursos/invstyle.css">

</head>
<body>
    <?php require "recursos/partials/header.php" ?>
    <div class="contenedor">
        <div class="principal">
            <div class="tit">
                <h1 class="titulo1">¡Te invitaron a Premium Familiar!</h1>    
            </div>
            
            <h3 class="titulo2">Inicia sesión con tu cuenta de Spotify o crea una cuenta nueva.</h3>
            <form action="index.php" method="post">
             <input type="submit" name="invitacion" value="ACEPTAR INVITACION">
             <?php
                
                if(isset($_POST["invitacion"])){
                    header("Location:/final/login.php");
                }
             ?>
            </form>
            
            <p class="parr1">
                No se hacen reembolsos si cambias tu suscripción de Spotify Premium actual 
                antes de que se termine el periodo de pago vigente.
            </p>
            <p class="parr2">
                Al aceptar la invitación, 
                aceptas los Términos y Condiciones de Spotify Premium Familiar.
            </p>
        </div>
        <div class="secundario">
            <div class="letras_secundario">
                <h1 class="enganche">
                Escuchen juntos <br>
                o por separado.
                </h1>
                <h4 class="enganche2">
                    Cada uno tiene su cuenta individual, asi todos pueden disfrutar la músuca que mas le gusta,¡sin tener que turnarse!
                </h4>
            </div>
            <div class="imagen_secundario">
                <aside>
                <img src="recursos/imagenes/spotify_pantalla.jpg" class="foto" width="538px" height="358px">
                </aside>
                
            </div>
        </div>
        <div class="tercero">
            <h1 class="letras_tercero">
                No tienes que pagar nada. <br>
                Tan solo disfruta la música.
            </h1>
            <h4 class="letras_tercero_2">
                Tu cuenta de Spotify Premium ya está pagada.
                Solo únete a Premium Familiar y dale play.
            </h4>

        </div>
        <div class="cuarto">
            <h1 class="titulo_cuarto">
                Es muy fácil unirse a Premium Familiar
            </h1>
            <div class="list">
            <ol class="list1">
                <h3>1</h3>
                Toca ACEPTAR INVITACIÓN
            </ol>
            <ol class="list2" >
                <h3>2</h3>
                Regístrate en Spotify o inicia sesión <br>
                en tu cuenta (así conservarás toda tu música guardada).
            </ol>
            <ol class="list3">
                <h3>3</h3>
                Confirma tu dirección y ¡listo! Disfruta la música.*
            </ol>
            </div>
        </div>
    </div>
    
    
    
</body>

      
</html>