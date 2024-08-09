<?php

$archivo = $_GET["archivo"];
$ruta = urldecode($_GET["route"]);
$codigo = urldecode($_GET["code"]);

$n_archivo = explode(".", $archivo);
$n_archivo = trim(str_replace("backup_", "", $n_archivo[0]));

require("../conection/xconect.php");

$sql = "DELETE FROM archivos WHERE codigo = '$codigo' AND nombre_archivo = '$n_archivo'";
    $conn->query($sql);

// Eliminar archivo en la misma ruta que el documento PHP

if(file_exists($ruta.$archivo)){
    unlink($ruta.$archivo);
    echo "Listo - $archivo";
}else{
    echo "Error - $archivo";
}





?>