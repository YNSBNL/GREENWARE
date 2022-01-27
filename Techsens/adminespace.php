<?php
include "config2.php";
include "config3.php";



// Check user login or not
if (!isset($_SESSION['uname'])) {
    header('Location: adminid.php');
}

?>


<!doctype html>
<html>

<head>
    <meta charset="utf-8" />
    <link href="graphique.css" media="all" rel="stylesheet" type="text/css">
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

    <div class="container2">
        <center>
            <p class="contacter2"> Espace ADMINISTRATEUR </p>
        </center>
        <span>

            <div class="formulaire2">
                <form class="intro">
                    <p class="txt1"> Vos Informations Personnelles </p>

                    <?php

                    if (isset($_GET['Logout'])) {
                        if ($_GET['Logout'] == true) {
                            session_unset();
                            header("location: adminid.php");
                        }
                    } else if ($_SESSION['uname'] !== "") {
                        $user = $_SESSION['uname'];



                        // afficher un message
                        echo "<br>Bonjour $user, vous êtes connecté";
                    }
                    ?>
                    <br><br>
                    <a href="aide.php" class="button2">Information incorrecte ? Contactez-nous !</a>
                    <div class="texteleft">

                </form>

            </div>
    </div>
    <p class="photo_de_profil">Photo de profil : </p>
    <img src="anonyme.png" alt="photo de profil" class="img_de_profil" />

    <br>

<br>
<br>
<br>
<br>

    <center><div class="inline-block-admin">
        <div>    <h2>Ajouter un utilisateur</h2>
        <form action='config3.php' method='POST'>
            <label for="user">Username:</label> <br />
            <input type='text' name='user' id="user"><br />
            <label for="user">Password:</label> <br />
            <input type='password' name='pass' id="pass"><br />
            <label for="user">E-Mail:</label> <br />
            <input type='text' name='email' id="email"><br />
            <label for="user">Prenom:</label> <br />
            <input type='text' name='prenom' id="prenom"><br />
            <label for="user">Nom:</label> <br />
            <input type='text' name='nom' id="nom"><br />
            <label for="user">Numéro de téléphone:</label> <br />
            <input type='text' name='telephone' id="telephone"><br />
            <input type='submit' name='sentForm' id="sentForm" class="button7"/>
        </form>
        </div>
        <div>    <h2>Supprimer un utilisateur : séléctionnez son pseudonyme</h2>
        <form action='config3.php' method='POST'>
            <label for="user">Username:</label> <br />
            <input type='text' name='user' id="user"><br />
            <input type='submit' name='delete' id="delete" class="button7"/>
        </form>
        </div>
        <div>   <h2>Additionner FAQ</h2>
        <form action='config3.php' method='POST'>
            <label for="message1">FAQ:</label> <br />
            <input type='text' name='message1' id="message1"><br />
            <input type='submit' name='addfaq' id="addfaq" class="button7"/>
        </form>
        </div>
        <div>   <h2>SUPPRIMER FAQ</h2>
        <form action='config3.php' method='POST'>
            <label for="message">FAQ:</label> <br />
            <input type='text' name='message' id="message"><br />
            <input type='submit' name='deletefaq' id="deletefaq" class="button7"/>
        </form>
        </div>
    </div></center>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <div class="footer">
        <div class="foot">Techsens est une société cherchant à développer des solutions en accord avec le développement
            durable.</div>
        <img src="logoo.png" alt="photo du logo" />

        <div class="content">
            <div class="barre">
                <p>---------------------------------------------------</p>
            </div>
            <div class="photologo">
                <div class="logofb">
                    <a href="https://www.facebook.com/profile.php?id=100073322512659"> <img src="fb.png"
                            alt="logo fb" /> </p></a>
                </div>
                <div class="logoinsta">
                    <a href="https://www.instagram.com/"> <img src="insta.png" alt="logo insta" /> </a>
                </div>
                <div class="logotwitter">
                    <a href="https://twitter.com/Techsens_"> <img src="twitter.png" alt="logo twitter" /></a>
                </div>
                <div class="logolinkedin">
                    <a href="https://www.linkedin.com/in/techsens-a9887b222"> <img src="linkedin.png"
                            alt="logo linkedin" /> </a>
                </div>
            </div>
        </div>
        <div class="end">
            <label for="end">
                <a href="cgu.html"> Mentions légales et politique de confidentialité</a></label>
        </div>
    </div>
    <div id="scrollUp">
        <a href="#haut" class="top">
            <img src="Haut.png" alt="photo bouton" class="img10" /></a>
    </div>


</body>

</html>








</html>