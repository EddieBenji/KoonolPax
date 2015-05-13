<?php
include 'DB/global.php';


session_start();


if(isset($_SESSION['u_admin'])){

$query = "SELECT * FROM disco";


$resultados = ejecutar_query($query);

}else {
	header('location: ../index.html');
}
