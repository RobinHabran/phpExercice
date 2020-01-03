<?php
    date_default_timezone_set('Europe/Paris'); 
    setlocale (LC_TIME, 'fr_FR.utf8','fra'); 
    // déclaration de variable
        $actuaDate = date('l j F Y');
    // fin de déclaration de variable days
    // fonction qui formate un timestamp à une certaine date 
        // demande 'date(N)' en parametre soit 1=lundi, 2=mardi ...etc
        function day($dayNumber){
            $dayLetter = array('lundi' , 'mardi' , 'mercredi' , 'jeudi' , 'vendredi' , 'samedi' , 'dimanche' );
            return $dayLetter[$dayNumber-1];
        }
        // demande 'date(n)' en parametre soit 1=janvier, 2=février ...etc
        function month($monthNumber){
            $monthLetter = array('janvier' , 'février' , 'mars' , 'avril' , 'mai' , 'juin' , 'juillet' ,'août' , 'septembre' , 'octobre' , 'novembre' , 'décembre');
            return $monthLetter[$monthNumber-1];
        }
    // on récupère le nombre de jour en janvier 2020
    $numberOfDayInMonth = date('t', mktime(0,0,0,1,1,2020));
    // on récupère la position du 1er jour du mois dans la semaine. ex: janvier commence par mercredi = 3
    $firstDayOfMonth = date('N', mktime(0,0,0,1,1,2020));
    // on récupère la position du dernier jour du mois dans la semaine ex: janvier commence par mercredi = 3
    $LastDayOfMonth = date('N', mktime(0,0,0,1,$numberOfDayInMonth,2020));
    // On calcule nombre de cellule vide avant que le mois commence
    $beforeMonthStart = $firstDayOfMonth -1;
    // on calcule le nombre de cellule vide apres que le mois soit terminé
    $afterMonthEnd = 7 - $LastDayOfMonth;
    // nombre de cedllule au total
    $totalCellNumber = $beforeMonthStart + $numberOfDayInMonth + $afterMonthEnd;
    
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous"/>
        <link rel="stylesheet" href="../assets/css/index.css" />
        <link rel="stylesheet" href="../assets/css/calendar.css" />
        <title>P-9 TP</title>
    </head>
    <body>
        <?php include '../assets/php/navbar.php'; ?>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <h1>Exercice TP : </h1>
                    <div class="line"></div>
                    <h2>Consignes : </h2>
                    <p class="consigne"><?= file_get_contents('consigne.txt') ?></p>
                    <div class="row">
                      <div class="col-8 offset-2">
                        <!-- form -->
                        <form action="" id="calendarForm">
                          <select name="month" form="calendarForm">
                            <?php
                              for ($j=1; $j<=12; $j++){
                                ?><option value="<?= month($j);?>"><?= month($j);?></option>
                                <?php
                              }
                            ?>
                          </select>
                          <select name="year" form="calendarForm">
                            <?php
                              for ($k=0; $k<=20; $k++){
                                $year = date('Y',strtotime('-10 years'));
                                $optionYear = $year += $k;
                                ?><option value="<?= $optionYear;?>"><?= $optionYear;?></option>
                                <?php
                              }
                            ?>
                          </select>
                          <input type="submit">
                        </form>
                        <!-- row days -->
                        <div class="row">
                          <table>
                            <thead>
                              <!-- <tr> = table row -->
                              <tr>
                                <?php
                                  for ($i=1; $i<=7; $i++){
                                    ?><th><?= day($i);?></th>
                                    <?php
                                  }
                                ?>
                              </tr>
                            </thead>
                          <!-- row cases -->
                          <tbody>
                            <tr>
                              <?php
                                $dayNumber = 1;
                                for ($celluleNumber = 1; $celluleNumber <= $totalCellNumber; $celluleNumber++){
                                  if ($celluleNumber >= $firstDayOfMonth && $dayNumber <= $numberOfDayInMonth){
                                    ?>
                                    <td><?= $dayNumber ?></td>
                                    <?php
                                    $dayNumber++;
                                  }else{
                                    // décalage du 1er au premier jour du mois
                                    ?>
                                      <td></td>
                                    <?php
                                  }
                                  ?>
                                  <!-- <td> = table cellule -->
                                  <?php if ($celluleNumber % 7 == 0){ ?>
                                    </tr><tr>
                                    <?php
                                  }
                                }
                              ?>
                            </tr>
                          </tbody>
                        </table>
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