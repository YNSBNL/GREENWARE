<?php
include "config.php";

$_SESSION['errormdp']="";
$_SESSION['errorcaptcha']="";

if (isset($_POST['but_submit'])) {

    $uname = mysqli_real_escape_string($con, $_POST['txt_uname']);
    $password = mysqli_real_escape_string($con, $_POST['txt_pwd']);

    if ($uname != "" && $password != "") {

        $sql_query = "select all * from users where username='" . $uname . "' and password='" . $password . "'";
        $result = $con->query($sql_query);
     
        if (isset($_POST['g-recaptcha-response'])) {
            $secret = "6Lf8Ru0dAAAAAEZVVCFQuG62e3xQS0AwXnxQKixo";
            $response = $_POST['g-recaptcha-response'];
            $remoteip = $_SERVER['REMOTE_ADDR'];
            $url = "https://www.google.com/recaptcha/api/siteverify?secret=$secret&response=$response&remoteip=$remoteip";
            $fire = file_get_contents($url);
            $data = json_decode($fire);

        if ($result-> num_rows>0) {
            $_SESSION['connected'] = true;  
            $_SESSION['uname'] = $uname;
            $_SESSION['errormdp']="";
            if($data->success==true)
            header('Location: profil.php');
        } else {
            $_SESSION['errormdp'] = '<p style="color: darkred;"/> Nom d utilisateur ou Mot de Passe incorrect';
        }
    }

    if($data->success==true){
        if ($result-> num_rows>0) {
            $_SESSION['connected'] = true;  
            $_SESSION['uname'] = $uname;
            $_SESSION['errorcaptcha']="";
            header('Location: profil.php');}
    }
    else{
        $_SESSION['errorcaptcha'] ='<p style="color: darkred;"/> Remplir le Captcha';
    }
    }
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <link href="graphique.css" media="all" rel="stylesheet" type="text/css">
    <title>Techsens</title>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>

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

          <!-- Logo Techsens -->
          <br>
            <p>
            <div class="block-formulaire">
                <form method="POST" class="formulaire" action="">
                    <fieldset class="fieldset2">
                        <h1 class="titre-du-formulaire">S'identifier</h1>
                        <div class="block-champ">
                            <input class="champ" type="text" id="txt_uname" name="txt_uname" placeholder="Username ">
                        </div>
                        <div class="block-champ">
                            <input class="champ" type="password" id="txt_uname" name="txt_pwd" placeholder="Password">
                            <br>
                            <br>
                            <?php echo $_SESSION['errormdp']?><br>
                            <?php echo $_SESSION['errorcaptcha']?>
                            <center><div class="row">
                                <div class="g-recaptcha" data-sitekey="6Lf8Ru0dAAAAAJpzstp9a79qEE2wdosC7uGkPjVV" aria-required></div>
                            </div></center>
                            <center><input type="submit" class="button1" name="but_submit" id="but_submit" value="Se Connecter"></center>
                            <div class="lien-champ">
                                <a href="contact.php" class="lien">Mot de Passe Oublié</a><br>
                                <a href="adminid.php" class="lien">Section administrateur</a><br>
                                <a href="gestionnaireid.php" class="lien">Section Gestionnaire</a>
                            </div>
                </form>
            </div>

        </div>
        <br>
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

</html>
