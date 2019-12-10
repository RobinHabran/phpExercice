<?php
  function tableauAssociatif()
  {
    $tab = array(
      60 => 'Oise',
      80 => 'Somme',
      02 => 'Aisne',
      62 => 'Pas-de-Calais',
      59 => 'Nord',
    );
    return $tab[59];
  }
 ?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>ex5</title>
  </head>
  <body>
    <p><?= tableauAssociatif(); ?></p>
  </body>
</html>
