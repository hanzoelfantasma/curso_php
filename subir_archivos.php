<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

//abrir archivos
$datos_archivo=$_FILES['archivo'];
$nombre_archivo=$datos_archivo['name'];
$tipo_archivo=$datos_archivo['type'];
$ruta_temporal=$datos_archivo['tmp_name'];

if(is_dir('./uploads')){
    echo "existe el directorio";
    move_uploaded_file($ruta_temporal, "./uploads/$nombre_archivo");
} else {
    echo "se creará directorio";
    mkdir('uploads',0777);
    move_uploaded_file($ruta_temporal, "./uploads/$nombre_archivo");
}

echo "<pre>";
var_dump($nombre_archivo);
echo '</pre>';
