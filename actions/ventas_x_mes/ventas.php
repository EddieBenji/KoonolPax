<?php
/**
 * Created by PhpStorm.
 * User: equipo1
 * Date: 19/05/2015
 * Time: 02:57 PM
 */

include '../DB/global.php';



$sql = "SELECT *, count(*) AS pedidos_realizados FROM pedido_m GROUP BY pedido_m.fec_p ORDER BY pedidos_realizados DESC LIMIT 5";

$ventas_del_mes = ejecutar_query($sql);
