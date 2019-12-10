<?php
  $isEasy = false;

  if ($isEasy === true) {
    $result = 'C\'est facile !';
  }else {
    $result = 'C\'est difficile';
  }
 ?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>ex2</title>
  </head>
  <body>
    <p><?= $result; ?></p>
  </body>
</html>
