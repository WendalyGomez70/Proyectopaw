<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilos.css">
    <title>Ingresar</title>
</head>
<body>
    <div style="text-align:center; margin-top:50px;">
        <h2 style="font-size:28px; color:#333; font-weight:bold;">Inicio de sesión</h2>
        <form action="comprobacion.php" method="POST" style="margin-top:30px;">
            <label for="email" style="font-size:20px; color:#333;">Correo electrónico:</label>
            <br>
            <input type="text" id="email" name="email" style="font-size:18px; padding:10px; border-radius:5px; border:none; box-shadow:0 0 5px #333;">
            <br><br>
            <label for="password" style="font-size:20px; color:#333;">Contraseña:</label>
            <br>
            <input type="password" id="password" name="password" style="font-size:18px; padding:10px; border-radius:5px; border:none; box-shadow:0 0 5px #333;">
            <br><br>
            <input type="submit" value="Iniciar sesión" style="font-size:20px; padding:10px 30px; background-color:#333; color:#fff; border:none; border-radius:5px; cursor:pointer;">
        </form>
        <p style="font-size:18px; color:#333; margin-top:20px;">¿Aún no estás registrado? <a href="Registro.php" style="color:#333; text-decoration:none; font-weight:bold;">Regístrate aquí</a></p>
    </div>
</body>
</html>