<?php


include 'DB/global.php';
session_start();

$disc_id = $_POST["disc_id"];
$disc_qty = $_POST["disc_qty"];
$user_id = $_SESSION["cod_u"];
$date = date("Y-m-d H:i:s");


$queryPedidoM = "INSERT INTO pedido_m(cod_u, fec_p, fin_p) VALUES($user_id, '$date', 's')";

ejecutar_query($queryPedidoM);

$queryBuscarPedidoM = "SELECT * FROM pedido_m where fec_p='$date'";

$pedido = ejecutar_query($queryBuscarPedidoM);
$row = $pedido->fetch_assoc();
$ped_id = $row["cod_p"];

$queryPedidoD = "INSERT INTO pedido_d(cod_p, cod_d, cant_d) VALUES($ped_id, $disc_id, $disc_qty)";
ejecutar_query($queryPedidoD);


header('location: ../index.html');

