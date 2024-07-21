<?php

$archivo = $_GET["archivo"];
$ruta = urldecode($_GET["route"]);

// Eliminar archivo en la misma ruta que el documento PHP
unlink($ruta.$archivo);

echo "Listo - $archivo";
?>