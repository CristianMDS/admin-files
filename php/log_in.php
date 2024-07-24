<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    
    <style>
        body {
            position: relative;
            height: 95vh; /* Altura del contenedor */
        }

        #log-in {
            position: absolute;
            top: 45%;
            left: 50%;
            transform: translate(-50%, -50%); /* Centra horizontal y verticalmente */
        }

        header img {
            width: 100px;
            height: 100px;
        }

        #come-back{
            display:flex;
            justify-content: end;
        }
    </style>
</head>
<body>
    <div id="come-back">
        <button onclick="window.history.back()">Regresar</button>
    </div>
    <div id="log-in">
        <header>
            <center>
                <img src="../img/login.png" alt="Log in">
            </center>
        </header>

        <aside>
            <label>
                <p>Usuario:</p>
                <input type="text" name="user" id="user" placeholder="Usuario..." />
            </label>
            <label>
                <p>Contraseña:</p>
                <input type="password" name="pass" id="pass" placeholder="Contraseña..." />
            </label>
            <br><br>
            <center>
                <button id="btn-ing">Ingresar</button>
                <br>
                <a href="./restaurar_pass.php">¿Olvido la contraseña?</a>
            </center>

        </aside>

        <footer>
            <div id='message'></div>
        </footer>
    </div>
    <script src="../js/funciones.js"></script>
</body>
</html>

