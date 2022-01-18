<?php
$servername="localhost";
$username="root";
$password="";
$database_name="techsens";

$conn = mysqli_connect($servername,$username,$password,$database_name);

//check the connection
if(!$conn)
{
	die("Connection failed:" .mysql_connect_error());

}

if(isset($_POST['Submit']))
{
	$Society = $_POST['Society'];
	$FirstName = $_POST['FirstName'];
	$LastName = $_POST['LastName'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$Commentaire = $_POST['Commentaire'];


	$sql_query = "INSERT INTO contacts_details (Society,FirstName,LastName,email,phone,Commentaire) 
	VALUES ('$Society','$FirstName','$LastName','$email','$phone','$Commentaire')";

	if(mysqli_query($conn, $sql_query))
	{
		echo "New details entry inserted successfully!";
	}
	else{
		echo "Error:" . $sql . "" . mysqli_error($conn);
	}
	mysqli_close($conn);
}
?>