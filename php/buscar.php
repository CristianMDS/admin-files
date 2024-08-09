<?php
header("Cache-Control: no-cache, must-revalidate");

    session_start();
    $usu = trim($_SESSION["usu"]);

    if($usu == ''){
        header("Location: ./exe/error.php?msg=errSesion");
    }

    require("./conection/xconect.php");


    $search = trim($_GET["search"]);

    $sql = "SELECT * FROM archivos WHERE nombre_archivo = '$search'";
    $qry = $conn->query($sql);

    if($row = $qry->fetch_assoc()){
        $html = "<tr>";
            $html .= "<td> ".$row['nombre_archivo']." </td>";
            $html .= "<td> ".$row['tipo']." </td>";
            $html .= "<td> ".$row['size']." </td>";
            $html .= "<td> ".$row['fecha']." </td>";
            $html .= "<td> <div class='descargar'><button>Descargar</button></div> <div class='eliminar'><button>Eliminar</button></div> </td>";
        $html .= "</tr>";
    }

    echo $html;
?>