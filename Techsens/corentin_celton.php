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
    <!-- PHP a REVOIR de toute urgence -->
    
        <?php
        $y = "Corentin Celton";
        echo "<p><center> Voici les informations de la station $y ! </center></p>" 

    ?>

    </div>
    <br>
    <img src="03.jpg" class="celton">
    <br>
    <br>
        <br>
        <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    
    
        
            <div class="center"><canvas id="myChart" style="width:100%;max-width:600px"></canvas></div>

            
       
        	<div class = "center" style="text-align: center;">
    <p> La moyenne est de <script type="text/javascript">document.write(average)</script>  ppm </p>
    <p> La variance est de <script type="text/javascript">document.write(Math.sqrt(average))</script>  ppm </p>
    <img id="getImage" src="sensor1.gif" style="height: 300px;" alt="Bulb img"><br>
    <input type="button" onclick="imagefun(); return run();" value="Refresh " class="buttonRafraichir">
    <button onclick="fu()" class="buttonRafraichir">Turn OFF</button></div>
 
  


<form method="post">
<<<<<<< Updated upstream

<table border="1" cellpadding="0" cellspacing="0" style="border-collapse: collapse" width="100" id="grid">
=======
<table border="1" cellpadding="0" cellspacing="0" style="border-collapse: collapse" width="100"v>
>>>>>>> Stashed changes
<tr>
    <td  height="19" width="20%">Données du Capteur</td>
    <td height="19" width="20%">Heure locale</td>
</tr>
</table>
<table border="1" cellpadding="10" cellspacing="10" style="border-collapse: collapse" width="100"v id="grid">

<tr>
    <td id="1-1" height="19" width="20%">&nbsp;</td>
    <td id="1-2" height="19" width="20%">&nbsp;</td>
    <td id="1-3" height="19" width="20%">&nbsp;</td>
    <td id="1-4" height="19" width="20%">&nbsp;</td>
</tr>
<tr>
    <td id="2-1" height="19" width="20%">&nbsp;</td>
    <td id="2-2" height="19" width="20%">&nbsp;</td>
    <td id="2-3" height="19" width="20%">&nbsp;</td>
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
<br><br>

</form>
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
<script type="text/javascript">
	
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
