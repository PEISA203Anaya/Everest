<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario Adventure Everest Traveling</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="styleform.css">
</head>
<body>

<div class="container">
    <div class="info">
                <p class="txt-1">XD</p>

                <h2>Bienvenido a Everest Traveling</h2>
                <hr />

                <p class="txt-2">
                    Esta no solo es una pagina informativa del Everest.
                    Se busca el ser una pagina que realice viajes de distintos programas
                    que beneficien a ti como usuario aventurero y amante del Everest.
                    Espero la información y lo que ofrecemos sea de tu total interes,
                    no dudes en recomendarnos y compartirnos.
                </p>
            </div>

            
                <h2>Comienza ahora!</h2>

                <p>
                    Para ser parte de nuestro equipo aventurero
                    deberas llenar los siguientes campos, recuerda leer bien 
                    y seguir todas las instrucciones completas; llena todos los campos.


                    Vamos por una aventura mas!
                </p>
                <div class="inputs">
        <form name="datos" method="post" action="conexion.php">
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" required>
            
            <label for="apellidos">Apellidos:</label>
            <input type="text" id="apellidos" name="apellidos">
            
            <label for="email">Correo Electrónico:</label>
            <input type="text" id="email" name="email">
            
            <label for="contraseña">Contraseña:</label>
            <input type="text" id="contra" name="contra">

            <label for="usuario">Usuario:</label>
            <input type="text" id="usu" name="usu">
            
            <button type="submit" name="send">Iniciar Sesión</button>
        </form>
    </div>

    <?php
    // Incluir aquí el código PHP para procesar el formulario (send.php)
    include("send.php");
    ?>
</div>

</body>
</html>