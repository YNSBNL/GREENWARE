<!DOCTYPE html> <!-- type de document (html pr nous)-->
<html>

<head>
    <meta content="text/html; charset=utf-8" http-equiv="content-type">
    <link href="graphique.css" rel="stylesheet">
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
<br><br>
    <div class="intro">
    <?php 
        $x = "Jérôme";
        echo "<p><center> Bienvenue utilisateur $x  ! </center></p>"
    ?>
        <?php
        $y = "Gare du Nord";
        echo "<p><center> Voici les informations de la station $y ! </center></p>" 

    ?>

    </div>
    <br>
    <img src="gare_du_nord.jpg" class="celton">
    <br> <br>
    <br>
        <br>
        <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

    <table class="centert">
        <tr>
            <th class="center">CAPTEUR-CO2-ZA59</th>
            <th class="center">Statistiques pour la Gare du Nord</th>
        </tr>
     <tr>
            <th class = "center" style="text-align: center;">

    <img id="getImage" src="sensor1.gif" style="height: 300px;" alt="Bulb img"><br>
    <input type="button" onclick="imagefun()" value="Refresh " class="buttonRafraichir">
    <button onclick="fu()" class="buttonRafraichir">Turn OFF</button>
  </th>
</tr>
    
    </table>
<div class="footer4">
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
        </div></div>
            <div class="end">
                    <label for="end"> 
                        <a href="#"> Mentions légales</a> | <a href="#"> Politique de confidentialité</a></label></div>
</div>
<div id="scrollUp">
            <a href="#haut" class="top">
                <img src="Haut.png" alt="photo bouton" class="img10" /></a>
        </div>
</body>
<script>



        function imagefun() {
            var Image_Id = document.getElementById('getImage');
            if (Image_Id.src.match("sensor1.gif")) {
                Image_Id.src = "sensor2.gif" ;
            }
            else {
                Image_Id.src = "sensor1.gif";
            }

    


        } 
        var c = 0;
    function fu(){
      if(c==0){
        document.getElementById('getImage').src = "sensor0.gif";
        document.getElementById("button").innerHTML = "Turn ON";
        c=1;
      }
      else if(c==1){
        document.getElementById("getImage").src = "sensor1.gif";
        document.getElementById("button").innerHTML = "Turn OFF";
        c=0;
      }
    } 
        
       


             
    </script>

</html>
