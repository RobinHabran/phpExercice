<?php
  function returnExist(){
      $message = '';
    // aucune des deux n'existe
    if (!isset($_GET['toto'])) {
      $message .= 'La variable  language  n\'existe pas ';
    // $language n'existe pas
    }else {
      $message .= $_GET['toto'] . ' ' ;
    }
    if(!isset($_GET['server'])) {
      $message .= 'La variable  server n\'existe pas ';
    } else {
      $message .= $_GET['server'] . ' ' ;
    }
    return $message;
  }
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="../index.css" />
    <title>exercice partie 6</title>
  </head>
  <body>
    <h1>Exercice 4</h1>
    <a title="exerciceLink" href="../index.php" class="accueil">Accueil</a>
    <a title="exerciceLink" href="../exercice1/index.php" class="linkEx">Exercice1</a>
    <a title="exerciceLink" href="../exercice2/index.php" class="linkEx">Exercice2</a>
    <a title="exerciceLink" href="../exercice3/index.php" class="linkEx">Exercice3</a>
    <a title="exerciceLink" href="../exercice5/index.php" class="linkEx">Exercice5</a>
    <a title="exerciceLink" href="../exercice6/index.php" class="linkEx">Exercice6</a>
    <div id="containerAnswer">
      <h2>Réponse: </h2>
      <div id="containerEx">
        <a title="linkTest" href="index.php?">null</a>
        <a title="linkTest" href="index.php?toto=PHP">présence de language</a>
        <a title="linkTest" href="index.php?server=LAMP">présence de server</a>
        <a title="linkTest" href="index.php?toto=PHP&server=LAMP">server & language</a>
        <p><?= returnExist()?></p>
      </div>
    </div>
  </body>
</html>