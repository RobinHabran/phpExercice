<?php
  $var1 = 100;
  $var2 = rand(1,100);
 ?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>ex3</title>
  </head>
  <body>
    <p>
      <?php
        while ($var1 > 10) {
          echo $var1 * $var2;
          ?>
          </p>
          <p>
          <?php
          $var1--;
        }
       ?>
    </p>
  </body>
</html>
