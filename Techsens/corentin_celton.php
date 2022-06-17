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
    
    
        
        <table class="centert">
        <tr>
            <th class="center">CAPTEUR-CO2-ZA59</th>
            <th class="center">Statistiques pour la Saint placide</th>
        </tr>
    <tr>
    <th class="center"><img id="getImage" src="sensor1.png" style="height: 230.3px; margin-left: 20%;"  alt="Bulb img"><br>
        <input type="button" onclick="return run();" value="Actualiser / Démarrer " class="buttonRafraichir"></th>
        <th class="center"><canvas id="myChart" style="width:100%;max-width:600px"></canvas></th>
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
        <input type = "button" onclick="light();" value="Supprimer" class="buttonRafraichir" style="margin-left: 40%;">

        <p class="moy"> La moyenne est de <script type="text/javascript">document.write(average)</script>  ppm </p>
        <p class="var"> La variance est de <script type="text/javascript">document.write(Math.sqrt(average))</script>  ppm </p>

<br><br>
<div id="count" name="count"></div>
<br><br>

</form>
<?php
$team = '';
$request = '';
$typecapt = '';
$numero = '';
$actionneur = '';
$valueactionneur = '';

?>


<div>
<form action='http://projets-tomcat.isep.fr:8080/appService/?ACTION=GETLOG&TEAM=0G6B' method="post" name="EnvoiTRAME" >
					<div class="formulaire4">

						<label for="Team">Numéro d'équipe (objet)</label><br>
						<input class="boxe" type="text" name="team" required value='<?=$team?>' />
						<br>
						<label for="Request">Requete</label><br>
						<input class="boxe" type="text" name="Request" id="Request" value='<?=$request?>' required />
						<br>
						<label for="TypeCapteur">Type de capteur</label><br>
						<input class="boxe" type="text" name="Type" id="Type" value='<?=$typecapt?>' required />
						<br>
						<label for="NumCapteur">Numero de Capteur</label><br>
						<input class="boxe" type="email" name="numero" id="numero" value='<?=$numero?>' required />
						<br>
						<label for="NumeroActio">Numéro d'actionneur</label><br>
						<input class="boxe" type="text" name="NumActio" id="NumActio" value='<?=$actionneur?>' required />
						<br>
						<label for="ValActio">Valeur de l'actionneur</label><br>
						<input class="boxe" type="text" name="ValActio" id="ValActio" value='<?=$valueactionneur?>' required />
</form>
</div>
<br>

<button class="buttonRafraichir" style="margin-left: 40%;">Envoyer une requête au capteur </button>
<p class="moy" style="color:red;">Passerelle APP</p>
<?php
// RECUPERATION DE DONNEE
$ch = curl_init();
curl_setopt(
    $ch, 
    CURLOPT_URL,
    "http://projets-tomcat.isep.fr:8080/appService/?ACTION=GETLOG&TEAM=0G6B"
);
curl_setopt($ch, CURLOPT_HEADER, FALSE);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
$data = curl_exec($ch);
curl_close($ch);
echo "La valeur brute (POST TRAITEMENT) de la trame étant conséquente, on vous montre la trame traitée ci-dessous<br /><br/>";



// METTRE LES DONNES SOUS FORME DE TABLEAU
$data_tab = str_split($data,33);
echo "<br/> Les valeurs de tout l'historique des trames est mis sous tableau :<br /><br/>";
for($i=0, $size=count($data_tab); $i<$size; $i++){

echo "Trame $i: $data_tab[$i]<br />";
echo "<br /> _________________________________________________ <br />";


}

echo "Prochaine trame à venir";



?>



<br>
<p class="moy"> L'information de votre dernière trame est : </p>
<?php
$trame = $data_tab[1];
// décodage avec des substring
$t = substr($trame,0,1);
$o = substr($trame,1,4);
// …
// décodage avec sscanf
list($t, $o, $r, $c, $n, $v, $a, $x, $year, $month, $day, $hour, $min, $sec) = 
sscanf($trame,"%1s%4s%1s%1s%2s%4s%4s%2s%4s%2s%2s%2s%2s%2s");
echo( "<br /> Le type de trame est : $t");
echo( "<br /> L'objet est le groupe : $o");
echo( "<br /> Le type de requete est : $r");
echo( "<br /> Le type de capteur est : $c");
echo( "<br /> Le numéro de capteur est : $n");
echo( "<br /> La valeur remontée est : $v");
echo( "<br /> Le  numéro de la trame est : $a");
echo( "<br /> Le checksum est : $x");
echo( "<br /> L'année  : $year");
echo( "<br /> Le mois: $month");
echo( "<br /> Le jour : $day");
echo( "<br /> L'heure : $hour");
echo( "<br /> La minute : $min");
echo( "<br /> La seconde : $sec");



?>

<p> ENVOIE DE REQUETE DU PC VERS LE CAPTEUR </p>
<?php

$ca = curl_init();
curl_setopt(
    $ca, 
    CURLOPT_URL,
    "http://projets-tomcat.isep.fr:8080/appService/?ACTION=GETLOG&TEAM=0G6B"
);
curl_setopt($ca, CURLOPT_HEADER, FALSE);
curl_setopt($ca, CURLOPT_RETURNTRANSFER, TRUE);
$data = curl_exec($ca);
curl_close($ca);


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
                        <a href="cgu.html"> Mentions légales et politique de confidentialité</a></label></div>
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