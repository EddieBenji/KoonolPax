<?php
/**
 * Created by PhpStorm.
 * User: USER
 * Date: 13/05/2015
 * Time: 08:58 AM
 */

//incluye el dao con la información de la BD:
include '../DB/global.php';

$nombre_interprete = $_POST["nombre_interprete"];

$sentencia_sql = "INSERT INTO interprete (`desc_i`) VALUES ('$nombre_interprete')";
ejecutar_query($sentencia_sql);
header('location: ../../index.php');
