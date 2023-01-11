<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>boton</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <div class="verify" id="passtext">
        <label for="password">Ingresa la contraseña</label>
        <input type="password" name="password" id="verify" class="textver">
        <button id="verpass">Enviar</button>
        <p id="alertpass" class="alertpa">Contraseña incorrecta</p>
    </div>

    <div class="tarjetaa" id="cobrooo">
        <p>Tarjeta de</p>
        <p id="monto"></p>
        <div class="cobro">
            <input type="text" placeholder="Cantidad a cobrar">
            <button>Cobrar</button>
        </div>
    </div>

    <script src="index.js"></script>
</body>
</html>
