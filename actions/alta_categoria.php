<?php
/**
 * Created by PhpStorm.
 * User: USER
 * Date: 12/05/2015
 * Time: 03:41 PM
 */

//incluye el dao con la información de la BD:
include 'DB/global.php';

$nombre_categoria = $_POST["nombre_categoria"];

$sentencia_sql = "INSERT INTO `koonolpax`.`categoria` (`desc_cat`) VALUES ('$nombre_categoria')";

ejecutar_query($sentencia_sql);

header('location: ../index.php');