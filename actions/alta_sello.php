<?php
/**
 * Created by PhpStorm.
 * User: USER
 * Date: 12/05/2015
 * Time: 03:41 PM
 */

//incluye el dao con la información de la BD:
include 'DB/global.php';

$nombre_sello = $_POST["nombre_sello"];

$sentencia_sql = "INSERT INTO sello (`desc_s`) VALUES ('$nombre_sello')";

ejecutar_query($sentencia_sql);

header('location: ../index.php');