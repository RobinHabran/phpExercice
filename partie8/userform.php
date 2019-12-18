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
        <div class="container-fluid"
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <h1>Exercice 3 : Page des cookies : </h1>
                    <div class="line"></div>
                    <h2>Consignes : </h2>
                    <p class="consigne"><?= file_get_contents('exercice3/consigne.txt') ?></p>
                    <h3>Veuillez valider vos informations de connexion</h3>
                    <div class="row">
                        <div class="col-md-3 offset-md-3 text-center">
                            <p>Nom d'Utilisateur : <?= $_COOKIE['username'] ?></p>
                        </div>
                        <div class="col-md-3 text-center">
                            <p>Mot de passe : <?= $_COOKIE['passeword'] ?></p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 offset-md-3 text-center">
                            <a class="pointer button" href="exercice3/index.php">Back</a>
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