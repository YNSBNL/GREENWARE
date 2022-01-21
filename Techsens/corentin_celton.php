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
    <input type="button" onclick="return run();" value="Refresh " class="buttonRafraichir">
   <input type = "button" onclick="light();" value="delete">
   </th>
</tr>
</table>
  


<form method="post">

    <table border="1" cellpadding="10" cellspacing="0" style="border-collapse: collapse; margin-left: 30%; margin-top: 30px; width: 40%;"   width="100"v id="grid">

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

        <p> La moyenne est de <script type="text/javascript">document.write(average)</script>  ppm </p>
    <p> La variance est de <script type="text/javascript">document.write(Math.sqrt(average))</script>  ppm </p>

<br><br>
<div id="count" name="count"></div>
<br><br>

</form>
<br>
<br>

<br>
<br>
<br>

    


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
