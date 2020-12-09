<?php  
  include_once "Conexión.php";
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>GOBIERNO DE MEXICO</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.green-light_green.min.css" />
    <link rel="stylesheet" href="css/styles-log.css">
    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
    <script type="text/javascript" language="javascript" src="js/signup.js"></script>  
    <script type="text/javascript" language="javascript" src="js/login.js"></script> 
</head>
<body>
	<div class="mdl-layout mdl-js-layout">
        <div id="login-conatiner" class="mdl-card mdl-shadow--16dp">
            <div class="mdl-card__supporting-text">
				<div id="card-heading">
					GOBIERNO MEXICO
                </div>
                </script><lottie-player src="https://assets2.lottiefiles.com/private_files/lf30_33xG9R.json"  background="transparent"  speed="1"  style="width: 300px; height: 300px;"  loop controls autoplay></lottie-player>
                <form id="login" method="post" action="login.php">
                    
                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                        <input class="mdl-textfield__input" type="text" id="uname" name="email" />
                        <label class="mdl-textfield__label" for="uname">Email de usuario</label>
                    </div>
                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                        <input class="mdl-textfield__input" type="password" id="pass" name="password"/>
                        <label class="mdl-textfield__label" for="pass">Contraseña</label>
                    </div>
                     <button type="submit" name="inicio" value="Login" id="login-button" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--colored mdl-color-text--white">
                            Login
                    </button>                   
                </form>
            </div>

            <div class="mdl-card__actions">
            	<button class="mdl-button mdl-js-button mdl-button--primary" onclick="location.href='registro.php'">Registrarse</button>
            </div>
        </div>
	</div>
	<script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
</body>
</html>
