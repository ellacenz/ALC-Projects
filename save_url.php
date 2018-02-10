<?php 

$con = mysqli_connect('localhost', 'root', '', 'url_db');

if ($con) {
	echo "";
}else{
	echo "Failed to connect";
}


$nic = "ghdjkn";
$link = $_POST['link'];


$query = " INSERT INTO urls ('shortened', 'origin_url') VALUES('".$nic."', '".$link."') ";
$exec = mysqli_query($con, $query);



//echo $l0ink;
?>


<?php
define("MYSQL_HOST", "localhost");
define("MYSQL_USER", "root");
define("MYSQL_PASS", "");
define("BASEPATH", "https://localhost/index");