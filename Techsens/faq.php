<!DOCTYPE html>
<html>
<head>
    <title>Techsens</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <link href="css-FAQ.css" rel="stylesheet">
</head>

<body>
<?php
         if(!isset($_SESSION)){
            session_start();
         }
         if (isset($_SESSION['connected']) && $_SESSION['connected'] == true){
            include("./Composants/headerconnected.php");
                }
        else {include("./Composants/headerdeconnected.php");
    }
    ?>
	<h1 class="h1-faq"> Les réponses à vos questions fréquentes. </h1>

	<div class="container-faq">

		<div class="questions">
			<div class="pannel-faq">
				<h2 class="h2-faq"> question 1. </h2>
				<img class="img-faq" src="image/plus.png" alt="animation">
			</div>
			<div class="toggle-pannel">
				<h4 class="h4-faq">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi, ad?</h4>
				<p class="p-faq"> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque ratione hic excepturi 
                    sunt commodi suscipit, ea eum, nobis unde tenetur enim aliquid. Fugit adipisci nisi unde
                    molestiae ratione corrupti minus eaque provident officiis deleniti ullam explicabo quae 
                    voluptates, minima at saepe dignissimos ad? Aperiam consectetur non nesciunt impedit rerum earum! </p>
			</div>
		</div>

<p class="trait">----------------------------------------------------------</p>
		<div class="questions">
			<div class="pannel-faq">
				<h2 class="h2-faq"> question 2. </h2>
				<img class="img-faq" src="image/plus.png" alt="animation">
			</div>
			<div class="toggle-pannel">
				<h4 class="h4-faq">On est la, ta vu!.</h4>
				<p class="p-faq"> bonsoir lyon j'espère que vous allez bien,  </p>
			</div>
		</div>

<p class="trait">----------------------------------------------------------</p>

		<div class="questions">
			<div class="pannel-faq">
				<h2 class="h2-faq"> question 3. </h2>
				<img class="img-faq" src="image/plus.png" alt="animation">
			</div>
			<div class="toggle-pannel">
				<h4 class="h4-faq">On est la, ta vu!.</h4>
				<p class="p-faq"> bonsoir lyon j'espère que vous allez bien, moi ça vas super tranquille pépouz
					bonsoir lyon j'espère que vous allez bien, moi ça vas super tranquille pépouz
					bonsoir lyon j'espère que vous allez bien, moi ça vas super tranquille pépouz
					bonsoir lyon j'espère que vous allez bien, moi ça vas super tranquille pépouz
					bonsoir lyon j'espère que vous allez bien, moi ça vas super tranquille pépouz
					bonsoir lyon j'espère que vous allez bien, moi ça vas super tranquille pépouz </p>
			</div>
		</div>

<p class="trait">----------------------------------------------------------</p>

		<div class="questions">
			<div class="pannel-faq">
				<h2 class="h2-faq"> question 4. </h2>
				<img class="img-faq" src="image/plus.png" alt="animation">
			</div>
			<div class="toggle-pannel">
				<h4 class="h4-faq">On est la, ta vu!.</h4>
				<p class="p-faq"> bonsoir lyon j'espère que vous allez bien, moi ça vas super tranquille pépouz
					bonsoir lyon j'espère que vous allez bien, moi ça vas super tranquille pépouz
					bonsoir lyon j'espère que vous allez bien, moi ça vas super tranquille pépouz
					bonsoir lyon j'espère que vous allez bien, moi ça vas super tranquille pépouz </p>
			</div>

		</div>
	</div>
	<br>
	<br>
	<br>
	<br>

<center>
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
</center>
<br>
<br>
<br>
<br><br>
<br>
	<div class="footer">
        <div class="foot">Techsens est une société cherchant à développer des solutions en accord avec le développement durable.</div>
        <img src="logoo.png" alt="photo du logo" />
        <br>
        <div class="content">
            <div class="barre">
            <p>---------------------------------------------------</p></div>
            <div class="photologo">
            <div class="logofb">
                <a href="https://www.facebook.com/profile.php?id=100073322512659"> <img src="fb.png" alt="logo fb" /> </p></a></div>
            <div class="logoinsta">
                <a href="https://www.instagram.com/"> <img src="insta.png" alt="logo insta" /> </a></div>
            <div class="logotwitter">
                <a href="https://twitter.com/Techsens_"> <img src="twitter.png" alt="logo twitter" /></a></div>
            <div class="logolinkedin">
                <a href="https://www.linkedin.com/in/techsens-a9887b222"> <img src="linkedin.png" alt="logo linkedin" /> </a></div>
        </div></div>
            <div class="end">
                    <label for="end"> 
                        <a href="cgu.html"> Mentions légales et politique de cofidentialité</a></label></div>
    
    <div id="scrollUp">
            <a href="#haut" class="top">
                <img src="Haut.png" alt="photo bouton" class="img10" /></a>
        </div>
	</div>
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.0/gsap.min.js"></script>
<script src="js-FAQ.js"></script>
</html>