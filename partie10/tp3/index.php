<?php 
include_once 'indexCtrl.php';
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous"/>
    <link rel="stylesheet" href="../assets/css/index.css" />
    <link rel="stylesheet" href="../assets/css/ex3.css" />       
    <link href="https://fonts.googleapis.com/css?family=Public+Sans:400,500,600,700,800,900|Roboto:400,400i,700,900&display=swap" rel="stylesheet">
    <title>Exercice 3</title>
  </head>
  <body>
    <?php include_once '../assets/php/navbar.php'; ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <h1>Tp 2 : </h1>
            </div>
        </div>
      <div class="row">
        <div class="col-md-8 offset-md-2">
          <h2>Enregistrez-vous</h2>
          <div class="row" id="identity">
            <div class="col-md-3">
              <?php echo showArrayValue($portrait1) ?>
            </div>
            <div class="col-md-3">
              <?php echo showArrayValue($portrait2) ?>
            </div>
            <div class="col-md-3">
              <?php echo showArrayValue($portrait3) ?>
            </div>
            <div class="col-md-3">
              <?php echo showArrayValue($portrait4) ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>