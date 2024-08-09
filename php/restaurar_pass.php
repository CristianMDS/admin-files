
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restablecer Contraseña</title>
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

        #come-back{
            display:flex;
            justify-content: end;
        }
    </style>
</head>
<body>
    <div id="group">
        <header>
            <h1> Restablecer contraseña </h1>
        </header>
        <aside>
            <p> Usuario: </p>
            <label>
                <input type="text" name="user" id="user" placeholder="Usuario..." />
            </label>
            <p> Para poder restablecer contraseña se le enviara un codigo a su correo electronico </p>
            <label>
                E-mail:
                <input type="email" name="mail" id="mail" placeholder="E-mail..." />
            </label>
            <button id="restablecer">Restablecer</button>
        </aside>
        <footer>

        </footer>
    </div>
    <?php
        echo "
            <script src='../js/security.js'></script>
        ";
    ?>
</body>

</html>