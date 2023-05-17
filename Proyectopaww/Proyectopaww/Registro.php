<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilos.css">
    <title>Nuevo Usuario</title>
</head>
<body>
    <header>
        <center>
            <h1 style="font-size:28px; color:#333; font-weight:bold;">Ayudemos al Arroyo</h1>
        </center>    
    </header>
    <div style="text-align:center; margin-top:50px;">
    <h2 style="font-size:28px; color:#333; font-weight:bold;">Registrarse</h2>
    <form action="guardarUsuario.php" method="post" style="margin-top:30px;">
        <label for="nombre" style="font-size:20px; color:#333;">Nombre:</label>
        <br>
        <input type="text" id="nombre" name="Nombre" style="font-size:18px; padding:10px; border-radius:5px; border:none; box-shadow:0 0 5px #333;">
        <br><br>
        <label for="correo" style="font-size:20px; color:#333;">Correo:</label>
        <br>
        <input type="text" id="correo" name="Correo" style="font-size:18px; padding:10px; border-radius:5px; border:none; box-shadow:0 0 5px #333;">
        <br><br>
        <label for="clave" style="font-size:20px; color:#333;">Contraseña:</label>
        <br>
        <input type="password" id="clave" name="Clave" style="font-size:18px; padding:10px; border-radius:5px; border:none; box-shadow:0 0 5px #333;">
        <br><br>
        <input type="submit" value="Quiero registrarme" style="font-size:20px; padding:10px 30px; background-color:#333; color:#fff; border:none; border-radius:5px; cursor:pointer;">
    </form>
    <p style="font-size:18px; color:#333; margin-top:20px;">¿Ya tienes una cuenta? <a href="Login.php" style="color:#333; text-decoration:none; font-weight:bold;">Inicia sesión aquí</a></p>
</div>

   
</body>
</html>