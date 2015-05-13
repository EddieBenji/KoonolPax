<?php
/**
 * Created by PhpStorm.
 * User: USER
 * Date: 13/05/2015
 * Time: 09:07 AM
 */

include 'DB/global.php';

$artists_query = "select * from interprete";

$artistas = ejecutar_query($artists_query);
