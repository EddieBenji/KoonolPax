<?php
include 'DB/global.php';


session_start();


if(isset($_SESSION['u_admin'])){

$id_disco = $_POST['id_disco'];



$query = "DELETE FROM disco WHERE cod_d=$id_disco)";


ejecutar_query($query);

}else {
	header('location: ../index.html');
}
