<?php
include '../DB/global.php';


session_start();


if (isset($_SESSION['admin'])) {

    $id_disco = $_GET['id_disco'];


    $query = "DELETE FROM disco WHERE (cod_d=$id_disco)";




    ejecutar_query($query);

}

header('location: ../../index.php');
