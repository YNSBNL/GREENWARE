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
				<h2 class="h2-faq"> Comment puis-je utiliser Greenware? </h2>
				<img class="img-faq" src="image/plus.png" alt="animation">
			</div>
			<div class="toggle-pannel">
				<p class="p-faq">Pour utiliser Greenware, il faut avoir un compte. Si vous avez un compte connectez vous sur la page <a href="login.php" class="lien2">« s’identifier »</a>. Si vous n’avez pas de compte vous pouvez nous contacter sur la page <a href="contact.php" class="lien2">« nous contacter »</a> afin que nous puissions peut être travailler ensemble dans le futur. </p>
			</div>
		</div>

<p class="trait">----------------------------------------------------------</p>
		<div class="questions">
			<div class="pannel-faq">
				<h2 class="h2-faq"> J’ai perdu mon identifiant/mot de passe, que dois-je faire?  </h2>
				<img class="img-faq" src="image/plus.png" alt="animation">
			</div>
			<div class="toggle-pannel">
				<p class="p-faq">Écrivez nous grâce à la page <a href="contact.php" class="lien2">« nous contacter »</a> en décrivant votre problème. Précisez bien votre nom/prénom/société/date de naissance et identifiant (si vous l’avez), nous vous enverrons un mail afin de réinitialiser votre identifiant/mot de passe.</p>
			</div>
		</div>

<p class="trait">----------------------------------------------------------</p>

		<div class="questions">
			<div class="pannel-faq">
				<h2 class="h2-faq">Où puis-je voir les informations des capteurs?</h2>
				<img class="img-faq" src="image/plus.png" alt="animation">
			</div>
			<div class="toggle-pannel">
				<p class="p-faq"> Pour voir les informations des capteurs il faut vous connecter, aller dans l’onglet « Greenware » puis choisir l’endroit dont vous voulez voir les valeurs. 
					Vous pouvez ensuite allumer le capteur et le rafraîchir pour voir ses valeurs. </p>
			</div>
		</div>

<p class="trait">----------------------------------------------------------</p>

		<div class="questions">
			<div class="pannel-faq">
				<h2 class="h2-faq">J’ai un problème avec les capteurs que puis/je faire?</h2>
				<img class="img-faq" src="image/plus.png" alt="animation">
			</div>
			<div class="toggle-pannel">
				<p class="p-faq">Si vous avez un problème avec les capteurs vous pouvez nous écrire depuis la page <a href="aide.php" class="lien2">« Aide »</a> en nous décrivant votre problème. 
					Nos techniciens vous répondront dans les plus brefs délais pour vous aider.</p>
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


</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['question'] . "</td>";

echo "<td>" . $row['reponse'] . "</td>";

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