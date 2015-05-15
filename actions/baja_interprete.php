<?php
/**
 * Created by PhpStorm.
 * User: USER
 * Date: 13/05/2015
 * Time: 09:24 AM
 */
include 'DB/global.php';

$delete_query = "DELETE FROM interprete WHERE cod_i =";

if (!empty($_POST['options'])) {
    $options = $_POST['options'];

    foreach ($options as $selected) {
        ejecutar_query($delete_query . $selected);

    }

}

header('location: ../index.php');

