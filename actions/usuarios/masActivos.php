<?php
/**
 * Created by PhpStorm.
 * User: lalo
 * Date: 13/05/15
 * Time: 12:03 PM
 */

//SELECT DISTINCT pedido_m.*, pedido_d.*, usuario.* FROM(pedido_d INNER JOIN pedido_m INNER JOIN usuario) WHERE(pedido_d.cant_d>0)
include '../DB/global.php';


$sentencia_sql = "SELECT DISTINCT pedido_m.*, pedido_d.*, usuario.* FROM(pedido_d INNER JOIN pedido_m INNER JOIN usuario) WHERE(pedido_d.cant_d>0)";

$sello = ejecutar_query($sentencia_sql)->fetch_array();


