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
    <script type="text/javascript" language="javascript" src="js/login.js"></script>
    <script type="text/javascript" language="javascript" src="js/signup.js"></script> 
</head>
<body>
    <div class="mdl-layout mdl-js-layout">
        <div id="login-conatiner" class="mdl-card mdl-shadow--16dp">
            <div class="mdl-card__supporting-text">
                <div id="card-heading">
                    GOBIERNO MEXICO
                </div>
                <form id="signup" method="post" action="Enviar registro.php">
                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                        <input class="mdl-textfield__input" name="nombre" type="text" id="uname"/>
                        <label class="mdl-textfield__label" for="uname">Nombre</label>
                    </div>
                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                        <input class="mdl-textfield__input" name="PApellido" type="text" id="a_p"/>
                        <label class="mdl-textfield__label" for="uname">Primer Apellido</label>
                    </div>
                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                        <input class="mdl-textfield__input" name="SApellido" type="text" id="a_m"/>
                        <label class="mdl-textfield__label" for="uname">Segundo Apellido</label>
                    </div>
                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                        <input class="mdl-textfield__input" name="correo"> <type="text" id="email"/>
                        <label class="mdl-textfield__label" for="uname">Correo</label>
                    </div>
                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                        <input class="mdl-textfield__input" name="contrasena" type="password" id="pass"/>
                        <label class="mdl-textfield__label" for="pass">Contraseña</label>
                    </div>
                     <button type="submit" value="Signup" id="login-button" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--colored mdl-color-text--white">
                            Registrarse
                    </button>
                </form>
            </div>

            <div class="mdl-card__actions">
                <button class="mdl-button mdl-js-button mdl-button--primary" onclick="location.href='index.html'">Login</button>
            </div>
        </div>
    </div>
    <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
</body>
</html>
