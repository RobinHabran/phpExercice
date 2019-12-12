<?php 
    // déclaration variables //
    $regexName = '/[a-zéèà\-]/gmi';
    // fin déclaration //
    // fonctions //
    function acceptRegexName($inputVal){
        $bool = (preg_match($inputVal, $regexName)) ? true : false;
        return $bool;
    }
    function inputFieldCorrect($inputId) {
        $bool = (!empty($_POST[$inputId]) && acceptRegexName($inputId)) ? true : false;
        return $bool;
    }
    function submitForm(){
        header('Location: user.php');
    }
    function inputValIncorrect($inputId) {
        echo 'Veuillez renseigner le champ ' . $inputId;
    }
    function submitFormCorrect($inputId){
        (inputFieldCorrect($inputId)) ? submitForm() : exit;
    }
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet"/>
    <link rel="stylesheet" href="../exercice.css">
    <title>Exercice 7</title>
  </head>
  <body>
    <div id="containerPage">
      <h1>Exercice 7</h1>
      <div id="containerFormBack">
        <h2>Renseignez vos coordonnées</h2>
        <div id="containerFormFront">
          <form class="myForm" action="" method="POST">
              <div class="choiceSelect">
                <label for="choiceCivility">Civilité : </label>
                <select name="choiceCivility" id="choiceCivility">
                  <option value="mme">Madame</option>
                  <option value="mr">Monsieur</option>
                </select>
              </div>
            <label for="inputFirstname">Prénom :</label>
            <input type="text" name="inputFirstname" placeholder="Jean" id="inputFirstname" />
            <label for="inputLastname">Nom :</label>
            <input type="text" name="inputLastname" placeholder="Mich" id="inputLastname" />
            <input type="submit" id="submitButton" value="S'enregistrer" />
            <?php 
                (empty($_POST['inputFirstname']))
            ?>
          </form>
        </div>
      </div>
      <div id="links">
        <a href="../index.php" class="linkEx accueil">Accueil</a>
        <a href="../exercice3/index.php" class="linkEx">Exercice3</a>
        <a href="../exercice4/index.php" class="linkEx">Exercice4</a>
        <a href="../exercice5/index.php" class="linkEx">Exercice5</a>
        <a href="../exercice6/index.php" class="linkEx">Exercice6</a>
        <a href="../exercice7/index.php" class="linkEx active">Exercice7</a>
        <a href="../exercice8/index.php" class="linkEx">Exercice8</a>
      </div>
    </div>
  </body>
  <script src="../index.js"></script>
</html>
