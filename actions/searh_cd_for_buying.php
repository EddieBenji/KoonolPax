<?php
/**
 * Created by PhpStorm.
 * User: Lalo
 * Date: 05/05/2015
 * Time: 04:31 PM
 */

include 'DB/global.php';

$cd_id =  $_GET['cod_d'];
$artist_id = $_GET['cod_i'];

 $query = "SELECT disco.*, interprete.* FROM (disco INNER JOIN interprete)
 WHERE (disco.cod_d = interprete.cod_i) AND disco.cod_d =$cd_id AND interprete.cod_i=$artist_id";

$row = ejecutar_query($query);
$cd = $row->fetch_assoc();
