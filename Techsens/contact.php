<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8" />
	<link rel="stylesheet" href="graphique.css" />

</head>

<body class="body4">

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

		<div class="container4">
			<p class="contacter4"> Contactez-nous </p><br>
			<img scr="enveloppe.pnj">
			<span>
				<form action="contacts_details.php" method="post">
					<div class="formulaire4">

						<label for="Society">Société*</label><br>
						<input class="boxe" type="text" name="Society" required />
						<br>
						<label for="LastName">Nom*</label><br>
						<input class="boxe" type="text" name="LastName" id="LastName" required />
						<br>
						<label for="FirstName">Prénom*</label><br>
						<input class="boxe" type="text" name="FirstName" id="FirstName" required />
						<br>
						<label for="email">E-mail professionnel*</label><br>
						<input class="boxe" type="text" name="email" id="email" required />
						<br>
						<label for="phone">Téléphone*</label><br>
						<input class="boxe" type="text" name="phone" id="phone" required />
						<br>
						<label for="Commentaire">Message</label><br>
						<input class="boxe" type="text" name="Commentaire" id="Commentaire" />

						<p>
							<input type="checkbox" name="polideconf" id="polideconf" required />
							<label for="polideconf">J’ai pris connaissance de la
								<a href="#"> politique de confidentialité</a> et j'autorise la team TechSens à m'envoyer des informations</label><br />
						</p>

						<input class="button51" type="Submit" name="Submit" id="Submit" value="Submit">


				</form>
		</div>

		<div class="texteleft">
			<p>Vous êtes intéréssés par notre contenu, et souhaitez en savoir plus !
				<br>L'équipe Techsens vous invite à remplir le formulaire ci-contre.
				<br><br><br><br>
				<img class="fleche" src="fleche.png">


				Notre équipe technique répondra à votre demande dans les meilleurs délais..<br><br><br>


				Vous pouvez également nous joindre au numéro suivant: "01 28 76 34 56"
			</p>
		</div>
		</span>

		</div>


		<div class="footer5">
			<div class="foot">Techsens est une société cherchant à développer des solutions en accord avec le développement durable.</div>
			<img src="logoo.png" alt="photo du logo" />

			<div class="content">
				<div class="barre">
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
						<a href="https://www.linkedin.com/in/techsens-a9887b222"> <img src="linkedin.png" alt="logo linkedin" /> </a>
					</div>
				</div>
			</div>
			<div class="end">
				<label for="end">
					<a href="#" class="white34"> Mentions légales</a> | <a href="#" class="white34"> Politique de confidentialité</a></label>
			</div>
		</div>

</body>

</html>