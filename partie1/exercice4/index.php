<?php
  $name = 'Jean';
  $age = '23';
  $salaire = '1500.25';
  $maried = true;
 ?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>ex4</title>
  </head>
  <body>
    <p> <?php echo $name;?></p>
    <p> <?php echo $age;?></p>
    <!-- raccourcis de echo $salaire -->
    <p> <?= $salaire;?></p>
    <p> <?php echo $maried;?></p>
  </body>
</html>
