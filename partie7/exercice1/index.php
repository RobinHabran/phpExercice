<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="../exercice.css" />
    <title>Exercice 1</title>
  </head>
  <body>
    <div id="containerPage">
      <h1>Exercice 1</h1>
      <div id="containerFormBack">
        <h2>Renseignez vos coordonnées</h2>
        <div id="containerFormFront">
          <form class="myForm" action="user.php" method="GET">
            <label for="inputFirstname">Prénom :</label>
            <input type="text" name="inputFirstname" placeholder="Jean" id="inputFirstname" />
            <label for="inputLastname">Nom :</label>
            <input type="text" name="inputLastname" placeholder="Mich" id="inputLastname" />
            <input type="submit" id="submitButton" value="S'enregistrer" />
          </form>
        </div>
      </div>
      <div id="links">
        <a href="../index.php" class="linkEx accueil">Accueil</a>
        <a href="../exercice1/index.php" class="linkEx active">Exercice1</a>
        <a href="../exercice2/index.php" class="linkEx">Exercice2</a>
        <a href="../exercice3/index.php" class="linkEx">Exercice3</a>
        <a href="../exercice4/index.php" class="linkEx">Exercice4</a>
        <a href="../exercice5/index.php" class="linkEx">Exercice5</a>
        <a href="../exercice6/index.php" class="linkEx">Exercice6</a>
      </div>
    </div>
  </body>
  <script src="../index.js"></script>
</html>
