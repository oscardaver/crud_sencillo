

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="css/style.css">
    <title>registro</title>
</head>

<body>
    <form method="post">
        <h2>Hola</h2>
        <p>Inicia tu registro</p>
        <div class="input-wrapper">
            <input type="text" name="name" placeholder="Nombre">
            <img class="input-icon" src="img/name.svg" alt="">
        </div>
        <div class="input-wrapper">
            <input type="email" name="email" placeholder="Email">
            <img class="input-icon" src="img/email.svg" alt="">
        </div>
        <div class="input-wrapper">
            <input type="text" name="direccion" placeholder="Direccion">
            <img class="input-icon" src="img/direction.svg" alt="">
        </div>
        <div class="input-wrapper">
            <input type="number" name="telefono" placeholder="Telefono">
            <img class="input-icon" src="img/phone.svg" alt="">
        </div>
        <div class="input-wrapper">
            <input type="password" name="pass" placeholder="Contraseña">
            <img class="input-icon" src="img/password.svg" alt="">
        </div>
        <input class="btn" type="submit" name="registrar" value="Enviar">

    </form>

    <?php
    include("admin/registrar.php");
    ?>
</body>

</html>