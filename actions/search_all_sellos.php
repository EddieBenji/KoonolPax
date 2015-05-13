<?php
/**
 * Created by PhpStorm.
 * User: USER
 * Date: 13/05/2015
 * Time: 09:59 AM
 */

include 'DB/global.php';

$sellos_query = "select * from sello";

$sellos = ejecutar_query($sellos_query);