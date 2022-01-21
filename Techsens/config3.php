<?php
	if ($_SERVER['REQUEST_METHOD'] == 'POST' && isSet($_POST['sentForm'])) {
		$conn = mysqli_connect('localhost', 'root', '','techsens') or die("Connection failed: " . mysqli_connect_error());
		if (isSet($_POST['user']) && isSet($_POST['pass'])) {
			$user = $_POST['user'];
			$pass = $_POST['pass'];
 
			$sql = "INSERT INTO `users` (`username`,`password`) VALUES ('$user', '$pass')";
 
			$query = mysqli_query($conn,$sql);
			if ($query) {
				echo 'Data Successfully Saved!';
			} else {
				echo "An error occured while save the data.";
			}
		}
	}

	if ($_SERVER['REQUEST_METHOD'] == 'GET' && isSet($_GET['delete'])) {
		$conn4 = mysqli_connect('localhost', 'root', '','techsens') or die("Connection failed: " . mysqli_connect_error());
		if (isSet($_GET['user'])) {
			$user4 = $_GET['user'];
			
 
			$sql4 = "DELETE FROM users WHERE username = '$user4'";
 
			$query4 = mysqli_query($conn4,$sql4);
			if ($query4) {
				echo 'Data Successfully Saved!';
			} else {
				echo "An error occured while save the data.";
			}
		}
	}


	if ($_SERVER['REQUEST_METHOD'] == 'POST' && isSet($_POST['addfaq'])) {
		$conn2 = mysqli_connect('localhost', 'root', '','techsens') or die("Connection failed: " . mysqli_connect_error());
		if (isSet($_POST['message'])) {
			$message1 = $_POST['message'];
			
 
			$sql2 = "INSERT INTO `faq` (`message`) VALUES ('$message1')";
 
			$query2 = mysqli_query($conn2,$sql2);
			if ($query2) {
				echo 'Data Successfully Saved!';
			} else {
				echo "An error occured while save the data.";
			}
		}
	}

	if ($_SERVER['REQUEST_METHOD'] == 'POST' && isSet($_POST['deletefaq'])) {
		$conn5 = mysqli_connect('localhost', 'root', '','techsens') or die("Connection failed: " . mysqli_connect_error());
		if (isSet($_POST['message'])) {
			$message5 = $_POST['message'];
			
 
			$sql5 = "DELETE FROM `faq` WHERE 'message' = '$message5'";
 
			$query5 = mysqli_query($conn5,$sql5);
			if ($query5) {
				echo 'Data Successfully Saved!';
			} else {
				echo "An error occured while save the data.";
			}
		}
	}



		


?>