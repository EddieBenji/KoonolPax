<?php
include '../DB/global.php';


session_start();


if (isset($_SESSION['admin'])) {

    $nombre = $_POST['nombre'];
    $cod_i = $_POST['interprete'];
    $cant = $_POST['cantidad'];
    $cod_s = $_POST['sello'];
    $precio = $_POST['precio'];
    $fecha = $_POST['fecha'];
    $categoria = $_POST['categoria'];


    $query = "INSERT INTO disco(nom_d, cod_i, cant_d, cod_s, precio_d, fec_d, cod_cat) VALUES('$nombre', $cod_i, $cant, $cod_s, $precio, '$fecha', $categoria)";
    ejecutar_query($query);

}
header('location: ../../verdiscos.php');