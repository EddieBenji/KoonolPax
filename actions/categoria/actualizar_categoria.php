<?php
/**
 * Created by PhpStorm.
 * User: USER
 * Date: 13/05/2015
 * Time: 10:46 AM
 */

//incluye el dao con la información de la BD:
include '../DB/global.php';

$id_categoria = $_POST["id_categoria"];
$nombre_categoria = $_POST["nombre_categoria"];

$sentencia_sql = "UPDATE categoria SET desc_cat = '$nombre_categoria' WHERE cod_cat = $id_categoria";

ejecutar_query($sentencia_sql);
header('location: ../../index.php');
