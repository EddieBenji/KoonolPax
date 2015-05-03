<?php
/**
 * Created by PhpStorm.
 * User: Lalo
 * Date: 03/05/2015
 * Time: 02:08 PM
 */


//incluye el dao con la información de la BD:
include 'DB/global.php';


$key_word = $_GET["key_word"];
$cd_name = $_GET["cd_name"];
$artist = $_GET["artist"];
$category = $_GET["category"];


//$sentencia_sql = "SELECT * FROM (disco JOIN categoria JOIN interprete) WHERE (interprete.cod_i = disco.cod_i)";


