<?php 
include "config.php";

if(isset($_POST["envoyer"])){
	if(!empty($_POST["ticket"])){
		$ticket=htmlspecialchars($_POST["ticket"]);
		$addticket = $con->prepare("INSERT INTO ticket(content) VALUES(?)");
		$addticket->execute(array($ticket));
	}
}


?>

<!DOCTYPE html>
<html>
<a name="haut"></a>

<head>
    <meta charset="utf-8" />
    <link href="graphique.css" media="all" rel="stylesheet" type="text/css">
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <title>Techsens</title>

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
<br>
<br>

    <img src="assitance.png" alt="photo-assistance" class="img3" />
    <form method="post">
        <p>
        <h2 class="rut">Assistance</h2>
        </p>
        <p><textarea name="ticket" id="Ticket" placeholder=" Rédiger un Ticket ici" class="ticket"></textarea></p>
            <input type="submit" class="button20" name= "envoyer" value="Envoyer le ticket"></a>

    </form>

    <div class="footer5">
			<div class="foot">Techsens est une société cherchant à développer des solutions en accord avec le développement durable.</div>
			<img src="logoo.png" alt="photo du logo" />

			<div class="content">
				<div class="barre">
					<p>---------------------------------------------------</p>
				</div>
				<div class="photologo">
					<div class="logofb">
						<a href="accueil.html"> <img src="fb.png" alt="logo fb" /> </p></a>
					</div>
					<div class="logoinsta">
						<a href="accueil.html"> <img src="insta.png" alt="logo insta" /> </a>
					</div>
					<div class="logotwitter">
						<a href="accueil.html"> <img src="twitter.png" alt="logo twitter" /></a>
					</div>
					<div class="logolinkedin">
						<a href="https://www.linkedin.com/in/techsens-a9887b222"> <img src="linkedin.png" alt="logo linkedin" /> </a>
					</div>
				</div>
			</div>
			<div class="end">
				<label for="end">
					<a href="#"> Mentions légales</a> | <a href="#"> Politique de confidentialité</a></label>
			</div>
		</div>
</body>

</html>