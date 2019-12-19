<?php
    function showCookie($cookie) {
        return (isset($_COOKIE[$cookie])) ? $_COOKIE[$cookie] : $cookie . ' n\'existe pas' ;
    }
    
    if(isset($_POST['submitButton']) && isset($_POST['username']) && isset($_POST['password'])){
        setcookie('username', $_POST['username'], time() + 10*60, null , null , false ,true);
        setcookie('password', $_POST['password'], time() + 10*60, null , null , false ,true);
    }
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous"/>
        <link rel="stylesheet" href="exercice.css" />
        <title>P-8 Exercice 3 </title>
    </head>
    <body>
        <?php include 'navbar.php'; ?>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6 offset-md-3 align-center">
                    <h1>Exercice 3 : Page des cookies : </h1>
                    <div class="line"></div>
                    <h2>Consignes : </h2>
                    <p class="consigne"><?= file_get_contents('exercice4/consigne.txt') ?></p>
                    <h3>Veuillez valider vos informations de connexion</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 offset-md-3 text-center">
                    <p>Nom d'Utilisateur : <?= showCookie('username'); ?></p>
                </div>
                <div class="col-md-3 text-center">
                    <p>Mot de passe : <?= showCookie('password'); ?></p>
                </div>
            </div>
            <div class="row rowButton">
                <div class="col-md-6 offset-md-3 text-center">
                    <a class="pointer button" href="exercice4/index.php">Modifier Formulaire</a>
                </div>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    </body>
</html>