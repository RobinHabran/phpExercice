<?php
  $age = 10;
  $gender = 'homme';

  if ($gender == 'femme') {
    if ($age >= 18) {
      $result = 'Vous êtes une femme et vous êtes majeur';
    }else {
      $result = 'Vous êtes une femme et vous êtes mineur';
    }
  }else {
    if ($age >= 18) {
      $result = 'Vous êtes un homme et vous êtes majeur';
    }else {
      $result = 'Vous êtes un homme et vous êtes mineur';
    }
  }
 ?>
 <!DOCTYPE html>
 <html lang="fr" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title>ex3</title>
   </head>
   <body>
     <p><?= $result; ?></p>
   </body>
 </html>
