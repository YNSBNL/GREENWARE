<!DOCTYPE html> <!-- type de document (html pr nous)-->
<html>

<head>
    <meta content="text/html; charset=utf-8" http-equiv="content-type">
    <link href="graphique.css" rel="stylesheet">
    <script>
    var arr_num = Array.from({length: 4}, () => (Math.random() * (900 - 600 + 1) + 600));
    
    

    var currentdate = new Date(); 
var datetime = currentdate.getDate() + "/"
                + (currentdate.getMonth()+1)  + "/" 
                + currentdate.getFullYear() + " @ "  
                + currentdate.getHours() + ":"  
                + currentdate.getMinutes() + ":" 
                + currentdate.getSeconds();


const moyarr = arr_num;

function getAvg(moyarr) {
  const total = moyarr.reduce((acc, c) => acc + c, 0);
  return total / moyarr.length;
}

const average = getAvg(moyarr);




function run(){ 
    var counter =0;
    var grid = document.getElementById("grid");
    for (var i = 0, row; row = grid.rows[i]; i++){
        row.cells[0].textContent = arr_num[getRandom()];
        row.cells[1].textContent = datetime;
        row.cells[2].textContent = average;
        row.cells[3].textContent = Math.sqrt(average);
		      
      
        
    }
    
    
}


function getRandom(){
    return Math.floor(Math.random() * arr_num.length) + 0 ;
    
}






</script>
    <title>Techsens</title>
</head>

<body>
<header id="header">    
        <div class="topheader">
            <div class="logomenu">
            <img src="logoo.png" alt="photo du logo" /> </p></a></div>
            <div class="phrase">
                <p>La technologie au coeur de l'environnement </p></div></div>

        <div class="mainheader">            
        <nav>
        <ul>
            <a href="accueil.php"> <img src="maison.png" alt="photo du logo" /> </a>
            <li><a href="profil.php">Mon Compte</a></li>
            <li><a href="quizz.php">Quizz</a></li>
            <li><a href="contact.php">Nous contacter</a></li>
            <li><a href="aide.php">Aide</a></li>
            <li style="float:right"><a class="active" href="#about">About</a></li>
        </ul>
    </nav>
</div>
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
    
    
        
            <div class="center">CAPTEUR-CO2-ZA59</div>

            
       
        	<div class = "center" style="text-align: center;">

    <img id="getImage" src="sensor1.gif" style="height: 300px;" alt="Bulb img"><br>
    <input type="button" onclick="imagefun(); return run();" value="Refresh " class="buttonRafraichir">
    <button onclick="fu()" class="buttonRafraichir">Turn OFF</button></div>
 
  


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
<br><br>

</form>
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

</body>

</html>
