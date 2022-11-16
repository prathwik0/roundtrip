<?php
	$name = $_POST['name'];
	$area = $_POST['area'];
	$number = $_POST['number'];
	$member = $_POST['member'];
	$gender = $_POST['gender'];
	$cat2 = $_POST['cat2'];
	$cat3 = $_POST['cat3'];

	// Database connection
	$conn = new mysqli('localhost','root','','test');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into dataentry(name, area, number, member, gender, cat2, cat3) values(?, ?, ?, ?, ?, ?, ?)");
		$stmt->bind_param("ssiisss", $name, $area, $number, $member, $gender, $cat2, $cat3);
		$execval = $stmt->execute();
		echo $execval;
		echo "\nDATA ENTRY sucessful!!";
		$stmt->close();
		$conn->close();
	}
?>