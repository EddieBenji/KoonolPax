<?php
include '../DB/global.php';


session_start();


if (isset($_SESSION['admin'])) {

    $id_disco = $_POST['id_disco'];

    $nombre = $_POST['nombre'];
    $cod_i = $_POST['interprete'];
    $cant = $_POST['cantidad'];
    $cod_s = $_POST['sello'];
    $precio = $_POST['precio'];
    $fecha = $_POST['fecha'];
    $categoria = $_POST['categoria'];


    $query = "UPDATE disco SET nom_d='$nombre', cod_i=$cod_i, cant_d=$cant, cod_s=$cod_s, precio_d=$precio, fec_d='$fecha', cod_cat=$categoria WHERE cod_d=$id_disco)";


    ejecutar_query($query);

}
header('location: ../../index.php');
