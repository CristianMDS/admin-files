<?php

require("../conection/xconect.php");

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

    $allowedfileExtensions = array('zip', 'rar', 'pdf', 'xls', 'doc', 'mp4');
    if (in_array($extension, $allowedfileExtensions)) {
        // CARPETA PREDETERMINADA PARA SUBIR FILES
        $uDir = '../../upload_files/'; 

        if(!is_dir($uDir))
            mkdir($uDir);

        $dest_path = $uDir.$newName;

        $sql = "SELECT MAX(codigo)+1 AS new_code FROM archivos";
        $qry = $conn->query($sql);
        $row = $qry->fetch_assoc();

        $code_file = (int) trim($row["new_code"]);

        $sql = "INSERT INTO archivos (nombre_archivo, tipo, size, fecha, hora, estado, codigo, nuevoNombre_archivo) 
                VALUES ('$arr_name[0]', '$extension', '$size', '$date', '$hora', 'Subido', $code_file, '$newName')";
        $qry = $conn->query($sql);

        if($qry){
            $sql = "INSERT INTO rutas (ruta, codigo_archivo) VALUES ('$uDir', $code_file)";
                $conn->query($sql);
        }


        if(move_uploaded_file($path, $dest_path))
            $message = 'Subido';
        else
            $message = 'Error';
    }

    if($message == 'Subido'){
        header("Location: ../../manage_files.php");
    }

}

?>