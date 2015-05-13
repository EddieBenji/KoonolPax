<?php
/**
 * Created by PhpStorm.
 * User: USER
 * Date: 13/05/2015
 * Time: 10:56 AM
 */

include 'DB/global.php';

$id = $_GET['id'];
$find_query = "SELECT * FROM `interprete` WHERE `cod_i`= $id";

$artista = ejecutar_query($find_query)->fetch_array();