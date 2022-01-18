

<!DOCTYPE html>
<html>
<head>
<title>Page Title</title>
</head>
<body>

<h1>This is a Heading</h1>
<p>This is a paragraph.</p>
<?php
$con=mysqli_connect('localhost', 'root', '','techsens');
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$result = mysqli_query($con,"SELECT * FROM faq");

echo "<table border='1'>
<tr>
<th>message faq</th>

</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['message'] . "</td>";

echo "</tr>";
}
echo "</table>";

mysqli_close($con);
?>
</body>
</html>