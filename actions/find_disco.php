<?php
/**
 * Created by PhpStorm.
 * User: USER
 * Date: 13/05/2015
 * Time: 10:21 AM
 */

include 'DB/global.php';

$id = $_GET['id_disco'];
$find_query = "SELECT * FROM disco WHERE cod_d= $id";

$disco = ejecutar_query($find_query)->fetch_array();

$artists_query = "select * from interprete";
$categories_query = "select * from categoria";
$sellos_query = "select * from sello";

$artistas = ejecutar_query($artists_query);
$categorias = ejecutar_query($categories_query);
$sellos = ejecutar_query($sellos_query);
