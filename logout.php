<?php 
	ini_set('display_errors', 0);
	ini_set('max_execution_time',0);

	date_default_timezone_set("Asia/Jakarta");

	session_start();
	session_destroy();
	include "db/db.php";

	unset($_SESSION['nip']);
    unset($_SESSION['nama_user']);
    unset($_SESSION['role']);
    unset($_SESSION['image_url']);
    unset($_SESSION['password']);

	header('Location: index.php'); 
?>

