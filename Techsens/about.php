<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <link href="graphique.css" media="all" rel="stylesheet" type="text/css">
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

<center><h1> Qui sommes-nous ?</h1></center>

<p>Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l'imprimerie depuis les années 1500, quand un imprimeur anonyme assembla ensemble des morceaux de texte pour réaliser un livre spécimen de polices de texte.</p>
<br>
<br>

<img src="julesddass.jpg" class="img33">
<img src="audrey.png" class="img33">
<img src="aug2.jpg" class="img33">
<img src="tounsi.jpg" class="img33">

<div class="footer">
        <div class="foot">Techsens est une société cherchant à développer des solutions en accord avec le développement durable.</div>
        <img src="logoo.png" alt="photo du logo" />
        <div class="content">
            <div class="barre">
            <p>---------------------------------------------------</p></div>
            <div class="photologo">
            <div class="logofb">
                <a href="accueil.html"> <img src="fb.png" alt="logo fb" /> </p></a></div>
            <div class="logoinsta">
                <a href="accueil.html"> <img src="insta.png" alt="logo insta" /> </a></div>
            <div class="logotwitter">
                <a href="accueil.html"> <img src="twitter.png" alt="logo twitter" /></a></div>
            <div class="logolinkedin">
                <a href="https://www.linkedin.com/in/techsens-a9887b222"> <img src="linkedin.png" alt="logo linkedin" /> </a></div>
        </div>
            <div class="end">
                    <label for="end"> 
                        <a href="#"> Mentions légales</a> | <a href="#"> Politique de confidentialité</a></label></div>
</div>

</body>
</html>