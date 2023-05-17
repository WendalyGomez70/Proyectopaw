<?php
    // Obtener los datos enviados desde el formulario
    $email = $_POST['email'];
    $password = $_POST['password'];
    
    // Verificar si el usuario y la contraseña son correctos
    include ('models/Conexion.php');
    try {
        $conecta = new Conectar();
        $consulta = "SELECT * FROM usuario WHERE Correo = '$email' AND Clave = '$password'";
        $query = $conecta->prepare($consulta);
        $query->execute();
        
        // Si se encontró un registro, redirigir al usuario a la página de bienvenida
        if ($query->rowCount() > 0) {
            header('Location: index.html');
            exit;
        }
        // Si no se encontró un registro, mostrar un mensaje de error
        else {
            header('Location: Login.php');
        }
    } catch (Exception $e) {
        echo 'Error al conectar a la base de datos: ' . $e->getMessage();
    }
?>