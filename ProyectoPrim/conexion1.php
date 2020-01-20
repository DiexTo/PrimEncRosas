<?php
include_once 'configuracion.php';
$baseDatos = new mysqli(BD_DB, BD_USSER, BD_PASS, BD_NAME);
    if ($baseDatos->connect_errno){
        echo $baseDatos->connect_errno;
        return;}
?>