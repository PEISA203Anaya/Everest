<?php

include("conexion.php");

if(isset($_POST['send'])) {
    if (
        strlen($_POST['nombre']) >= 1 &&
        strlen($_POST['apellidos']) >= 1 &&
        strlen($_POST['email']) >= 1 &&
        strlen($_POST['contra']) >= 1 &&
        strlen($_POST['usu']) >= 1
    ) {
        $nombre = trim($_POST['nombre']);
        $apellidos = trim($_POST['apellidos']);
        $email = trim($_POST['email']);
        $contra = trim($_POST['contra']);
        $usu = trim($_POST['usu']);
        $fecha = date("d/m/a");

        $consulta = "INSERT INTO datos(nombre, apellidos, email, contraseña, usuario, fecha)
                    VALUES ('$nombre', '$apellidos', '$email', '$contra', '$usu', '$fecha')";

        $resultado = mysqli_query($conex, $consulta);
        if($resultado) {
            ?>
            <h3 class="success">Tu registro se ha completado</h3>
            <?php
        } else {
            ?>
            <h3 class="error">Ocurrió un error inesperado</h3>
            <?php
        }
    } else {
        ?>
        <h3 class="error">Llena todos los campos</h3>
        <?php
    }
}
?>