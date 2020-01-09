<?php

//déclaration des variables
// tableau des erreurs
$formError = array();
// les regex :
$regexName = '/^[a-zéèà \-]+$/i';
$regexCompany = '/^[.^;]*$/i';
$regexAge = '/^[1-110]$/';
//fin déclaration des variables
// on verifie que le bouton submit a été clické
if (isset($_POST['submitButton'])) {
  // on érifie que le champ 'firstname' et 'lastname' n'est pas vide
  if (!empty($_POST['firstname'])) { // cas d'erreur firstname && lastname champ vide
    // comparaison de valeur avec la regex
    if (preg_match($regexName, $_POST['firstname'])) {
      // 'htmlspecialchars()' remplace le balisage par leur valeur en html. ex: '<script>' devient '&lt script &gt'
      $firstname = htmlspecialchars($_POST['firstname']);
    } else { // cas d'erreur non respect de la syntaxe
      $formError['firstname'] = 'Veuillez indiquer un prénom ne contenant que des lettres majuscules et miuscules';
    }
  } elseif (empty($_POST['firstname'])) {
    $formError['firstname'] = 'Veuillez renseigner votre prénom';
  }
  
  // on érifie que le champ 'lastname' n'est pas vide
  if (!empty($_POST['lastname'])) { // cas d'erreur firstname && lastname champ vide
    // comparaison de valeur avec la regex
    if (preg_match($regexName, $_POST['lastname'])) {
      // 'htmlspecialchars()' remplace le balisage par leur valeur en html. ex: '<script>' devient '&lt script &gt'
      $lastname = htmlspecialchars($_POST['lastname']);
    } else { // cas d'erreur non respect de la syntaxe
      $formError['lastname'] = 'Veuillez indiquer un nom ne contenant que des lettres majuscules et miuscules';
    }
  } elseif (empty($_POST['lastname'])) {
    $formError['firstname'] = 'Veuillez renseigner votre nom';
  }
  
  // on érifie que le champ 'age' n'est pas vide
  if (!empty($_POST['age'])) { // cas d'erreur firstname && lastname champ vide
    // comparaison de valeur avec la regex
    if (preg_match($regexAge, $_POST['age'])) {
      // 'htmlspecialchars()' remplace le balisage par leur valeur en html. ex: '<script>' devient '&lt script &gt'
      $age = htmlspecialchars($_POST['age']);
    } else { // cas d'erreur non respect de la syntaxe
      $formError['age'] = 'Veuillez indiquer un age en chiffre';
    }
  } elseif (empty($_POST['age'])) {
    $formError['age'] = 'Veuillez renseigner votre age';
  }
  
  // on érifie que le champ 'company'n'est pas vide
  if (!empty($_POST['company'])) { // cas d'erreur firstname && lastname champ vide
    // comparaison de valeur avec la regex
    if (preg_match($regexCompany, $_POST['company'])) {
      // 'htmlspecialchars()' remplace le balisage par leur valeur en html. ex: '<script>' devient '&lt script &gt'
      $company = htmlspecialchars($_POST['company']);
    } else { // cas d'erreur non respect de la syntaxe
      $formError['company'] = 'Veuillez indiquer une société sans caractères spéciaux';
    }
  } elseif (empty($_POST['company'])) {
    $formError['company'] = 'Veuillez renseigner votre société';
  }
}

