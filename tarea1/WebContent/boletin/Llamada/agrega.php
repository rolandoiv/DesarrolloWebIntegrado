	<?php
	    include_once '../controlado/conexion.php';
    $obj=new Conectar();
    $obj->agregar($_REQUEST['dni'], $_REQUEST['nom'],
            $_REQUEST['ap'], $_REQUEST['correo']);
     header("location:../index.php")
?>
