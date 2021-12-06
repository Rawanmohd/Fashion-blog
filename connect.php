<?php
	$guestName = $_POST['guestName'];
	$brand = $_POST['brand'];
	$email = $_POST['email'];


	// Database connection
	$conn = new mysqli('localhost','root','','test');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into registration(guestName, brand, email ) values(?, ?, ?)");
		$stmt->bind_param("sss", $guestName , $brand, $email);
		$execval = $stmt->execute();
		echo $execval;
		echo "  Thanks for your opinion  💗";
		$stmt->close();
		$conn->close();
	}
?>