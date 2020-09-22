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
        ?>
        <center></center>
            <h1>Listar Usarios Registrados</h1>
            <form method="post">
            <table  border="1">
                <tr>
                    <th>DNI</th>
                    <th>Nombre</th>
                    <th>Apellidos</th>
                    <th>Correo</th>
                    <th>Eliminar</th>
                    <th>Actualizar</th>
                </tr>
                <?php     
                    foreach($obj->listar() as $a=>$datos){
                        echo "<tr><td>$datos[0]</td><td>$datos[1]</td><td>$datos[2]</td><td>$datos[3]</td>";   
                ?>
                        <td><a href="../Llamada/elimina.php?dni=<?=$datos[0]?>">Eliminar</a></td>    
                        <td><a href="Pag_Modificar.php?dni=<?=$datos[0]?>">Actualizar</a></td>  
                <?php     
                    }  
                ?>
            </table>
            
            <br><a href="../index.php">Principal</a>
            </form>
        </center>
    </body>
</html>

