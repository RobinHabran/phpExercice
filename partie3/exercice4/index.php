<?php
  $var1 = 1;
 ?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>ex4</title>
  </head>
  <body>
    <p><?php
        while ($var1 <= 10) {
          echo $var1;
          ?>
          </p>
          <p>
          <?php
          $var1 += $var1/2;
        }
      ?></p>
  </body>
</html>
