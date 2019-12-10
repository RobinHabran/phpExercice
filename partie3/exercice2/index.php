<?php
  $inc = 0;
  $random = rand(1,100);
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>ex2</title>
  </head>
  <body>
    <p>
      <?php
        while ($inc < 20) {
          echo $inc * $random;
          $inc++;
        }
      ?>
    </p>
  </body>
</html>
