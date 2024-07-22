<?php

require("../conection/xconect.php");

$date = date("Y-m-d");
$hora = date("H:i:s");

$u = urldecode(trim($_POST["user"]));
$p = urldecode(trim($_POST["pass"]));
$m = urldecode(trim($_POST["mail"]));

$sql = "INSERT INTO usuarios (usuario, password, fecha, hora, mail) VALUES ('$u', '$p', '$date', '$hora', '$m')";
$qry = $conn->query($sql);

if($qry){
    echo "Exitoso";
}else if(!$qry){
    echo "Error";
}