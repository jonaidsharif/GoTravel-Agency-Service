<?php
	$name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $number = $_POST['number'];
    $location = $_POST['location'];
    $arrivals = $_POST['arrivals'];
    $leaving = $_POST['leaving'];
    $address = $_POST['address'];
	// Database connection
	$conn = new mysqli('localhost','root','','booknow');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into book(name, email, password, number, location, arrivals, leaving, address) values(?, ?, ?, ?, ?, ?, ?, ?)");
		$stmt->bind_param("sssissss", $name, $email , $password ,$number , $location , $arrivals , $leaving , $address);
		$execval = $stmt->execute();
		echo "Booking successful!";
		$stmt->close();
		$conn->close();
	}
?>