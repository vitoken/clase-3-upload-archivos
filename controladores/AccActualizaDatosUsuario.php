<?php

include ("../lib/constantes.php");

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

echo DIRBASE;
echo "<br>";
$sArchivo=DIRBASE."/img/usuario".$_FILES["imgusuario"]["name"];

move_uploaded_file($_FILES["imgusuario"]["tmp_name"], $sArchivo);
var_dump($_FILES);