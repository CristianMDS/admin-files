<?php

require("../conection/xconect.php");

$u = $_POST["user"];
$p = $_POST["pass"];

$sql = "SELECT usuario FROM usuarios WHERE usuario = '$u' AND password = '$p'";
$qry = $conn->query($sql);

if($row = $qry->fetch_assoc())
    $_SESSION["usu"] = $row["usuario"];

if($_SESSION["usu"] == '')
    echo "Error";
else if($_SESSION["usu"] != '')
    echo "Ingresa";

?>