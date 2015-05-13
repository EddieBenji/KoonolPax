<?php
/**
 * Created by PhpStorm.
 * User: USER
 * Date: 13/05/2015
 * Time: 10:21 AM
 */

include 'DB/global.php';

$id = $_GET['id'];
$find_query = "SELECT * FROM `categoria` WHERE `cod_cat`= $id";

$categoria = ejecutar_query($find_query)->fetch_array();

