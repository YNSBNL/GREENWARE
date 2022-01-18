<?php
	if ($_SERVER['REQUEST_METHOD'] == 'POST' && isSet($_POST['sentForm'])) {
		$conn = mysqli_connect('localhost', 'root', '','techsens2') or die("Connection failed: " . mysqli_connect_error());
		if (isSet($_POST['user']) && isSet($_POST['pass'])) {
			$user = $_POST['user'];
			$pass = $_POST['pass'];
 
			$sql = "INSERT INTO `addutilisateur` (`username`,`password`) VALUES ('$user', '$pass')";
 
			$query = mysqli_query($conn,$sql);
			if ($query) {
				echo 'Data Successfully Saved!';
			} else {
				echo "An error occured while save the data.";
			}
		}
	}
?>