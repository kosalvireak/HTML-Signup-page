<?php

    $email = $_POST['email'];
    $password = $_POST['password'];
<<<<<<< HEAD

    $conn = new mysqli('localhost','root','','test');
=======
	$conn = new mysqli('localhost','root','','test');
>>>>>>> 68fe71326bc0040f33bd66e531410c228551683c
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
<<<<<<< HEAD
		$stmt = $conn->prepare("insert into registration(email, password) values(?, ?)");
		$stmt->bind_param("ss",$email, $password);
		$stmt -> $execute();
=======
		$stmt = $conn->prepare("insert into registration(Email, Password) values(?, ?)");
		$stmt->bind_param("ss",$Email, $Password);
		$execval = $stmt->execute();
		echo $execval;
>>>>>>> 68fe71326bc0040f33bd66e531410c228551683c
		echo "Registration successfully...";
		$stmt->close();
		$conn->close();
	}
<<<<<<< HEAD
?>
=======
?>
>>>>>>> 68fe71326bc0040f33bd66e531410c228551683c
