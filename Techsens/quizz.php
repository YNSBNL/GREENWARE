<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <link href="graphique.css" media="all" rel="stylesheet" type="text/css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>QUIZZ</title>
    <link href="./QUIZ1.css" rel="stylesheet" />
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
<div class="container">
        <p class="contacter"> Mini-Jeu : Quizz </p><br>
        <div id="quiz">
            <h1><span>Q</span>uizz <i class="far fa-question-circle"></i></h1>

            <h2 id="question"></h2>

            <h3 id="score"></h3>


            <div class="choices">
                <div>
                    <button id="guess0" class="btn">
                        <p id="choice0"></p>
                    </button>
                </div>

                <div>
                    <button id="guess1" class="btn">
                        <p id="choice1"></p>
                    </button>
                </div>

                <div>
                    <button id="guess2" class="btn">
                        <p id="choice2"></p>
                    </button>
                </div>

                <div>

                    <button id="guess3" class="btn">
                        <p id="choice3"></p>
                    </button>
                </div>
                <p id="progress"></p>
            </div>
        </div>

    </div>
    <div class="footer6">
        <div class="foot">Techsens est une société cherchant à développer des solutions en accord avec le développement
            durable.</div>
        <img src="logoo.png" alt="photo du logo" />

        <div class="content">
            <div class="barre">
                <br>
                <p>---------------------------------------------------</p>
            </div>
            <div class="photologo">
                <div class="logofb">
                    <a href="accueil.html"> <img src="fb.png" alt="logo fb" /> </p></a>
                </div>
                <div class="logoinsta">
                    <a href="accueil.html"> <img src="insta.png" alt="logo insta" /> </a>
                </div>
                <div class="logotwitter">
                    <a href="accueil.html"> <img src="twitter.png" alt="logo twitter" /></a>
                </div>
                <div class="logolinkedin">
                    <a href="https://www.linkedin.com/in/techsens-a9887b222"> <img src="linkedin.png"
                            alt="logo linkedin" /> </a>
                </div>
            </div>
        </div>
        <div class="end">
            <label for="end">
                <a href="#"> Mentions légales</a> | <a href="#"> Politique de confidentialité</a></label>
        </div>
</body>
<script src="./QUIZ1.js" type="text/javascript"></script>

</html>