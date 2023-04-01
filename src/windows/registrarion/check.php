<?php
	$reg_login = filter_var(trim($_POST['reg_login']),
	FILTER_SANITIZE_STRING);
	$reg_login = filter_var(trim($_POST['reg_name']),
	FILTER_SANITIZE_STRING);
	$reg_login = filter_var(trim($_POST['reg_pass']),
	FILTER_SANITIZE_STRING);

	$mysql = new mysqli('stom/', 'root','', 'users stom');
	$mysql->query("INSERT INTO 'users' (`login`, `pass`, `name`) VALUES('$reg_login', '$reg_pass', '$reg_name')");
	$mysql->close();

	header('Location: /');


	


?>