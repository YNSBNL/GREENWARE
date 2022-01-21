<?php
	if ($_SERVER['REQUEST_METHOD'] == 'POST' && isSet($_POST['sentForm'])) {
		$conn = mysqli_connect('localhost', 'root', '','techsens') or die("Connection failed: " . mysqli_connect_error());
		if (isSet($_POST['user']) && isSet($_POST['pass']) && isSet($_POST['email']) && isSet($_POST['prenom']) && isSet($_POST['nom']) && isSet($_POST['telephone'])) {
			$user = $_POST['user'];
			$pass = $_POST['pass'];
			$email = $_POST['email'];
			$prenom = $_POST['prenom'];
 			$nom = $_POST['nom'];
 			$telephone = $_POST['telephone'];
 
 

 
			$sql = "INSERT INTO `users` (`username`,`password`,`email`,`prenom`,`nom`,`telephone`) VALUES ('$user', '$pass','$email','$prenom','$nom','$telephone')";
 
			$query = mysqli_query($conn,$sql);
			if ($query) {
				echo 'Data Successfully Saved!';
			} else {
				echo "An error occured while save the data.";
			}
		}
	}

	if ($_SERVER['REQUEST_METHOD'] == 'POST' && isSet($_POST['delete'])) {
		$conn4 = mysqli_connect('localhost', 'root', '','techsens') or die("Connection failed: " . mysqli_connect_error());
		if (isSet($_POST['user'])) {
			$user4 = $_POST['user'];
			
 
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
		if (isSet($_POST['message1'])) {
			$message1 = $_POST['message1'];
			
 
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
		$conn3 = mysqli_connect('localhost', 'root', '','techsens') or die("Connection failed: " . mysqli_connect_error());
		if (isSet($_POST['message'])) {
			$message3 = $_POST['message'];
			
 
			$sql3 = "DELETE FROM faq WHERE message = '$message3'";
 
			$query3 = mysqli_query($conn3,$sql3);
			if ($query3) {
				echo 'Data Successfully Saved!';
			} else {
				echo "An error occured while save the data.";
			}
		}
	}



		


?>