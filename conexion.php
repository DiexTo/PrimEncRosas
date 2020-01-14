<?php
include_once 'configuracion.php';

$baseDatos=new mysqli(BD_DB, BD_USER, BD_PASS, BD_NAME);
        
        if($baseDatos->connect_errno){
            echo $baseDatos->connect_errno;
        
        }

?>