<?php
  //  met 0 en valeur par defaut à $nb1
  function sum($nb1='0',$nb2='0',$nb3='0')
  {
    return $nb1 + $nb2 + $nb3;
  };
 ?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>ex8</title>
  </head>
  <body>
    <p>Addition de vos trois nombres : <?= sum(12,14); ?></p>
  </body>
</html>
