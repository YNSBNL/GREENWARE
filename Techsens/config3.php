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

	if ($_SERVER['REQUEST_METHOD'] == 'POST' && isSet($_POST['delete'])) {
			$conn1 = mysqli_connect('localhost', 'root', '','techsens') or die("Connection failed: " . mysqli_connect_error());
			if (isSet($_POST['user'])) {
				$user1 = $_POST['user'];
				
				
	 
				$sql1 = "DELETE FROM users WHERE  (username =$user1)";
	 
				$query1 = mysqli_query($conn1,$sql1);
				if ($query1) {
					echo 'Utilisateur  supprimé ';
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

?>