<?php 

$carpeta = "../../upload_files/".trim(urldecode($_POST["carpeta"]));


if(is_dir($carpeta)){
    echo "¡Ups! Parece ser que esto ya existe";
    return;
}else if(!is_dir($carpeta)){
    mkdir($carpeta,0777);
    
    if(is_dir($carpeta))
        echo "Exito";

    return;
}

?>

