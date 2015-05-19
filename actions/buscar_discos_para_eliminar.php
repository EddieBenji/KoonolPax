<?php
/**
 * Created by PhpStorm.
 * User: lalo
 * Date: 15/05/15
 * Time: 03:43 PM
 */

include 'DB/global.php';


$sql = "SELECT disco.cod_d, disco.nom_d, disco.precio_d, interprete.desc_i,categoria.desc_cat, sello.desc_s FROM (disco INNER JOIN interprete ON disco.cod_i=interprete.cod_i INNER JOIN categoria ON disco.cod_cat=categoria.cod_cat INNER JOIN sello ON disco.cod_s=sello.cod_s) GROUP BY( disco.nom_d)";
$results = ejecutar_query($sql);



