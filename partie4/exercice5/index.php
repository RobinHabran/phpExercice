<?php
  function highter($text, $nb)
  {
    return $text . $nb;
  }
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <p><?= highter('année de naissance : ', 2010); ?></p>
  </body>
</html>
