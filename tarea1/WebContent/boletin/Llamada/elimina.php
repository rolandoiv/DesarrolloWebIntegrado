<?php
    include_once '../Controlado/conexion.php';
    $obj=new Conectar();
    $dni=$_REQUEST['dni'];
    $obj->eliminar($dni);
    header("location:../paginas/Pag_Listar.php");   
?>
