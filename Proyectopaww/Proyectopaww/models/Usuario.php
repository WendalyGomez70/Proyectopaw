<?php
    class Usuario{
        public function ObtenerUsuario(){
            include 'Conexion.php';
            $conecta=new Conectar(); 
            $consulta="SELECT * FROM usuario";
            $query=$conecta->prepare($consulta);
            $query->execute();
            $query->setFetchMode(PDO::FETCH_ASSOC);
            return $query->fetchAll();
        }
        public function CrearUsuario ($Nombre, $Correo, $Clave){
            try{
                include'Conexion.php';
                $conecta=new Conectar();
                $consulta= $conecta->prepare("INSERT INTO usuario(Nombre,Correo,Clave)
                VALUES(:Nombre, :Correo, :Clave)");
                $consulta-> bindParam(":Nombre", $Nombre, PDO:: PARAM_STR);
                $consulta-> bindParam(":Correo", $Correo, PDO:: PARAM_STR);
                $consulta-> bindParam(":Clave", $Clave, PDO:: PARAM_STR);
                $consulta->execute();
                return true;
            }catch(Exception $e){
                return false;
            }
        }
    }
?>