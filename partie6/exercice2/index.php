<?php
  function returnAge($age){
    // age n'existe pas
    if (!isset($_GET[$age])) {
      $message = 'la variable ' . $age . ' n\'existe pas';
    // age trouvé
    }else{
      $message = $_GET[$age];
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
    <h1>Exercice 2</h1>
    <a href="../index.php" class="accueil">Accueil</a>
    <a href="../exercice1/index.php" class="linkEx">Exercice1</a>
    <a href="../exercice3/index.php" class="linkEx">Exercice3</a>
    <a href="../exercice4/index.php" class="linkEx">Exercice4</a>
    <a href="../exercice5/index.php" class="linkEx">Exercice5</a>
    <a href="../exercice6/index.php" class="linkEx">Exercice6</a>
    <div id="containerAnswer">
      <h2>Réponse: </h2>
      <div id="containerEx">
        <a href="index.php?">null</a>
        <a href="index.php?age=26">age</a>
        <?php  ?>
        <p><?= returnAge('age')?></p>
      </div>
    </div>
  </body>
</html>
