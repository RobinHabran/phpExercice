<?php
  function highter($firstname, $lastname, $age){
    return 'Bonjour ' . $firstname . ' ' . $lastname . ', tu as ' . $age . ' ans';
  };
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <p><?= highter('Jean', 'Mich', 69); ?></p>
  </body>
</html>
