<?php
/**
 * Created by PhpStorm.
 * User: Lalo
 * Date: 19/05/2015
 * Time: 02:57 PM
 */

include '../DB/global.php';



$sql = "SELECT monthname(fec_p), count(*) as no_pedidos FROM pedido_m GROUP BY monthname(fec_p)";

$ventas_del_mes = ejecutar_query($sql);
