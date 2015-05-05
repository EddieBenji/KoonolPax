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


//$sentencia_sql = "SELECT * FROM (disco INNER JOIN categoria INNER JOIN interprete) WHERE (interprete.cod_i = disco.cod_i)";
//SELECT disco.nom_d, disco.cod_i, disco.cod_cat, disco.cod_s, disco.precio_d FROM disco
$sentencia_sql = "SELECT disco.nom_d, interprete.desc_i, categoria.desc_cat, sello.desc_s, disco.precio_d FROM (disco INNER JOIN sello INNER JOIN categoria INNER JOIN interprete) WHERE (disco.cod_d = interprete.cod_i AND disco.cod_s = sello.cod_S) AND  disco.nom_d LIKE '%".$key_word."%'";

$resultados = ejecutar_query($sentencia_sql);

