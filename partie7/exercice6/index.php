<?php
// déclaration variables globales//
    
// fin déclaration //
// fonctions //
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
    /**
     * fonction qui renvoi une phrase dans le cas d'invalidité de la valeur du form
     * @param string $inputVal
     * @return string
     */
    function inputValIncorrect($inputVal) {
        return 'Veuillez renseigner le champ ' . $inputVal;
    }
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="utf-8">
        <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet"/>
        <link rel="stylesheet" href="../exercice.css">
        <title>Exercice 6</title>
    </head>
    <body>
        <div id="containerPage">
            <h1>Exercice 6</h1>
            <div id="containerFormBack">
                <h2>Renseignez vos coordonnées</h2>
                <div id="containerFormFront">
                    <?php
                    if (inputFieldCorrect($_POST['inputFirstname']) && inputFieldCorrect($_POST['inputLastname'])) {
                        echo 'Vos données ont été renseignées avec succès.';
                    } else {
                        if (){
                            if(){
                                echo inputValIncorrect($_POST['inputFirstname']);
                            }else{
                                echo inputValIncorrect($_POST['inputLastname']);
                            }
                        }else{
                            ?>
                            <form class="myForm" action="#" method="POST">
                                <div class="choiceSelect">
                                    <label for="choiceCivility">Civilité : </label>
                                    <select name="choiceCivility" id="choiceCivility" value="<?php isset($_POST['choiceCivility']) ?>">
                                        <option disabled selected>à choisir</option>
                                        <option value="mme">Madame</option>
                                        <option value="mr">Monsieur</option>
                                    </select>
                                </div>
                                <label for="inputFirstname">Prénom :</label>
                                <input type="text" name="inputFirstname" placeholder="Jean" id="inputFirstname" value="<?php isset($_POST['inputFirstname']) ?>"/>
                                <label for="inputLastname">Nom :</label>
                                <input type="text" name="inputLastname" placeholder="Mich" id="inputLastname" value="<?php isset($_POST['inputLastname']) ?>" />
                                <input type="submit" id="submitButton" value="S'enregistrer" />
                            </form>
                            <?php
                    }
                    ?>
                </div>
            </div>
            <div id="links">
                <a href="../index.php" class="linkEx accueil">Accueil</a>
                <a href="../exercice3/index.php" class="linkEx">Exercice3</a>
                <a href="../exercice4/index.php" class="linkEx">Exercice4</a>
                <a href="../exercice5/index.php" class="linkEx">Exercice5</a>
                <a href="../exercice6/index.php" class="linkEx active">Exercice6</a>
                <a href="../exercice7/index.php" class="linkEx">Exercice7</a>
                <a href="../exercice8/index.php" class="linkEx">Exercice8</a>
            </div>
        </div>
    </body>
    <script src="../index.js"></script>
</html>
