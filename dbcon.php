<?php

	$con = mysqli_connect('rdbms.mysql.database.azure.com','shahshan','Hello@123','lms');

	if($con == false){
		echo "Connection not successful";
	}
	
	mysqli_set_charset($con,"utf8");
?>
