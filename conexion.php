<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */




$conexion= mysqli_connect("localhost","root","","blog_master");

    if(mysqli_connect_error()){
        echo "Error ".mysqli_connect_error();
    }else{
        mysqli_query($conexion,"SET NAMES 'UFT8'");
        //echo "Conexión Exitosa";
    
    }
    
$valores="INSERT INTO usuarios VALUES(null,'Juan','Perez','juan.perez@gmail.com','1234')";

mysqli_query($conexion, $valores);

$rsulInsertar=mysqli_affected_rows($conexion)<=0?"Error al insertar":"Se agregaron ".mysqli_affected_rows($conexion)." registros";

echo $rsulInsertar;