<?php
  function returnExist($building,$room){
    // aucune des deux n'existe
    if (!isset($_GET[$building]) && isset($_GET[$room])) {
      $message = 'La variable ' . $building . ' n\'existe pas';
    // $building n'existe pas
    }else if(isset($_GET[$building]) && !isset($_GET[$room])) {
      $message = 'La variable ' . $room . ' n\'existe pas';
    // $room n'existe pas
    }else if(!isset($_GET[$building]) && !isset($_GET[$room])){
      $message = 'Les variables ' . $building . ' et ' . $room . ' n\'existent pas';
    // les deux variables existent
    } else {
      $message = $_GET[$building] . ' ' . $_GET[$room];
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
    <h1>Exercice 4</h1>
    <a href="../index.php" class="accueil">Accueil</a>
    <a href="../exercice1/index.php" class="linkEx">Exercice1</a>
    <a href="../exercice2/index.php" class="linkEx">Exercice2</a>
    <a href="../exercice3/index.php" class="linkEx">Exercice3</a>
    <a href="../exercice5/index.php" class="linkEx">Exercice5</a>
    <a href="../exercice6/index.php" class="linkEx">Exercice6</a>
    <div id="containerAnswer">
      <h2>Réponse: </h2>
      <div id="containerEx">
        <a href="index.php?">null</a>
        <a href="index.php?building=12">building</a>
        <a href="index.php?room=101">room</a>
        <a href="index.php?building=12&room=101">room & building</a>
        <?php  ?>
        <p><?= returnExist('building','room')?></p>
      </div>
    </div>
  </body>
</html>
