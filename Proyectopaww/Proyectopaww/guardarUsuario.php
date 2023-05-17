<?php
    $Nombre=$_POST['Nombre'];
    $Correo=$_POST['Correo'];
    $Clave=$_POST['Clave'];

    if (!empty($Nombre)&&!empty($Correo)&&!empty($Clave)){
        require_once'models/Usuario.php';
        $Usuario=new Usuario();
        $resultado=$Usuario->CrearUsuario($Nombre,$Correo,$Clave);
        if ($resultado){
            header("Location:index.html");
        }
        else {
            header ("Location:Registro.php"); 
        }
    }
    else {
        header("Location:Registro.php");
    }
?>