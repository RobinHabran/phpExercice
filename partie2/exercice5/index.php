<?php
  $gender = 'Homme';
  if ($gender != 'Homme') {
    $result = 'C\'est une développeuse';
  }else {
    $result = 'C\'est un développeur';
  }
 ?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <p><?= $result ?></p>
  </body>
</html>
