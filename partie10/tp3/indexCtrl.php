<?php
  
$portrait1 = array('name'=>'Victor', 'firstname'=>'Hugo', 'portrait'=>'http://upload.wikimedia.org/wikipedia/commons/5/5a/Bonnat_Hugo001z.jpg');
$portrait2 = array('name'=>'Jean', 'firstname'=>'de La Fontaine', 'portrait'=>'http://upload.wikimedia.org/wikipedia/commons/e/e1/La_Fontaine_par_Rigaud.jpg');
$portrait3 = array('name'=>'Pierre', 'firstname'=>'Corneille', 'portrait'=>'http://upload.wikimedia.org/wikipedia/commons/2/2a/Pierre_Corneille_2.jpg');
$portrait4 = array('name'=>'Jean', 'firstname'=>'Racine', 'portrait'=>'http://upload.wikimedia.org/wikipedia/commons/d/d5/Jean_racine.jpg');

function showArrayValue($array){
  $result = '';
  foreach ($array as $indice => $value) {
    // 'strpos()' recherche une chaine dans un array
    if(strpos($value, 'jpg')){
      $result .=  '<img src='.$value.' alt="portrait" class="resize">' ;
    }else{
      $result .= '<p>'.$value.'</p>';
    }
  }
  return $result;
}