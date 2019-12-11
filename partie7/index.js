// variables //
var buttonSubmit = document.getElementById('submitButton');
var inputFirstname = document.getElementById('inputFirstname');
var inputLastname = document.getElementById('inputLastname');
// fin variables //
// function main active à l'ouverture de la fenêtre
window.onload = function() {
  // focus sur le 1er input
  inputFirstname.focus();
  // fonction qui renvoi 1 si les champs sont rempli et 0 sinon
  function inputFilled(){
      $bool = false
      if (inputFirstname.value != '' && inputLastname.value != '') {
          $bool = true;
      }
      return $bool;
  }
  // fonction qui applique un shadow sur le bouton
  function addShadowOnHoverButton() {
    if (inputFilled()) {
      buttonSubmit.style.transition = 'none';
      buttonSubmit.style.boxShadow = '0px 1px 2px #0c2416';
    }
  }
  // fonction qui retire le shadow du bouton
  function removeShadowOnHoverButton() {
    buttonSubmit.style.boxShadow = 'none';
  }
  // fonction d'application css sur le bouton une fois les input remplis
  function validationButton() {
    //coloration du boutton une fois le formulaire rempli
    if (inputFilled()) {
      buttonSubmit.style.transition = '1s';
      buttonSubmit.style.backgroundColor = '#3bb16b';
      buttonSubmit.style.color = 'white ';
      buttonSubmit.style.cursor = 'pointer';
    }
    // décoloration du boutton si le formulaire est vide
    else {
      buttonSubmit.style.transition = '1s';
      buttonSubmit.style.backgroundColor = 'white';
      buttonSubmit.style.color = 'inherit';
      buttonSubmit.style.cursor = 'default';
    }
  }
  // appel de fonctions //
  inputFirstname.addEventListener('keyup',function(){
    validationButton();
  });
  inputLastname.addEventListener('keyup',function() {
    validationButton();
  });
  buttonSubmit.addEventListener('mouseover',function(){
    addShadowOnHoverButton();
  });
  buttonSubmit.addEventListener('mouseout',function(){
    removeShadowOnHoverButton();
  });
  buttonSubmit.addEventListener('click',function(){
    removeShadowOnHoverButton();
  });
};
