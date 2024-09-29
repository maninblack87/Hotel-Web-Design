<?php

	$title="그랜드힐스턴호텔 - 스위트룸";
	
	session_start();
	
	include __DIR__ . '/includes/dbconnection.php';
	
	ob_start();
	
	include __DIR__ . '/templates/sub1_1.html.php';
		
	$output = ob_get_clean();
	
	include __DIR__ . '/templates/layout.html.php';

?>