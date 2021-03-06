<?php
    if(isset($_POST['submitButton'])){
        setcookie('username', $_POST['usernameLogin'], time() + 1*3600);
        setcookie('password', $_POST['passwordLogin'], time() + 1*3600);
    }
    function removeCookie($cookieName) {
        if(isset($_COOKIE[$cookieName])){
            unset($_COOKIE[$cookieName]);
            setcookie($cookieName, null, -1, '/');
            return true;
        }
        return false;
    }
    function showCookie($cookie) {
        return (isset($_COOKIE[$cookie])) ? $_COOKIE[$cookie] : $cookie . ' n\'existe pas' ;
    }
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous"/>
        <link rel="stylesheet" href="../exercice.css" />
        <title>P-8 Exercice 3 </title>
    </head>
    <body>
        <?php include '../navbar.php'; ?>
        <div class="container-fluid"
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <h1>Exercice 3 : </h1>
                    <div class="line"></div>
                    <h2>Consignes : </h2>
                    <p class="consigne"><?= file_get_contents('consigne.txt') ?></p>
                    <div class="row">
                        <div class="col-md-6 offset-md-3 text-center">
                        <?php   
                            if(isset($_POST['submitButton']) && isset($_POST['usernameLogin']) && isset($_POST['passwordLogin'])){
                                ?>
                                <div>
                                    <p>Nom d'Utilisateur : <?= showCookie('username')?> 
                                    <p>Mot de passe : <?= showCookie('password');?>
                                </div>
                                <?php
                                removeCookie('username'); removeCookie('password');
                            }else{
                        ?><form id="form" action="" method="POST">
                            <label for="usernameLogin">Nom d'utilisateur : </label>
                            <input type="text" name="usernameLogin" placeholder="JeanMich60" id="usernameLogin" required/>
                            <label for="passwordLogin">Mot de passe : </label>
                            <input type="password" name="passwordLogin" placeholder="**********" id="passewordLogin" required/>
                            <input type="checkbox" name="userPolitics" id="userPolitics" required />
                            <label for="userPolitics" id="userPoliticsLabel" class="pointer">J'accepte les &nbsp;</label>
                            <a id="userPoliticsLink" class="pointer">Conditions d'Utilisation</a>
                            <input type="submit" name="submitButton" id="submitButton" value="Se connecter" class="pointer" />
                        </form>
                        <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        <!-- Bootstrap -->
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    </body>
</html>