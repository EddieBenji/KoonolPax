<?php
/**
 * Created by PhpStorm.
 * User: USER
 * Date: 18/05/2015
 * Time: 02:21 PM
 */

session_start();

session_destroy();

header("Location: ../../index.php");