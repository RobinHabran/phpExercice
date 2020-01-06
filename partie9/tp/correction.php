<?php
$months = (!empty($_GET['months']) ? $_GET['months'] : date('m'));
$years = (!empty($_GET['years']) ? $_GET['years'] : date('Y'));
//On recupère le nombre des jours dans le mois    
$numberOfDaysInMonth = date('t', mktime(0, 0, 0, $months, 1, $years));
//On recupère la position du premier jour du mois dans la semaine 
$firstDayOfMonth = date('N', mktime(0, 0, 0, $months, 1, $years));
//on recupère la position du dernier jour du mois dans la semaine
$lastDayOfMonth = date('N', mktime(0, 0, 0, $months, $numberOfDaysInMonth, $years));
//On calcule le nombre de cellule vide avant que le mois commence
$beforeMonthStarts = $firstDayOfMonth - 1;
//On calcule le nombre de cellule vide après que le mois soit  terminé
$afterMonthEnds = 7 - $lastDayOfMonth;
//On calcule les nombres totales des cellules qui seront affichées
$totalCellNumber = $beforeMonthStarts + $numberOfDaysInMonth + $afterMonthEnds;
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="style.css" />
        <title>Partie 9 TP</title>
    </head>
    <body>
        <form method="GET" action="#">
            <label>Choisissez le mois</label>
            <?php
            // Définition du tableau de des dans l'année
            $arrayMonths = array(
                '1' => 'Janvier',
                '2' => 'Fevrier',
                '3' => 'Mars',
                '4' => 'Avril',
                '5' => 'Mai',
                '6' => 'Juin',
                '7' => 'Juillet',
                '8' => 'Août',
                '9' => 'Septembre',
                '10' => 'Octobre',
                '11' => 'Novembre',
                '12' => 'Décembre'
            );
            // Parcours du tableau
            ?>
            <select name="months">
                <?php
                foreach ($arrayMonths as $numberOfMonth => $nameOfMonth) {
                    ?>
                    <option value="<?= $numberOfMonth ?>" <?= $months == $numberOfMonth ? 'selected' : '' ?>><?= $nameOfMonth ?></option>
                    <?php
                }
                ?>
            </select>
            <label>Choisissez l'année</label>
            <select name="years">
                <?php
                for ($year = 1970; $year <= 2030; $year++) {
                    // Affichage de la ligne
                    ?>
                    <option value="<?= $year ?>" <?= $years == $year ? 'selected' : '' ?>><?= $year ?></option>
                    <?php
                }
                ?> 
            </select> 
            <input type="submit" name="validate" id="validate" value="valider">
        </form> 
        <table>
            <thead>
                <tr>
                    <th>Lundi</th>
                    <th>Mardi</th>
                    <th>Mercredi</th>
                    <th>Jeudi</th>
                    <th>Vendredi</th>
                    <th>Samedi</th>
                    <th>Dimanche</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <?php
                    $dayNumber = 1;
                    for ($cellNumber = 1; $cellNumber <= $totalCellNumber; $cellNumber++) {
                        if ($cellNumber >= $firstDayOfMonth && $dayNumber <= $numberOfDaysInMonth) {
                            ?>
                            <td><?= $dayNumber ?></td>
                            <?php
                            $dayNumber++;
                        } else {
                            ?>
                            <td></td>
                            <?php
                        }
                        ?>
                        <?php if ($cellNumber % 7 == 0) { ?>
                        </tr><tr>
                            <?php
                        }
                    }
                    ?>
                </tr>
            </tbody>
        </table>
    </body>
</html>
