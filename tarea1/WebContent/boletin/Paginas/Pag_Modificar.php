<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php           
            include_once '../Controlado/conexion.php';
            $obj=new Conectar();
            $dni=$_REQUEST['dni']; 
            $a=$obj->buscar($dni);
        ?>
        <center>
            <h1>Registro de Usuario</h1>
            <form action="../Llamada/actualiza.php" method="POST">
                <table>
                    <input type="hidden" name="dni" value="<?=$dni?>">
                    <tr>
                        <td>Nombre:</td>
                        <td><input name="nom" value="<?=$a[0]?>"></td>
                    </tr>
                    <tr>
                        <td>Apellidos:</td>
                        <td><input name="ap" value="<?=$a[1]?>"></td>
                    </tr> 
                    <tr>
                        <td>Correo:</td>
                        <td><input name="correo" value="<?=$a[2]?>"></td>
                    </tr>       
                    <tr>
                        <td><input type="submit"></td>
                    </tr>        
                 </table>        
            </form>
        </center>
    </body>
</html>
