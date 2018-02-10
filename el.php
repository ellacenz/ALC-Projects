<?php 
$con = mysqli_connect('localhost', 'root', '', 'url_db');

if (!$con){
	die("Failed to connect");
}


$url ="";
$id = 0;
$msg = "";

if (isset($_POST['url'])) {
	$link = $_POST['url'];
	$nic = "kj".rand(0, 100);

	$query = " INSERT INTO urls (shortened, origin_url) VALUES('".$nic."', '".$link."') ";
	//die("$query");
	mysqli_query($con, $query);

	$id = mysqli_insert_id($con);
	$msg ="Your shortened url is localhost\url\index.php?id=". $id;
}

if (isset($_GET['id'])) {
$origin_url = "";
$msg = "Error: 404";
$id = $_GET['id'];
$query = "SELECT origin_url FROM urls where id = $id";
$exec = mysqli_query($con, $query);
while ($result = mysqli_fetch_array($exec)) {
	
	$origin_url = $result['origin_url'];
}
	
	header("location: ".$origin_url);

	}
	

 ?>

<?php include ('includes/header.php'); ?>

	<div class="main_wrapper" style="background-image: url(image/header_image.jpg); height: 600px;">
		<div class="shorten">
		<span><h1>Welcome</h1></span><br/>
		<span style="color: red"><?php echo $msg; ?></span>

	<section>
		<form action="index.php" method="post" >
			<input type="url" name="url" placeholder="Enter URL" autocomplete="off" style="height: 30px; width: 350px;">
		<input type="submit" name="shorten" value="Shorten URL" style="height: 35px;">
	</section>
	</div>
</div>

<?php include('includes/footer.php'); ?>


