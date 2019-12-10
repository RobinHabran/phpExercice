<?php
  function getValueUrl($variableFirstname,$variableLastname)
  {
    // aucune des deux n'existe
    if (!isset($_GET[$variableFirstname]) && isset($_GET[$variableLastname])) {
      $message = 'La variable ' . $variableFirstname . ' n\'existe pas';
    // $variableFirstname n'existe pas
    }else if(isset($_GET[$variableFirstname]) && !isset($_GET[$variableLastname])) {
      $message = 'La variable ' . $variableLastname . ' n\'existe pas';
    // $variableLastname n'existe pas
    }else if(!isset($_GET[$variableFirstname]) && !isset($_GET[$variableLastname])){
      $message = 'Les variables ' . $variableFirstname . ' et ' . $variableLastname . ' n\'existent pas';
    // les deux variables existent
    } else {
      $message = $_GET[$variableFirstname] . ' ' . $_GET[$variableLastname];
    }
    return $message;
  }
 ?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="../index.css">
    <title>exercice partie 6</title>
  </head>
  <body>
    <h1>Exercice 1 </h1>
    <a href="../index.php" class="accueil">Accueil</a>
    <a href="../exercice2/index.php" class="linkEx">Exercice2</a>
    <a href="../exercice3/index.php" class="linkEx">Exercice3</a>
    <a href="../exercice4/index.php" class="linkEx">Exercice4</a>
    <a href="../exercice5/index.php" class="linkEx">Exercice5</a>
    <a href="../exercice6/index.php" class="linkEx">Exercice6</a>
    <div id="containerAnswer">
      <h2>Réponse: </h2>
      <div id="containerEx">
        <a href="index.php?">null</a>
        <a href="index.php?firstname=Jean">firstname</a>
        <a href="index.php?lastname=Nemare">lastname</a>
        <a href="index.php?lastname=Nemare&firstname=Jean">firstname & lastname</a>
        <?php  ?>
        <p><?= getValueUrl('firstname','lastname')?></p>
      </div>
    </div>
  </body>
</html>
