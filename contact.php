<?php
	$name = $_POST['name'];
    $email = $_POST['email'];
    $number = $_POST['number'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
	// Database connection
	$conn = new mysqli('localhost','root','','booknow');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into CONTACT(name, email, number, subject, message) values(?, ?, ?, ?, ?)");
		$stmt->bind_param("ssiss", $name, $email , $number , $subject, $message);
		$execval = $stmt->execute();
		echo "Thank you for contacting!";
		$stmt->close();
		$conn->close();
	}
?>