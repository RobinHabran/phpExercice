<?php

//déclaration des variables
// tableau des erreurs
$formError = array();
// les regex :
$regexName = '/^[a-zéèà \-]+$/i';
$regexCellNumber = '/^([0]|[\+][3]{2})([\s]?[\d][\s]?){9}$/i';
$regexEmail = '/^(.*)([@]{1})(.*)([.]{1})([a-z]{2,})$/i';
$regexDateOfBith = '/^([\s]*[\d][\s]*){4}$/'; // XXXX XXXX XXXX XXXX
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
  // on érifie que le champ 'lastname' n'est pas vide
  if (!empty($_POST['dayOfBirth'])) { // cas d'erreur firstname && lastname champ vide
    // comparaison de valeur avec la regex
    if (preg_match($regexName, $_POST['dayOfBirth'])) {
      // 'htmlspecialchars()' remplace le balisage par leur valeur en html. ex: '<script>' devient '&lt script &gt'
      $lastname = htmlspecialchars($_POST['dayOfBirth']);
    } else { // cas d'erreur non respect de la syntaxe
      $formError['dayOfBirth'] = 'Veuillez indiquer un nom ne contenant que des lettres majuscules et miuscules';
    }
  } elseif (empty($_POST['dayOfBirth'])) {
    $formError['dayOfBirth'] = 'Veuillez renseigner votre nom';
  }
}

