<?php
/**
 * Created by PhpStorm.
 * User: romarinpc
 * Date: 5/15/15
 * Time: 6:05 PM
 */

//incluye el dao con la información de la BD:
include 'DB/global.php';

$sentencia_sql = "SELECT *, count(*) AS pedidos_realizados FROM pedido_m JOIN usuario ON pedido_m.cod_u=usuario.cod_u GROUP BY pedido_m.cod_u";

$usuarios_actvios = ejecutar_query($sentencia_sql);