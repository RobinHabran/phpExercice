<?php
    date_default_timezone_set('UTC');
    setlocale (LC_TIME, 'fr_FR.utf8','fra'); 
    // déclaration de variable
        $objectifDate = 'mardi 2 août 2016 à 15h00';
    // fin de déclaration de variable
    // fonction qui formate un timestamp à une certaine date 
        function formatTimestamp($sec){
            $result = 'not a number';
            if(is_int($sec)){
                $result = $sec / 31556926 % 12 . ' années, ';
                $result .= $sec / 604800 % 52 . ' semaines, ';
                $result .= $sec / 86400 % 7 . ' jours, ';
                $result .= $sec / 3600 % 24 . ' heures, ';
                $result .= $sec / 60 % 60 . ' minutes et ';
                $result .= $sec % 60 . ' secondes.';
            }
            return $result;
        }
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous"/>
        <link rel="stylesheet" href="../assets/css/index.css" />
        <title>P-9 Exercice 4</title>
    </head>
    <body>
        <?php include '../assets/php/navbar.php'; ?>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <h1>Exercice 4 : </h1>
                    <div class="line"></div>
                    <h2>Consignes : </h2>
                    <p class="consigne"><?= file_get_contents('consigne.txt') ?></p>
                    <div class="row answer">
                        <div class="col-md-8 offset-md-2 text-center answer">
                            <form name="formDate" method="POST">
                                <label for="dayNumber">Jour :</label>
                                <input type="number" id="dayNumber" placeholder="23" value="15" />
                                <label for="dayLetter">Jour :</label>
                                <input type="text" id="dayLetter" placeholder="mardi" value="mardi" />
                                <label for="month">Mois:</label>
                                <input type="text" id="month" placeholder="août" value="août" />
                                <label for="hour">Heure:</label>
                                <input type="number" id="hour" placeholder="15" value="15" />
                                <label for="minute">Minute:</label>
                                <input type="number" id="minute" placeholder="00" value="00" />
                                <label for="second">Seconde:</label>
                                <input type="number" id="second" placeholder="00" value="00" />
                            </form>
                        </div>
                        <div class="col-md-6 offset-md-3 text-center answer">
                            <!-- mktime('H','i','s','n','j','Y') voir doc php -->
                            <p><?= 'Depuis le ' . $objectifDate . ' il s\'est passé ' . formatTimestamp(mktime('15','00','00','8','2','2016')); ?></p>
                            <!-- '%A'= jour en lettre long / '%d'= jour en nombre / '%B'= mois en lettre long / '%G'= année lettre long -->
                            <p><?= 'Nous sommes le ' . (strftime('%A %d %B %G')); ?></p>
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