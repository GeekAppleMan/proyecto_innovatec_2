<?php
	$mysqli = new mysqli("localhost", "Helmer", "helangaca26", "db_innovatec");

	if(mysqli_connect_errno()){
		echo 'Conexion Fallida : ', mysqli_connect_error();
		exit();
	}
?>