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

if ($cd_name == 0 || $artist == 0 || $category == 0) {
    $sentencia_sql = "SELECT disco.*, interprete.*, categoria.desc_cat, sello.desc_s,
 disco.precio_d FROM (disco INNER JOIN sello INNER JOIN categoria INNER JOIN interprete)
 WHERE (disco.cod_d = interprete.cod_i AND disco.cod_s = sello.cod_S) AND  disco.nom_d LIKE '%" . $key_word . "%'";
} else {
    $sentencia_sql = "SELECT disco.*, interprete.*, categoria.desc_cat, sello.desc_s,
 disco.precio_d FROM (disco INNER JOIN sello INNER JOIN categoria INNER JOIN interprete)
 WHERE (disco.cod_d = interprete.cod_i AND disco.cod_s = sello.cod_S) AND  disco.nom_d LIKE '%" . $key_word . "%'
  AND categoria.cod_cat=$category AND interprete.cod_i=$artist";
}



$resultados = ejecutar_query($sentencia_sql);

