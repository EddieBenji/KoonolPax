<?php
/**
 * Created by PhpStorm.
 * User: USER
 * Date: 13/05/2015
 * Time: 10:55 AM
 */

include 'DB/global.php';

$id = $_GET['id'];
$find_query = "SELECT * FROM `sello` WHERE `cod_s`= $id";

$sello = ejecutar_query($find_query)->fetch_array();