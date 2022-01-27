<?php
include "config2.php";

// Check user login or not
if (!isset($_SESSION['uname'])) {
    header('Location: gestionnaireid.php');
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
            <p class="contacter2"> Espace GESTIONNAIRE </p>
        </center>
        <span>

            <div class="formulaire2">
                <form class="intro">
                    <p class="txt1"> Vos Informations Personnelles </p>

                    <?php

                    if (isset($_GET['Logout'])) {
                        if ($_GET['Logout'] == true) {
                            session_unset();
                            header("location: gestionnaireid.php");
                        }
                    } else if ($_SESSION['uname'] !== "") {
                        $user = $_SESSION['uname'];



                        // afficher un message
                        echo "<br>Bonjour $user, vous êtes connecté.";
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

<center><div class="inline-block-gestion">
    <h2>Moteur de recherche : trouvez les informations de l'adhérent souhaité en écrivant son login (username)</h2>
    <br>
    <br>

    <form  action='' method='post'>
       
        Username: <input type='text' name='user' id='user'><br>
        
        <input type='submit' name='search'>
        <br>
        telephone: <input type='text' name='telephone' id='telephone'><br>
         <input type='submit' name='chercher'>
    </form>
    </div></center>
<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isSet($_POST['search'])) {
       

        $servername = "localhost";
        $username = "root";
        $password = "";
        $db = "techsens";

        $conn = new mysqli($servername, $username, $password, $db);

        if ($conn->connect_error){
            die("Connection failed: ". $conn->connect_error);
        }
        if (isSet($_POST['user']) ) {
            $user9 = $_POST['user'];
           
            $sql = "select * from users where username like '%$user9%'";
         

            $result = $conn->query($sql);
        

            if ($result->num_rows > 0){
            while($row = $result->fetch_assoc() ){
                echo "login :       " .$row["username"]." mot de passe :         ".$row["password"]." email :            ".$row["email"]." nom:            ".$row["nom"]." prenom :          ".$row["prenom"]." telephone :           ".$row["telephone"]."<br>";
            } 
            } else {
                echo "0 données";
            }
        }

       
        $conn->close();
    }









if ($_SERVER['REQUEST_METHOD'] == 'POST' && isSet($_POST['chercher'])) {
       

        $servername = "localhost";
        $username = "root";
        $password = "";
        $db = "techsens";

        $conn = new mysqli($servername, $username, $password, $db);

        if ($conn->connect_error){
            die("Connection failed: ". $conn->connect_error);
        }


         if (isSet($_POST['telephone']) ) {
            $telephone9 = $_POST['telephone'];
           
            $sql1 = "select * from users where telephone like '%$telephone9%'";
         

            $result1 = $conn->query($sql1);
        

            if ($result1->num_rows > 0){
            while($row = $result1->fetch_assoc() ){
                echo "login :       " .$row["username"]." mot de passe :         ".$row["password"]." email :            ".$row["email"]." nom:            ".$row["nom"]." prenom :          ".$row["prenom"]." telephone :           ".$row["telephone"]."<br>";
            } 
            } else {
                echo "0 données";
            }
        }

         $conn->close();
     }



                    
                
?>
<br>
<br>
<br>
<br>
<br>

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
                        <a href="cgu.html"> Mentions légales et ponlitique de confidentialité</a></label></div>
    </div>
    <div id="scrollUp">
            <a href="#haut" class="top">
                <img src="Haut.png" alt="photo bouton" class="img10" /></a>
        </div>


</body>










</html>