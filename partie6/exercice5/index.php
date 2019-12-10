<?php
  function returnExist($week){
    // aucune des deux n'existe
    if (!isset($_GET[$week])) {
      $message = 'La variable ' . $week . ' n\'existe pas';
    } else {
      $message = $_GET[$week];
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
    <h1>Exercice 5</h1>
    <a href="../index.php" class="accueil">Accueil</a>
    <a href="../exercice1/index.php" class="linkEx">Exercice1</a>
    <a href="../exercice2/index.php" class="linkEx">Exercice2</a>
    <a href="../exercice3/index.php" class="linkEx">Exercice3</a>
    <a href="../exercice4/index.php" class="linkEx">Exercice4</a>
    <a href="../exercice6/index.php" class="linkEx">Exercice6</a>
    <div id="containerAnswer">
      <h2>Réponse: </h2>
      <div id="containerEx">
        <a href="index.php?">null</a>
        <a href="index.php?week=12">week</a>
        <?php  ?>
        <p><?= returnExist('week')?></p>
      </div>
    </div>
  </body>
</html>
