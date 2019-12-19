<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous"/>
        <link rel="stylesheet" href="../exercice.css" />
        <title>P-8 Exercice 4 </title>
    </head>
    <body>
        <?php include '../navbar.php'; ?>
        <div class="container-fluid"
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <h1>Exercice 4 : </h1>
                    <div class="line"></div>
                    <h2>Consignes : </h2>
                    <p class="consigne"><?= file_get_contents('consigne.txt') ?></p>
                    <div class="row">
                        <div class="col-md-6 offset-md-3 align-center">
                            <form id="form" action="../userform.php" method="POST">
                                <label for="username">Nom d'utilisateur : </label>
                                <input type="text" name="username" placeholder="JeanMich60" id="username" required/>
                                <label for="password">Mot de passe : </label>
                                <input type="password" name="password" placeholder="**********" id="password" required/>
                                <input type="checkbox" name="userPolitics" id="userPolitics" required />
                                <label for="userPolitics" id="userPoliticsLabel" class="pointer">J'accepte les &nbsp;</label>
                                <a id="userPoliticsLink" class="pointer">Conditions d'Utilisation</a>
                                <input type="submit" name="submitButton" id="submitButton" value="Se connecter" class="pointer" />
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script> 
    </body>
</html>