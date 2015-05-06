<?php
/**
 * Created by PhpStorm.
 * User: Lalo
 * Date: 03/05/2015
 * Time: 12:58 PM
 */

//incluye el dao con la información de la BD:
include 'DB/global.php';

session_start();


$nick_user = $_POST["user_name"];
$password_user = $_POST["user_password"];



$sentencia_sql = "SELECT * FROM usuario where nick_u='$nick_user'";
$usuario = ejecutar_query($sentencia_sql);

if ($usuario->num_rows > 0) {
    $row = $usuario->fetch_assoc();

    //seteamos las variables de sesión:
    $_SESSION["cod_u"] = $row["cod_u"];
    $_SESSION["nick_u"] = $row["nick_u"];
    $_SESSION["pass_u"] = $row["pass_u"];

    //Redirigimos a index:
    header('location: ../index.html');
} else {
    echo "No hay usuarios con ese nombre";

}





