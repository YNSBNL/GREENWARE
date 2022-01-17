<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <link href="graphique.css" media="all" rel="stylesheet" type="text/css">
    <title>Techsens</title>
    <div id="haut"></div>


</head>

<body>
    <!-- Barre de navigation-->
    <!--
    <div class="navigation"></div>
    <nav>
        <ul>
            <li> <img src="techsens3.jpg" alt="photo du logo" class="img1" /> </li>
            <li><a href="accueil.php">Accueil</a></li>
            <li class="déroulant"><a href="#Histoire">Notre histoire &ensp;</a>
            <li><a href="identification.php">Se connecter</a></li>
            <li><a href="aide.php">Aide</a></li>

        </ul>
    </nav>
    </div>-->

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

    <div class="imgaj1">
        <img class="paysage1" src="gare.png" alt="photo background" onmouseenter="textappears()" 
        onmouseleave="textleave()"/>
        <div class="titre1"> INNOVATION</div>
        <div class="paragraphe1"> Quam quidem partem accusationis admiratus sum et moleste tuli potissimum esse Atratino datam. Neque enim decebat neque aetas illa postulabat neque, id quod animadvertere poteratis, pudor patiebatur optimi </div>
    </div>

    <div class="imgaj2">
        <img class="paysage2" src="ecologie.png" alt="photo background" onmouseenter="textappears1()" 
        onmouseleave="textleave1()"/>
        <div class="titre2"> ECOLOGIE</div>
        <div class="paragraphe2"> Quam quidem partem accusationis admiratus sum et moleste tuli potissimum esse Atratino datam. Neque enim decebat neque aetas illa postulabat neque, id quod animadvertere poteratis, pudor patiebatur optimi </div>
    </div>

    <div class="imgaj3">
        <img class="paysage3" src="technologie.png" alt="photo background" onmouseenter="textappears2()" 
        onmouseleave="textleave2()"/>
        <div class="titre3"> TECHNOLOGIE</div>
        <div class="paragraphe3"> Quam quidem partem accusationis admiratus sum et moleste tuli potissimum esse Atratino datam. Neque enim decebat neque aetas illa postulabat neque, id quod animadvertere poteratis, pudor patiebatur optimi </div>
    </div>


    <div class="background">
        <!-- Titre de l'accueil -->
        <h1 class="Techsens">Techsens, c'est quoi?</h1>
        <!-- Slogan de l'accueil -->
        <p class="slogan">L'écologie au coeur de l'innovation</p>
        <!-- Chiffres de l'Entreprise -->
        <div class="Chiffres">
            <p class="Chiffre">Quelques chiffres  </p>
            <ul>
                <li class="text2"><img src="capteur3.png" class="img5" /><br><br>Vente de + de 3000 capteurs Sens'Moov</li>
                <li class="text3"><img src="CA.png" class="img6" /><br><br><br><br><br><br><br><br>10 millions de Chiffres d'affaires en 2020</li>
                <li class="text4"><img src="SC.jpg" class="img7" /><br><br>99% des Clients satisfaits</li>
            </ul>
        </div></div>



<div class="imaagee1">
        <img class="building" src="building.png" alt="photo background" />
        <div class="title1"> Notre entreprise</div>
        <div class="paragraffe1"> Techsens est une société créée en 2018 qui met le numérique au service de l'environnement. À travers nos différents projets 
            nous utilisons la technologie afin de permettre aux sociétés ou aux particuliers d’être plus écologiques et responsables. Les parfaits exemples 
            sont nos deux produits Sens’moov et Greenware qui connaissent tout deux un beau succès.</div>
    </div>

<div class="imaagee2">
        <img class="greeenware" src="greeenware.png" alt="photo background" />
        <div class="title2"> GREENWARE</div>
        <div class="paragraffe2"> Notre nouveau produit, Greenware, détecte le taux de particules fines dans l’air et permet aux sociétés et municipalités qui l’utilisent 
            d’agir en conséquence. Nous utilisons des détecteurs de particules fines que nous couplons à des balises GPS afin que nos clients puissent voir 
            en direct où sont les plus gros taux de particules et y remédier en impactant le moins de personnes possibles. </div>
    </div>

<div class="imaagee3">
        <img class="sensmoov" src="sensmoov.png" alt="photo background" />
        <div class="title3"> SENS'MOOV</div>
        <div class="paragraffe3"> Sens’Moov est le premier projet que nous avons développé, c’est un détecteur de mouvement qui permet de couper l'électricité dans
         une pièce quand personne n’y est et donc d’économiser de l’énergie. Il peut être utile aux particuliers comme aux professionnels et est extrêmement fiable
          comme l’attestent nos 99% de clients satisfaits. </div>    
    </div>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br />
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
        </div></div>
            <div class="end">
                    <label for="end"> 
                        <a href="#"> Mentions légales</a> | <a href="#"> Politique de confidentialité</a></label></div>
    </div>
</body>




































































































</html>
<script src="test.js"></script>