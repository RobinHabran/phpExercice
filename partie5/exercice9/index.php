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
    sort($tab);
    echo $tab[02];
  }
 ?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>ex5</title>
  </head>
  <body>
    <?php
      $tab = array(
        '60' => 'Oise',
        '80' => 'Somme',
        '02' => 'Aisne',
        '62' => 'Pas-de-Calais',
        '59' => 'Nord',
      );
      ?>
      <p><?= $tab['60']; ?></p>
      <p><?= $tab['80']; ?></p>
      <p><?= $tab['02']; ?></p>
      <p><?= $tab['62']; ?></p>
      <p><?= $tab['59']; ?></p>
  </body>
</html>
