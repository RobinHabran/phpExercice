<?php
  function repeatText($text1, $text2) {
    return $text1 . ' ' . $text2;
  }
 ?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="index.css">
    <title>ex1</title>
  </head>
  <body>
    <p><?= repeatText('yo','gros'); ?></p>
  </body>
</html>
