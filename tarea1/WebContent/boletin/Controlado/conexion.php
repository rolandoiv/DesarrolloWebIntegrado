<?php
	class Conectar {

    private $conn=null;     //variable conexion
    function conectar() {
        if($this->conn==null){
          $this->conn = mysqli_connect ("localhost","root", "","boletin");
        }
    }

    //método para agreegar registros
    function agregar($dni,$nom,$ape,$correo){
        $sql="insert into usuario values('$dni','$nom','$ape','$correo')";   
        mysqli_query($this->conn, $sql) or die(mysqli_error($this->conn));
    }

    //método para eliminar registros
    function eliminar($dni){
        $sql="delete from usuario where dni_usuario=$dni";   
        mysqli_query($this->conn, $sql) or die(mysqli_error($this->conn));
    }

    //método para actualizar registros
    function actualizar($dni,$nom,$ape,$correo){
        $sql="update usuario set nombre='$nom', ap_paterno='$ape', correo='$correo' where dni_usuario='$dni'";   
        mysqli_query($this->conn, $sql) or die(mysqli_error($this->conn));
    }

    //método para buscar registro
    function buscar(string $dni){
        $sql="select nombre, ap_paterno, correo from usuario where dni_usuario=$dni";
        $res= mysqli_query($this->conn, $sql);
        $vec=array();
        if(mysqli_num_rows($res)>0){
            $vec= mysqli_fetch_array($res);
        }
        return $vec; 
    }

    //método para listar registros
    function listar(){
        $sql="select dni_usuario, nombre, ap_paterno, correo from usuario";
        $res= mysqli_query($this->conn, $sql);
        $vec=array();
        while($f= mysqli_fetch_array($res))  
                $vec[]=$f;
        return $vec;
    }    
}
?>