<?php
/**
 * Created by PhpStorm.
 * User: USER
 * Date: 13/05/2015
 * Time: 10:57 AM
 */

//incluye el dao con la información de la BD:
include 'DB/global.php';

$id_sello = $_POST["id_sello"];
$nombre_sello = $_POST["nombre_sello"];

$sentencia_sql = "UPDATE sello SET desc_s = '$nombre_sello' WHERE cod_s = $id_sello";

ejecutar_query($sentencia_sql);

header('location: ../index.php');