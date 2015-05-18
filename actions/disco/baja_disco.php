<?php
include '../DB/global.php';


$delete_query = "DELETE FROM disco WHERE cod_d =";

if (!empty($_POST['options'])) {
    $options = $_POST['options'];

    foreach ($options as $selected) {
        ejecutar_query($delete_query . $selected);

    }

}

header('location: ../../index.php');
