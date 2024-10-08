

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MORA-TECH</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <style>
        body {
            position: relative;
            height: 90vh; /* Altura del contenedor */
        }

        .group {
            position: absolute;
            top: 30%;
            left: 50%;
            transform: translate(-50%, -50%); /* Centra horizontal y verticalmente */
        }

        .buttons-idx{
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .btn-login{
            margin-right: 40px;
        }

    </style>
</head>
<body>
    
    <div class="group">
        <center>
        <header>
            <h1>
                Gestor de Archivos
            </h1>
            <p>Este es un proyecto para almacenar documentos, imagenes, <br> videos e incluso archivos compresos.</p>
        </header>
        </center>
        <aside>
            <div class="buttons-idx">
                <button class="btn-login">Log In</button>
                <button class="btn-signup">Sign Up</button>
            </div>
        </aside>
        <footer>

        </footer>
    </div>

    <script src="./js/init.js"></script>
</body>
</html>