<?php
  function tableauAssociatif()
  {
    $department = array(
      '60' => 'Oise',
      '80' => 'Somme',
      '02' => 'Aisne',
      '62' => 'Pas-de-Calais',
      '59' => 'Nord'
    );
    foreach ($department as $key => $value) { ?>
      <p><?php echo 'Le dépatement ' . $value . ' a le numéro ' . $key; ?></p>
    <?php }
  }
 ?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>ex5</title>
  </head>
  <body>
    <p><?php tableauAssociatif(); ?></p>
  </body>
</html>
