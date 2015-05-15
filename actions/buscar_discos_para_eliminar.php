<?php
/**
 * Created by PhpStorm.
 * User: lalo
 * Date: 15/05/15
 * Time: 03:43 PM
 */

include 'DB/global.php';


$sql = "SELECT DISTINCT disco.cod_d, disco.nom_d, disco.precio_d, interprete.desc_i,categoria.desc_cat, sello.desc_s FROM (disco INNER JOIN interprete INNER JOIN categoria INNER JOIN sello) GROUP BY( disco.nom_d)";


$results = ejecutar_query($sql);



