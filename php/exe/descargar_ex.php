<?php

$archivo = trim(urldecode($_GET["archivo"]));

// Ruta del archivo
$rutaArchivo = '../../upload_files/'.$archivo;

// Nombre del archivo para la descarga
$nombreArchivo = basename($rutaArchivo);

// Configurar las cabeceras
header('Content-Type: application/octet-stream');
header("Content-Transfer-Encoding: Binary");
header("Content-disposition: attachment; filename=\"$nombreArchivo\"");

// Leer el archivo y enviarlo al navegador
readfile($rutaArchivo);
exit;
?>