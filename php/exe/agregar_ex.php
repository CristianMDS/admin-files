<?php

require("../conection/xconect.php");

// Forma Orientada a objetos.
/*
    $sql = "SELECT ruta, codigo_archivo FROM rutas";
    $qry = $conn->query($sql);

    while($row = $qry->fetch_assoc()){
        echo "ruta: ".$row["ruta"]." codigo_archivo: ".$row["codigo_archivo"];
    }
*/

// Forma Procedural.
/*
    $sql = "SELECT ruta, codigo_archivo FROM rutas";
    $qry = mysqli_query($conn, $sql);

    while($row = mysqli_fetch_array($qry)){
        echo "ruta: ".$row["ruta"]." codigo_archivo: ".$row["codigo_archivo"];
    }
*/

date_default_timezone_set('America/Bogota');

$date = date("Y-m-d");
$hora = date("H:s:i");

if (isset($_FILES['uploadedFile']) && $_FILES['uploadedFile']['error'] == UPLOAD_ERR_OK) {

    $path = $_FILES['uploadedFile']['tmp_name'];
    $name = $_FILES['uploadedFile']['name'];
    $size = $_FILES['uploadedFile']['size'];
    $type = $_FILES['uploadedFile']['type'];

    $arr_name = explode(".", $name);
    $extension = $arr_name[1];

    $final_name = str_replace(" ", "_", $arr_name[0]);

    if($extension != 'rar' && $extension != 'zip'){
        $newName = ("backup_".$final_name).'.'.$extension;
    }else if($extension == 'rar' || $extension == 'zip'){
        $newName = ("backup_".$date."_".$final_name).'.'.$extension;
        $zip = true;
    }

    $allowedfileExtensions = array('zip', 'rar', 'pdf', 'xls', 'doc');
    if (in_array($extension, $allowedfileExtensions)) {
        // CARPETA PREDETERMINADA PARA SUBIR FILES
        $uDir = '../../upload_files/'; 

        if(!is_dir($uDir))
            mkdir($uDir);

        $dest_path = $uDir.$newName;

        $sql = "INSERT INTO archivos (nombre_archivo, tipo, size, fecha, hora, estado, codigo, nuevoNombre_archivo) 
                VALUES ('$arr_name[0]', '$extension', '$size', '$date', '$hora', 'Subido', 1234, '$newName')";
            $conn->query($sql);

        $sql = "INSERT INTO rutas (ruta, codigo_archivo) VALUES ('$uDir', 1234)";
            $conn->query($sql);

        if(move_uploaded_file($path, $dest_path))
            $message = 'Subido';
        else
            $message = 'Error';
    }

    if($message == 'Subido'){
        header("Location: ../../index.html");
    }

}

?>