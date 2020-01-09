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
    <link rel="stylesheet" href="../assets/css/form2.css" />       
    <link href="https://fonts.googleapis.com/css?family=Public+Sans:400,500,600,700,800,900|Roboto:400,400i,700,900&display=swap" rel="stylesheet">
    <title>Exercice 1</title>
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
          <?php
          if(count($formError)>0 || !isset($_POST['submitButton'])){
          ?>
          <h2>Enregistrez-vous</h2>
          <form name="newContact" action="#" method="POST">
            <div class="row" id="identity">
              <div class="col-md-6 offset-md-3">
                <div class="form-group<?= isset($errorMessage) ? ' has-danger' : '' ?>">
                    <label for="civility">Civilité  </label>
                    <select <?= isset($errorMessage['civility']) ? 'is-invalid' : '' ?>" name="civility" id="civility">
                        <option disabled hidden <?php if (empty($_POST['civility'])) { ?>selected<?php } ?>>Veuillez renseigner votre civilité</option>
                        <option <?= !empty($_POST['civility']) && $_POST['civility'] == 'miss' ? 'selected' : '' ?> value="miss">Madame</option>
                        <option <?= !empty($_POST['civility']) && $_POST['civility'] == 'mister' ? 'selected' : '' ?> value="mister">Monsieur</option>
                        <option <?= !empty($_POST['civility']) && $_POST['civility'] == 'nonBinary' ? 'selected' : '' ?> value="nonBinary">Non-Binaire</option>
                    </select>
                </div>
                <div>
                  <!-- Nom -->
                  <?php if(isset($_POST['lastname'])){?><div><p class="error"><?= $formError['lastname']; ?></p></div><?php } ?>
                  <label for="lastname">Nom</label>
                  <input type="text" for="newContact" name="lastname" id="lastname" placeholder="Dupont de Lingones" value="<?= (!empty($_POST['lastname']) ? $_POST['lastname'] : ''); ?>">
                </div>
                <div>
                  <!-- prénom -->
                  <?php if(isset($_POST['firstname'])){?><div><p class="error"><?= $formError['firstname']; ?></p></div><?php } ?>
                  <label for="firstname">Prénom</label>
                  <input type="text" for="newContact" name="firstname" id="firstname" placeholder="Xavier" value="<?= (!empty($_POST['firstname']) ? $_POST['firstname'] : ''); ?>">
                </div>
                <div>
                  <!-- age -->
                  <label for="age">Age</label>
                  <input type="text" for="newContact" name="age" id="age" placeholder="26">
                  <p class="ans">ans</p>
                  <?php if(isset($_POST['age'])){?><div><p class="error"><?= $formError['age']; ?></p></div><?php } ?>
                </div>
                <div>
                  <!-- société -->
                  <label for="company">Société</label>
                  <input type="text" for="newContact" name="company" id="company" placeholder="Mentalworks">
                  <?php if(isset($_POST['company'])){?><div><p class="error"><?= $formError['company']; ?></p></div><?php } ?>
                </div>
                <div class="row">
                  <div class="cold-md-4 offset-md-8">
                    <input type="submit" for="newContact" name="submitButton" id="submitButton" value="Continuer&nbsp;-&nbsp;S'enregistrer">
                  </div>
                </div>
              </div>
            </div>
          </form>
          <?php }else{ ?>
          <p>Formulaire envoyé</p>
          <?php } ?>
        </div>
      </div>
    </div>
  </body>
</html>