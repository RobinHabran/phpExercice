<!DOCTYPE html>
<?php
    // fonctions
        /**
         * fonction de comparaison de la valeur du POST avec la regex
         * @param string $inputVal
         * @return boolean
         */
        function acceptRegexName($inputVal) {
            $regexName = '/^[a-zéèà\- ]+$/i';
            $bool = (preg_match($regexName, $inputVal));
            return $bool;
        }
        /**
         * fonction qui vérifie si la valeur du POST est correct
         * @param string $inputVal
         * @return boolean 
         */
        function inputFieldCorrect($inputVal) {
            $bool = false;
            if (isset($inputVal)){
                if(acceptRegexName($inputVal)){
                    $bool = true;
                }
            }
            return $bool;
        }
        // vérification de l'upload du fichier
        function verifFile($inputFile) {
            // vérification de l'upload du fichier
            if (isset($_FILES[$inputFile]) && $_FILES[$inputFile]['error'] == 0){
                // vérification de la taille du fichier
                if ($_FILES[$inputFile]['size'] <= 1000000){
                    // vérification de l'extension du fichier
                    if (in_array($extensionFile, $extensionsAllowed)){
                        return 1;
                     }
                }
            }
            return 0;
        }
    // fin déclaration de founctions
        if(isset($_POST['submitButton'])){
            if(isset($_FILES['inputFile']) && $_FILES['inputFile']['error'] == 0){
                $infoFile = pathinfo($_FILES['inputFile']['name']);
                $extensionFile = $infoFile['extension'];
                $extensionsAllowed = array('pdf');
            }
        }
?>
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
            <?php
                // test d'existence d'un fichier upload
                if (isset($_POST['submitButton']) && inputFieldCorrect($_POST['inputFirstname']) && inputFieldCorrect($_POST['inputLastname']) && verifFile('inputFile')) {
                    // upload du fichier
                    move_uploaded_file($_FILES['inputFile']['tmp_name'], 'uploads/' . basename($_FILES['inputFile$']['name']));
                    echo 'Vos données ont été renseignées avec succès.';
                } else {
                ?><form class="myForm" action="" method="POST" enctype="multipart/form-data">
                    <div class="choiceSelect">
                      <label for="choiceCivility">Civilité : </label>
                      <select name="choiceCivility" id="choiceCivility">
                          <option disabled selected>à choisir</option>
                          <option value="mme">Madame</option>
                          <option value="mr">Monsieur</option>
                      </select>
                    </div>
                    <label for="inputFirstname">Prénom :</label>
                    <input type="text" name="inputFirstname" placeholder="Jean" id="inputFirstname" />
                    <label for="inputLastname">Nom :</label>
                    <input type="text" name="inputLastname" placeholder="Mich" id="inputLastname" />
                    <label for="inputFile">Votre photo de profil :</label>
                    <input type="file" name="inputFile" id="inputFile" />
                    <input type="submit" name="submitButton" id="submitButton" value="S'enregistrer" />
                    <?php
                    // si bouton de submit a été clické
                    if(isset($_POST['submitButton'])){
                        // cas du champ upload vide
                        if (empty($_FILES['inputFile'])){
                            ?><p class="error"><?php echo 'Veuillez upload une photo de profil';
                        }
                        // cas du fichier upload trop lourd
                        if (isset($_FILES['inputFile']) && $_FILES['inputFile']['error'] == 0){
                            ?><p class="error"><?php echo 'Veuillez upload une photo de profil';
                            if ($_FILES['inputFile']['size'] > 1000000){
                                ?><p class="error"><?php echo 'Votre image est trop volumineuse, 1 Mo maximum autorisé';
                            }
                        }
                        // cas du fichier upload n'est pas une image
                        if (isset($_FILES['inputFile']) && $_FILES['inputFile']['error'] == 0){
                            if ($_FILES['inputFile']['size'] <= 1000000){
                                if (!in_array($extensionFile, $extensionsAllowed)){
                                    ?><p class="error"><?php echo 'Veillez à ce que votre fichier soit une image';
                                }
                            }
                        }
                        // case où les champs sont incorrect
                        if(!inputFieldCorrect($_POST['inputFirstname']) && !inputFieldCorrect($_POST['inputLastname'])){
                            ?><p class="error"><?= 'Veuillez remplir le champ Prénom';?></p><?php
                            ?><p class="error"><?= 'Veuillez remplir le champ Nom';?></p><?php
                        // cas où le champ Firstname est incorrect
                        }else if(!inputFieldCorrect($_POST['inputFirstname'])){
                            ?><p class="error"><?= 'Veuillez remplir le champ Prénom avec des lettres';?></p><?php
                        // cas où le champ Lastname est incorrect
                        }else if(!inputFieldCorrect($_POST['inputLastname'])){
                            ?><p class="error"><?= 'Veuillez remplir le champ Nom';?></p><?php
                        }
                    }
                }
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
