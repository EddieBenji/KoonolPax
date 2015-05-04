<?php
/**
 * Created by PhpStorm.
 * User: romarin
 * Date: 4/05/15
 * Time: 03:23 PM
 */

include 'DB/global.php';

$discs_query = "select * from disco";
$artists_query = "select * from interprete";
$categories_query = "select * from categoria";

$discos = ejecutar_query($discs_query);
$artistas = ejecutar_query($artists_query);
$categorias = ejecutar_query($categories_query);