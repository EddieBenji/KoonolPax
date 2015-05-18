<?php
/**
 * Created by PhpStorm.
 * User: Lalo
 * Date: 03/05/2015
 * Time: 12:16 PM
 */

session_start();

?>



<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>LogIn</title>
</head>
<body>
<?php
if (isset($_SESSION["cod_u"])) {
//Entonces ya hay una sesión iniciada.
    header("location: carrito.php");
} else { ?>
    <form action="actions/sesiones/begin_session.php" method="post">
        <table>
            <tr>
                <td><label for="name">Ingrese su nombre</label></td>
                <td><input type="text" name="user_name"/></td>
            </tr>
            <tr>
                <td><label for="password">Ingrese su contraseña</label></td>
                <td><input type="password" name="user_password"/></td>
            </tr>
        </table>
        <button>LOGIN</button>
    </form>
    <br/><br/>
    <a href="index.php">Ir a inicio</a>

<?php
} ?>

</body>
</html>