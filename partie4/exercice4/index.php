<?php
  function highter($nb1, $nb2)
  {
    if ($nb1 > $nb2) {
      $text = 'Le premier nombre est plus grand';
    }else if ($nb1 > $nb2) {
      $text = 'Le premier nombre est plus petit';
    }else {
      $text = 'Les deux nombres sont identiques';
    }
    return $text;
  }
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <p><?= highter(50, 30); ?></p>
  </body>
</html>
