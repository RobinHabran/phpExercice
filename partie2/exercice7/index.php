 <?php
  $isOk = true;
  if ($isOk === false) {
   $result = 'C\' est pas bon';
  }else {
   $result = 'ok';
  }
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>ex7</title>
  </head>
  <body>
    <p><?= $result ?></p>
  </body>
</html>
