<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "app";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection

if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}
if (isset($_POST['submit'])) {
	$product = $_POST['product'];
	$seller = $_POST['seller'];
	$price = $_POST['price'];
	$quantity = $_POST['quantity'];
	$gst = $_POST['gst'];
	$address = $_POST['address'];
	$email = $_POST['email'];
	$mobilenumber = $_POST['mobilenumber'];

	$filename = $_FILES["uploadfile"]["name"];
	$tempname = $_FILES["uploadfile"]["tmp_name"];
	$folder = "./image/" . $filename;

	$sql = "INSERT INTO MyGuests (product, seller, price, quantity, gst, address, email, mobilenumber, filename)
	 VALUES ('$product','$seller','$price','$quantity','$gst','$address','$email','$mobilenumber', '$filename')";
	// var_dump($sql);
	// echo"<pre>";
	// print_r($sql);
	// echo json_encode($sql);
	// echo"</pre>";


	if (mysqli_query($conn, $sql)) {

		echo "<script> alert('New record created successfully !');window.location.href='retrieve.php';</script>";
	} else {
		echo "Error: " . $sql . "
 " . mysqli_error($conn);
	}
	if (move_uploaded_file($tempname, $folder)) {
		echo "<h3> Image uploaded successfully!</h3>";
	} else {
		echo "<h3> Failed to upload image!</h3>";
	}
	mysqli_close($conn);
}
