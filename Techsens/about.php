    <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <link href="graphique.css" media="all" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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


<p>
    <div  id="titre1About">UNE ÉQUIPE EXPÉRIMENTÉE ET PASSIONNÉE </div><br>


    <div id="titre2About">5 années d’expérience dans les technologies du web.  </div><br><br>



    <div id="text1About">
       
    Nous sommes une équipe pluridisciplinaire qui aime mettre la technologie et l'écologie au coeur de l'innovation.
    Nous aimons les relations humaines, la transparence et cultivons la fiabilité et la confiance réciproque avec nos acteurs. 

    </div>
    </p>


<br>
<br>



    <div class="containerAudrey">
        <div class="imageAudrey"></div>
        <p>
                        
        <span class="nom" style=" color:#075244">Développeuse </span>

        <div class="coordonné">Coordonnées</div>

        <div >Tél. 07 61 39 37 81</div>

        <a href="mailto:audrey.lales@techsens.fr"> <i style="font-size:1.5rem" class="fa">&#xf0e0;</i>
        <div class="mail"></div>
        </a>
        audrey.lales@techsens.fr 

        <br><br>
        <span class="nom" style=" color:#075244">Audrey LALES </span>

        <br> <br>
        Développeuse pendant plus de 2 ans au sens de l’équipe TechSens, 
        audrey LALES est un membre actif et dynamique qui résout les soucis en permanence
        et de manière méthodique des détails de votre projet.
        <br><br>
        Elle s’occupe de la conception technique de votre projet
        quelle que soit la complexité de ce dernier.
        <br><br>
  
        </p>
    </div>

    <div class="containerJules">
            <div class="imageJules"></div>
            <p>
   
             <span class="nom" style="color:#075244">Programmeur </span>
             <div class="coordonné">Coordonnées</div>
             <div class="telephone">Tél. 06 52 39 46 18</div>
             <a href="mailto:jules.garcin@techsens.fr"> <i style="font-size:1.5rem" class="fa">&#xf0e0;</i>
                 <div class="mail"></div>
             </a>
             jules.garcin@techsens.fr
             
             <br><br>
             <span class="nom"style="color:#075244">Jules GARCIN </span>
            <br><br>
            
            Avec ses atout jules GARCIN est un membre dynamique et doté d’une expertise technique
            en programmation et logistiques.
            <br><br>
            Il s’occupe de la mise au point des nouveaux designs des logiciels 
            et de la conception des solutions innovantes sans limites.
        
            <br><br><br><br>
        </p>
    </div>


    <div class="containerAug">
            <div class="imageAug"></div>
            <p>
        
             <span class="nom"style="color:#075244">Analyste </span>
             <div class="coordonné">Coordonnées</div>
             <div class="telephone">Tél. 06 89 76 95 23</div>
             <a href="mailto:augustin.watine@techsens.fr"> <i style="font-size:1.5rem" class="fa">&#xf0e0;</i>
                 <div class="mail"></div>
             </a>
             augustin.watine@techsens.fr
             
            <br><br>
             <span class="nom"style="color:#075244">Augustin Watine </span>
            <br><br>

            Créatif, polyvalent et doté d’un grand sens d’adaptations 
            aux nouvelles situations.
            <br><br>
            
            Augustin WATINE est spécialiste en analyse et développement informatique,
            il met en relation nos créations, nos développements des sites afin que chaque création
            soit à l’image de la marque et de vos besoins.

            <br><br>
       
        </p>
        
    </div>



<!-- bottom -->



<div class="containerYoun">
        <div class="imageYoun"></div>
        <p>
     
             <span class="nom"style="color:#075244">Programmeur </span>
             <div class="coordonné">Coordonnées</div>
             <div class="telephone">Tél. 06 19 12 98 75</div>
            
             <a href="mailto:younes.benali@techsens.fr"> <i style="font-size:1.5rem" class="fa">&#xf0e0;</i>
                 <div class="mail"></div>
             </a>
             younes.benali@techsens.fr
             
             <br><br>
        <span class="nom"style="color:#075244">Younes BENALI </span>
            <br><br>

            Younes Benali est un programmeur doté d’un grand professionnalisme et 
            passionné par la réalisation du plus simple aux plus complexes de vos projets.
            <br>
            <br>
            Il s’occupe du développement des activités et vous accompagne dans la
            transformation logistique, structurale et dans l’optimisation de votre
            projet dans tout secteur.
            <br>
            <br>
        </p>
    </div>



    <div class="containerSco">
        <div class="imageSco"></div>
        <p>          
        <span class="nom"style="color:#075244">Designer</span>
        <div class="coordonné">Coordonnées</div>
        <div >Tél. 06 41 88 44 57</div>
            
        <a href="mailto:scottie.botuli@techsens.fr"> <i style="font-size:1.5rem" class="fa">&#xf0e0;</i>
            <div class="mail"></div>
        </a>
             scottie.botuli@techsens.fr

        <br><br>
        <span class="nom"style="color:#075244">Scottie BOTULI</span>
        <br><br>

        Toujours à la recherche, des nouvelles idées et de nouveaux concepts  innovants.
        Scottie Botuli est un designer qui travaille pendant plus de 2 ans au sens de groupe TechSens.
        <br><br>
        Spécialiste dans la création, la conception graphique et dotée d’un incroyable sens du style. 
        Elle utilise les dernières applications et technologies pour répondre à vos besoins.
<br><br>
  
</p>
    </div>

    <div class="containerKha">
        <div class="imageKha"></div>
        <p>          
        <span class="nom"style="color:#075244">Développeur</span>
        <div class="coordonné">Coordonnées</div>
        <div >Tél. 07 72 28 81 34</div>
            
        <a href="mailto:khalil.sammoud@techsens.fr"> <i style="font-size:1.5rem" class="fa">&#xf0e0;</i>
            <div class="mail"></div>
        </a>
             khalil.sammoud@techsens.fr
        
        <br><br>
        <span class="nom"style="color:#075244">Khalil SAMMOUD</span>
        <br><br>  

        Doté d’un grand sens d’organisation et passionné par la technologie.
        Khalil SAMMOUD est  un esprit créatif qui aime réaliser avec rigueur
        différents projets que vous lui confiez.
        <br><br>
        Il s’occupe du développement des applications et des logiciels pour
        le plaisir de ses utilisateurs.
        En testant en permanence, les nouvelles applications sont technologiques.

</p>
    </div>





<br/>
    <div class="footer6About" >
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
                        
    <div id="scrollUp">
            <a href="#haut" class="top">
                <img src="Haut.png" alt="photo bouton" class="img10" /></a>
        </div>
        </div>


</body>
</html>