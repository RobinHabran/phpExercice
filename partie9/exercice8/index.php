<?php
    date_default_timezone_set('Europe/Paris'); 
    setlocale (LC_TIME, 'fr_FR.utf8','fra'); 
    // déclaration de variable
        $actuaDate = date('l j F Y');
    // fin de déclaration de variable days
    // fonction qui formate un timestamp à une certaine date 
        // demande 'date(N)' en parametre soit 1=lundi, 2=mardi ...etc
        function actualDay($dayNumber){
            $dayLetter = array('lundi' , 'mardi' , 'mercredi' , 'jeudi' , 'vendredi' , 'samedi' , 'dimanche' );
            return $dayLetter[$dayNumber-1];
        }
        // demande 'date(n)' en parametre soit 1=janvier, 2=février ...etc
        function actualMonth($monthNumber){
            $monthLetter = array('janvier' , 'février' , 'mars' , 'avril' , 'mai' , 'juin' , 'juillet' ,'août' , 'septembre' , 'octobre' , 'novembre' , 'décembre');
            return $monthLetter[$monthNumber-1];
        }
        // return la date au format 'Jeudi 12 février 2020' 
        function sentenceOfDateFr(){
          // jour de la semaine en chiffre soit 1=lundi, 2=mardi ...etc
          $actualDayOfWeek = date('N',strtotime('-20 days'));
          // jour du mois en chiffre
          $actualDayNumber = date('d',strtotime('-20 days'));
          // mois en chiffre soit 1=janvier, 2=février ...etc
          $actualMonthNumber = date('m',strtotime('-20 days'));
          // année en chiffre format YYYY 
          $actualYearNumber = date('Y',strtotime('-20 days'));
          return actualDay($actualDayOfWeek) . ' ' . $actualDayNumber . ' ' . actualMonth($actualMonthNumber) . ' ' . $actualYearNumber;
        }
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous"/>
        <link rel="stylesheet" href="../assets/css/index.css" />
        <title>P-9 Exercice 7</title>
    </head>
    <body>
        <?php include '../assets/php/navbar.php'; ?>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <h1>Exercice 7 : </h1>
                    <div class="line"></div>
                    <h2>Consignes : </h2>
                    <p class="consigne"><?= file_get_contents('consigne.txt') ?></p>
                    <div class="row">
                      <div class='cold-md-6 offset-md-4'>
                        <h3>Version UX : </h3>
                      </div>
                    </div>
                    <div class="row answer">
                        <div class="col-md-6 offset-md-3 text-center">
                            <p>Il y a 20 jours nous étions le   <span class="bold"><?= date('d/m/Y',strtotime('-20 days')); ?></span></p>
                        </div>
                    </div>
                    <div class="row">
                      <div class='cold-md-6 offset-md-4'>
                        <h3>Version simple : </h3>
                      </div>
                    </div>
                    <div class="row answer">
                        <div class="col-md-6 offset-md-3 text-center">
                            <p>Il y a 20 jours nous étions le   <span class="bold"><?= sentenceOfDateFr(); ?></span>.</p>
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