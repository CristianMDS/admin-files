<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrarse</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    
    <style>
        body {
            position: relative;
            height: 95vh; /* Altura del contenedor */
        }

        #group {
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
    <div id="group">
        <center>
            <header>
                <img src="../img/signup.png" alt="">
            </header>
        </center>
        <aside>
            <label>
                <p>Usuario:</p>
                <input type="text" name="user" id="user" placeholder="¿Usuario?"/>
            </label>
            <label>
                <p>Password:</p>
                <input type="password" name="pass" id="pass" placeholder="¿Contraseña?"/>
            </label>
            <label>
                <p>E-mail:</p>
                <input type="email" name="mail" id="mail" placeholder="¿Email?"/>
            </label>
            <br><br>
            <center><button id="btn-reg">Registrar</button></center>
        </aside>
    </div>
    <script src="../js/funciones.js"></script>
</body>
</html>
