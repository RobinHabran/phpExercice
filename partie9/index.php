<?php

//function qui retourne le contenu d'un dossier sous forme d'un tableau trié
function changeDirectory() {
    // commence par 'exercice' et finie par un ou plusieurs chiffres, pas sensible à la casse
    $format = '/^exercice[1-9]+$/i';
    // pointeur sur le répertoire courant
    $pointerDirectoryActual = opendir(getcwd());
    $arrayEntry = array();
    $counter = 0;
    while ($entry = readdir($pointerDirectoryActual)) {
        if (preg_match($format, $entry)) {
            $arrayEntry[$counter] = $entry;
            $counter++;
        }
    }
    closedir($pointerDirectoryActual);
    sort($arrayEntry);
    return $arrayEntry;
}

// fonction qui lit le contenu d'un et l'affiche
function readAndShowFileContaint($dir, $fileName) {
    $file = fopen($dir . '/' . $fileName, 'r');
    $arraySentence = array();
    $index = 0;
    $sentence = '';
    while (!feof($file)) {
        $line = fgets($file);
        $sentence .= $line;
        //echo $sentence;
    }
    fclose($file);
    return $sentence;
}
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <link rel="stylesheet" href="assets/css/index.css" />
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous"/>
        <title>Partie 8</title>
    </head>
    <body>
        <?php include 'assets/php/navbar.php';?>
        <div id="container-fluid">
            <div class="col-md-8 offset-md-2">
                <h1>Partie 9 exercice php</h1>
                <?php
                $arrayFiles = changeDirectory();
                foreach ($arrayFiles as $element) {
                    ?><h2>Énoncé : </h2>
                    <p><?php echo readAndShowFileContaint($element, 'consigne.txt') ?></p>
                    <div class="row"><button type="button" class="btn btn-primary exercice"><a href="<?= $element; ?>"><?= $element; ?></a></button></div>
                        <?php
                    }
                    ?>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    </body>
</html>