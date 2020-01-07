<?php

//déclaration des variables
// tableau des erreurs
$formError = array();
// les regex :
$regexName = '/[a-zéèà \-]+$/i';
//fin déclaration des variables
/*
// on verifie que le bouton submit a été clické
if (isset($_POST['submitButton'])) {
  // on érifie que le champ 'firstname' n'est pas vide
  if (!empty($_POST['firstname'])) {
    // comparaison de valeur avec la regex
    if (preg_match($regexName, $_POST['firstname'])) {
      // 'htmlspecialchars()' remplace le balisage par leur valeur en html. ex: '<script>' devient '&lt script &gt'
      $firstname = htmlspecialchars($_POST['firstname']);
    } else { // cas d'erreur non respect de la syntaxe
      $formError['firstname'] = 'Veuillez indiquer un prénom ne contenant que des lettres majuscules et miuscules';
    }
  } else { // cas d'erreur champ vide
    $formError['firstname'] = 'Veuillez renseigner votre prénom';
  }
}
*/
//création des fonctions
/**
 * fonction qui verifie le bon remplissage des champs de type nom/prénom/ville/...etc
 * @param type string $nameInput qui est le 'name' de l'input
 * @param type string $regexName qui est la regex à comparer
 */
function verifName($nameInput,$regexName) {
  // affectation de la valeur du champ '$nameInput' dans le array de la super golbale POST
  $valueInput = $_POST[$nameInput];
  // on érifie que le champ '$nameInput' n'est pas vide
  if (!empty($valueInput)) {
    // comparaison de valeur avec la regex
    if (preg_match($regexName, $valueInput)) {
      // 'htmlspecialchars()' remplace le balisage par leur valeur en html. ex: '<script>' devient '&lt script &gt'
      $nameInput = htmlspecialchars($valueInput);
    } else { // cas d'erreur du non respect de la syntaxe
      $formError[$nameInput] = 'Veuillez indiquer un ' . $nameInput . ' ne contenant que des lettres majuscules et miuscules';
    }
  } else { // cas d'erreur champ vide
    $formError[$nameInput] = 'Veuillez renseigner votre ' . $nameInput;
  }
}
//fin de création des fonctions
// appel des fonctions
// verification du champ 'firstname'
verifName('firstname', $regexName);