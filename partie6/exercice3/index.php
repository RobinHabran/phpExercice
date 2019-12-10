<?php
  function returnDate($startDate,$endDate){
    // aucune des deux n'existe
    if (!isset($_GET[$startDate]) && isset($_GET[$endDate])) {
      $message = 'La variable ' . $startDate . ' n\'existe pas';
    // $startDate n'existe pas
    }else if(isset($_GET[$startDate]) && !isset($_GET[$endDate])) {
      $message = 'La variable ' . $endDate . ' n\'existe pas';
    // $endDate n'existe pas
    }else if(!isset($_GET[$startDate]) && !isset($_GET[$endDate])){
      $message = 'Les variables ' . $startDate . ' et ' . $endDate . ' n\'existent pas';
    // les deux variables existent
    } else {
      $message = $_GET[$startDate] . ' ' . $_GET[$endDate];
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
    <h1>Exercice 3</h1>
    <a href="../index.php" class="accueil">Accueil</a>
    <a href="../exercice1/index.php" class="linkEx">Exercice1</a>
    <a href="../exercice2/index.php" class="linkEx">Exercice2</a>
    <a href="../exercice4/index.php" class="linkEx">Exercice4</a>
    <a href="../exercice5/index.php" class="linkEx">Exercice5</a>
    <a href="../exercice6/index.php" class="linkEx">Exercice6</a>
    <div id="containerAnswer">
      <h2>Réponse: </h2>
      <div id="containerEx">
        <a href="index.php?">null</a>
        <a href="index.php?startDate=2/05/2016">startDate</a>
        <a href="index.php?endDate=27/11/2016">endDate</a>
        <a href="index.php?startDate=2/05/2016&endDate=27/11/2016">startDate & endDate</a>
        <?php  ?>
        <p><?= returnDate('startDate','endDate')?></p>
      </div>
    </div>
  </body>
</html>

index.php?startDate=2/05/2016&endDate=27/11/2016
