<?php
/**
 * Created by PhpStorm.
 * User: USER
 * Date: 13/05/2015
 * Time: 10:57 AM
 */

//incluye el dao con la información de la BD:
include 'DB/global.php';

$id_interprete = $_POST["id_interprete"];
$nombre_interprete = $_POST["nombre_interprete"];

$sentencia_sql = "UPDATE interprete SET desc_i = '$nombre_interprete' WHERE cod_i = $id_interprete";

ejecutar_query($sentencia_sql);

header('location: ../index.php');