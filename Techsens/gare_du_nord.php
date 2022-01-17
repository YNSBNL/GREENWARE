<!DOCTYPE html> <!-- type de document (html pr nous)-->
<html>

<head>
    <meta content="text/html; charset=utf-8" http-equiv="content-type">
    <link href="graphique.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
    <script type="text/javascript" src="gares.js"></script>
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
<div class="center"><canvas id="myChart" style="width:100%;max-width:600px"></canvas></div>
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

<form method="post">

<table border="1" cellpadding="0" cellspacing="0" style="border-collapse: collapse" width="100"v id="grid">
<tr>
    <td  height="19" width="20%">Données du Capteur</td>
    <td height="19" width="20%">Heure locale</td>
    <td  height="19" width="20%">Moyenne</td>
    <td  height="19" width="20%">Variance</td>
</tr>
<tr>
    <td id="1-1" height="19" width="20%">&nbsp;</td>
    <td id="1-2" height="19" width="20%">&nbsp;</td>
    <td id="1-3" height="19" width="20%">&nbsp;</td>
    <td id="1-4" height="19" width="20%">&nbsp;</td>
</tr>
<tr>
    <td id="2-1" height="16" width="20%">&nbsp;</td>
    <td id="2-2" height="16" width="20%">&nbsp;</td>
    <td id="2-3" height="16" width="20%">&nbsp;</td>
    <td id="2-4" height="19" width="20%">&nbsp;</td>
</tr>
<tr>
    <td id="3-1" height="19" width="20%">&nbsp;</td>
    <td id="3-2" height="19" width="20%">&nbsp;</td>
    <td id="3-3" height="19" width="20%">&nbsp;</td>
    <td id="3-4" height="19" width="20%">&nbsp;</td>
</tr>
<tr>
    <td id="4-1" height="19" width="20%">&nbsp;</td>
    <td id="4-2" height="19" width="20%">&nbsp;</td>
    <td id="4-3" height="19" width="20%">&nbsp;</td>
    <td id="4-4" height="19" width="20%">&nbsp;</td>
</tr>
</table>

<br><br>
<div id="count" name="count"></div>


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



    
        var xValues = ["1ère mesure", "2ème mesure", "3ème mesure", "4ème mesure"];
        var yValues = [firstNumber, secondNumber, thirdNumber, fourthNumber];
        var barColors = ["red", "green","blue","orange","brown"];

        new Chart("myChart", {
          type: "bar",
          data: {
            labels: xValues,
            datasets: [{
              backgroundColor: barColors,
              data: yValues
            }]
          },
          options: {
            legend: {display: false},
            title: {
              display: true,
              text: "Graphique des données sur les particules fines (en quelques secondes)"
            }
          }
        });


             
    </script>

</html>
