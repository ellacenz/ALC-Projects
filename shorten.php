<?php 
	session_start();
	require_once 'shortener.php';

	$s = new shortener;

	if(isset($_POST['url'])) {
	 $url = $_POST['url'];

	 if($code = $s->makeCode($url)) {
	 	echo $code;
		 }
		 else{
		 	//there was a problem
		 }
	}

 ?>