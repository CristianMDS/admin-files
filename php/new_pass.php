<?php



?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nueva Contraseña</title>
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
    <div id="come-back">
        <button onclick="window.history.back()">Regresar</button>
    </div>
    <div id="group">
        <header>
            <h1>Nueva Contraseña</h1>
        </header>
        <aside>
            <label>
                Contraseña:
                <input type="password" name="pass" id="pass" placeholder="Contraseña..." />
            </label>
            <label>
                Repite la contraseña:
                <input type="password" name="r-pass" id="r-pass" placeholder="Contraseña..." />
            </label>
            <center>
                <button id="new-pass">Restablecer</button>
            </center>
        </aside>
    </div>
    <?php
        echo "
            <script src='../js/security.js'></script>
        ";
    ?>
</body>
</html>