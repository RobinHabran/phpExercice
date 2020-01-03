<?php
    date_default_timezone_set('UTC');
    setlocale (LC_TIME, 'fr_FR.utf8','fra'); 
    // déclaration de variable
        
    // fin de déclaration de variable
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous"/>
        <link rel="stylesheet" href="../assets/css/index.css" />
        <title>P-9 Exercice 6</title>
    </head>
    <body>
        <?php include '../assets/php/navbar.php'; ?>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <h1>Exercice 6 : </h1>
                    <div class="line"></div>
                    <h2>Consignes : </h2>
                    <p class="consigne"><?= file_get_contents('consigne.txt') ?></p>
                    <div class="row answer">
                        <div class="col-md-6 offset-md-3 text-center answer">
                            <p>le mois de <span class="bold">février</span> de l'année <span class="bold">2016</span> a compté <?= round(((mktime('00','00','00','3','1','2016')) - (mktime('00','00','01','2','1','2016')))/ 86400); ?> jours.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    </body>
</html>