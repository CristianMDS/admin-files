<?php

session_start();

if(trim($_SESSION["usu"]) == ''){
    header("Location: ./php/exe/logOut_exe.php");
}

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MANAGE-FILES</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <style>
        #group{
            display:flex;
            justify-content: center; /* Centra horizontalmente */
            align-items: center; /* Centra verticalmente */
            margin-bottom: 8px;
            /* height: 100vh; Altura del contenedor */
        }

        #group div{
            margin: 4px;
        }

        #search{
            padding-top: 4px;
            padding-bottom: 4px;
            border-radius: 8px;
        }

        table, th, td {
            border: 1px solid black; 
        }

        th, td {
            padding: 6px;
        }

        #exit {
            display:flex;
            justify-content: end;
        }
    </style>
</head>
<body>
    <div id="exit">
        <button id="log-out">Log Out</button>
    </div>
    <center>
        <header>
            <h1>GESTOR DE ARCHIVOS</h1>
            <h5>version. 1.2.0</h5>
            <div id="group">
                <div class="agregar"><button>+</button></div>
                <div class="descargar"><button>Descargar</button></div>
                <div class="eliminar"><button>Eliminar</button></div>
                <div class="newFolder"><button>New-Sub-Folder</button></div>
                <!-- <div class="actualizar"><button>re-charge</button></div> -->
                <div class="txt-search"><input type="text" name="search" id="search" placeholder="¿Qué buscas?" /></div>
            </div>
        </header>

        <aside>
            <table>
                <tr>
                    <th>NOMBRE</th>
                    <th>TIPO</th>
                    <th>PESO</th>
                    <th>FECHA</th>
                    <th colspan="2">ACCION</th>
                </tr>
                    <div class="res"></div>
            </table>

        </aside>
    </center>

    <br>
    <footer>
        <h5><strong> <center> Todos los derechos reservados a MORA-TECH 2024 </center> </strong></h5>
    </footer>
    <?php
        echo "
            <script src='js/funciones.js'></script>
            <script src='js/security.js'></script>
        ";
    ?>
</body>
</html>