<?php
/**
 * Created by PhpStorm.
 * User: USER
 * Date: 13/05/2015
 * Time: 09:53 AM
 */

include 'DB/global.php';

$categorias_query = "select * from categoria";

$categorias = ejecutar_query($categorias_query);