<?php
  //function qui retourne le contenu d'un dossier sous forme d'un tableau trié
  function changeDirectory()
  {
    // commence par 'exercice' et finie par un ou plusieurs chiffres, pas sensible à la casse
    $format = '/^exercice[1-9]+$/i';
    // pointeur sur le répertoire courant
    $pointerDirectoryActual = opendir(getcwd());
    $arrayEntry = array();
    $counter = 0;
    while($entry = readdir($pointerDirectoryActual)) {
      if (preg_match($format,$entry)) {
        $arrayEntry[$counter] = $entry;
        $counter++;
      }
    }
    closedir($pointerDirectoryActual);
    sort($arrayEntry);
    return $arrayEntry;
  }
  // fonction qui lit le contenu d'un et l'affiche
  function readAndShowFileContaint($dir,$fileName){
    $file = fopen($dir . '/' . $fileName,'r');
    $arraySentence = array();
    $index = 0;
    $sentence='';
    while(! feof($file)) {
      $line = fgets($file);
      $sentence .= $line. "<br>";
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
    <link rel="stylesheet" href="index.css">
    <title>Partie 6</title>
  </head>
  <body>
    <div id="container">
      <h1>Partie 7 exercice php</h1>
      <ul>
        <?php
          // unserialize
          $arrayFiles = changeDirectory();
          foreach ($arrayFiles as $element) {
            ?><h2>Énoncé : </h2>
            <p><?php // readActualDir(); ?></p>
            <p><?php echo readAndShowFileContaint($element,'consigne.txt') ?></p>
            <li><a href="<?=$element; ?>"><?=$element; ?></a></li>
            <?php
          }
        ?></ul>
    <div>
  </body>
</html>
