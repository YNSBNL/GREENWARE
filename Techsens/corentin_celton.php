<?php
include "config.php";

// Check user login or not
if (!isset($_SESSION['uname'])) {
    header('Location: login.php');
}

// logout
if (isset($_POST['but_logout'])) {
    session_unset();
    header('Location: login.php');
}
?>
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
    
    
        
    <div class="essy"><canvas id="myChart" style="width:100%;max-width:600px"></canvas></div>

     <table class="centert">
        <tr>
            <th class="center">CAPTEUR-CO2-ZA59</th>
            <th class="center">Statistiques pour la station Corentin Celton</th>
        </tr>
     <tr>       
       
        	
    <th class = "center" style="text-align: center;">

    <img id="getImage" src="sensor0.gif" style="height: 230.3px; margin-left:23%" alt="Bulb img"><br>
    <input type="button" onclick="return run();" value="Refresh/ Turn on " class="buttonRafraichir">
   </th>
</tr>
</table>
  
<p class="tablo"> Voici les données du capteur en temps réel:</p>

  <table border="1" cellpadding="10" cellspacing="0" style="border-collapse: collapse; margin-left: 30%; margin-top: 30px; width: 40%;"   width="100"v >
    <tr>
        <td  height="19" width="20%">Données du Capteur</td>
        <td height="19" width="20%">Heure locale</td>
        <td  height="19" width="20%">Moyenne</td>
        <td  height="19" width="20%">Variance</td>
    </tr></table>


<form method="post">

    <table border="1" cellpadding="10" cellspacing="0" style="border-collapse: collapse; margin-left: 30%; width: 40%;"   width="100"v id="grid">

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
        <input type = "button" onclick="light();" value="delete" style="margin-left: 67.2%;">

        <p class="moy"> La moyenne est de <script type="text/javascript">document.write(average)</script>  ppm </p>
        <p class="var"> La variance est de <script type="text/javascript">document.write(Math.sqrt(average))</script>  ppm </p>

<br><br>
<div id="count" name="count"></div>
<br><br>

</form>
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


   var on = 0; // 1 is true, 0 is false

     function light() {
       if (on == 0) {
         var counter =0;
         var grid = document.getElementById("grid");
         for (var i = 0, row; row = grid.rows[i]; i++){
            row.cells[0].textContent = 0;
            row.cells[1].textContent = 0;
            row.cells[2].textContent = 0;
            row.cells[3].textContent = 0;
    
         on = 1; //You forgot a ; here
        }
    }
        else if (on == 1){ //You forgot a ; here
         on = 0; //You forgot a ; here
       }
      }
            
    

</script>
</html>
