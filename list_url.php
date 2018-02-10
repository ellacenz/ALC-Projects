<?php 

$con = mysqli_connect('localhost', 'root', '', 'url_db');

if ($con) {
	echo "";
}else{
	echo "Failed to connect";
}

$query = "SELECT * FROM urls";
$exec = mysqli_query($con, $query);


while ($result = mysqli_fetch_array($exec)) {
	echo $result['origin_url'];
	echo "<br>";
}

//$link = $_POST['link'];
//echo $link;
?>