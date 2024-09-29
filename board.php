<?php

	$title="그랜드힐스턴호텔 - 게시판";
	
	session_start();
	
	include __DIR__ . '/includes/dbconnection.php';
	include __DIR__ . '/includes/dbfunction.php';
	
	$lists = findAll($pdo);
	
	ob_start();
	
	include __DIR__ . '/templates/board.html.php';
		
	$output = ob_get_clean();
	
	include __DIR__ . '/templates/layout.html.php';

?>