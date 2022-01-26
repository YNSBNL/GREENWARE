<?php 
include "config.php";

if(isset($_POST["envoyer"])){
	if(!empty($_POST["ticket"])){
		$ticket=htmlspecialchars($_POST["ticket"]);
		$addticket = $con->prepare("INSERT INTO aide(content) VALUES(?)");
		$addticket->execute(array($ticket));
	}
}

// Check user login or not
if (!isset($_SESSION['uname'])) {
    header('Location: login.php');
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

    <img src="assistance.png" alt="photo-assistance" class="img3" />
    <form method="post">
        <p>
        <center><h2 class="rut">Assistance</h2></center>
        </p>
        <center><p><textarea name="ticket" id="Ticket" placeholder=" Rédiger un Ticket ici" class="ticket"></textarea></p></center>
            <input type="submit" class="button20" name= "envoyer" value="Envoyer le ticket"></a>

    </form>

    <br>
<br>
<br>
<br>
<br>
<br>
<br>
<br/>
    <div class="footer">
        <div class="foot">Techsens est une société cherchant à développer des solutions en accord avec le développement durable.</div>
        <img src="logoo.png" alt="photo du logo" />
        
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
    </div>
    <div id="scrollUp">
            <a href="#haut" class="top">
                <img src="Haut.png" alt="photo bouton" class="img10" /></a>
        </div>
</body>

</html>