<?php
    include_once '../Controlado/conexion.php';
    $obj=new Conectar();
    $obj->actualizar($_REQUEST['dni'], $_REQUEST['nom'],
            $_REQUEST['ap'], $_REQUEST['correo']);
  
    header("location:../paginas/Pag_Listar.php")
?>
