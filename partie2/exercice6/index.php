<?php
  $age = 17;
  if ($age >= 18) {
    $result = 'majeur';
  }else {
    $result = 'mineur';
  }
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>ex6</title>
  </head>
  <body>
    <?= $result ?></p>
  </body>
</html>
