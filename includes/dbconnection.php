<?php

	$pdo = new PDO('mysql:host=localhost; dbname=hotel; charset=utf8;','root','1234');
	$pdo -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

?>