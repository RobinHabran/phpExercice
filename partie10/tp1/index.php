<?php
  // déclaration des variables
    if (isset($_POST['submitButton'])){
      $arrayOfGet = array(
          $_POST['firstname'],
          $_POST['lastname'],
          $_POST['dayOfBirth'],
          $_POST['countryOfBirth'],
          $_POST['nationalty'],
          $_POST['adress'],
          $_POST['email'],
          $_POST['cellNumber'],
          $_POST['poleEmploiNumber'],
          $_POST['diploma'],
          $_POST['codeAcademy'],
          $_POST['numberOfBadge'],
          $_POST['yourHero'],
          htmlspecialchars($_POST['yourHack']),
          htmlspecialchars($_POST['experienceDev']),
              );
    }
  // fin de déclaration variable
  // déclaration des fonctions
    // fonction qui verifie si tous les champs du formulaires ont été remplis
    function allFieldCompleted($arrayOfGet) {
      foreach ($arrayOfGet as $key => $value) {
        if(empty($value)) return false;
      }
      return true;
    }
  // fin de déclaration des fonctions
  // main()
    // affiche le formulaire jusqu'à complétion de celui-ci, puis affiche le rsultat une fois le formulaire complété
    
      
  // fin main()
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous"/>
        <link rel="stylesheet" href="../assets/css/index.css" />
        <link rel="stylesheet" href="../assets/css/form1.css" />       
        <link href="https://fonts.googleapis.com/css?family=Public+Sans:400,500,600,700,800,900|Roboto:400,400i,700,900&display=swap" rel="stylesheet">
        <title>Tp 1</title>
    </head>
    <body>
        <?php include '../assets/php/navbar.php'; ?>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <h1>Tp 1 : </h1>
                </div>
            </div>
          <div class="row">
            <div class="col-md-8 offset-md-2">
              <h2>Enregistrez-vous</h2>
              <?php if(empty($_POST['submitButton']) || !allFieldCompleted($arrayOfGet)){ ?>
                <?php if(isset($_POST['submitButton'])){ ?><p class="error">Veuillez remplir tous les champs</p><?php } ?>
                <form name="newStudent" action="#" method="POST">
                  <div class="row" id="identity">
                    <div class="col-md-6">
                      <!-- prénom -->
                      <label for="firstname">Prénom</label>
                      <label for="lastname">Nom</label>
                      <input type="text" for="newStudent" name="firstname" id="firstname" placeholder="Xavier">
                      <!-- Nom -->
                      <input type="text" for="newStudent" name="lastname" id="lastname" placeholder="Dupont de Lingones">
                      <!-- date de naissance -->
                      <label for="dayOfBirth">Date de naissance</label>
                      <input type="text" for="newStudent" name="dayOfBirth" id="dayOfBirth" placeholder="15/04/1997">
                      <!-- pays de naissance -->
                      <label for="countryOfBirth">Pays de naissance</label>
                      <input type="text" for="newStudent" name="countryOfBirth" id="countryOfBirth" placeholder="France">
                      <!-- nationnalité -->
                      <label for="nationalty">Nationnalité</label>
                      <input type="text" for="newStudent" name="nationalty" id="nationalty" placeholder="Français">
                    </div>
                    <div class="col-md-6" id="">
                      <!-- Adresse -->
                      <label for="adress">Adresse</label>
                      <input type="text" for="newStudent" name="adress" id="adress" placeholder="Nantes">
                      <!-- e-mail -->
                      <label for="email">Email</label>
                      <input type="text" for="newStudent" name="email" id="email" placeholder="xavier-denantes@gmail.com">
                      <!-- téléphone -->
                      <label for="cellNumber">Téléphone</label>
                      <input type="text" for="newStudent" name="cellNumber" id="cellNumber" placeholder="06-58-12-...">
                      <!-- numéro pôle emploi -->
                      <label for="poleEmploiNumber">Numéro pôle Emploi</label>
                      <input type="text" for="newStudent" name="poleEmploiNumber" id="poleEmploiNumber" placeholder="086 458 9A">
                    </div>
                  </div>
                  <div class="row" id="experience">
                    <div class="col-md-12">
                      <!-- diplôme -->
                      <label for="diploma">Diplôme</label>
                      <selsect for="newStudent" name="diploma" id="diploma">
                        <option>sans</option>
                        <option>Bac</option>
                        <option>Bac+2</option>
                        <option>Back+3</option>
                        <option>supérieur</option>
                      </selsect>
                      <!-- lien code academy -->
                      <label for="codeAcademy">Lien codeacademy</label>
                      <input type="url" for="newStudent" name="codeAcademy" id="codeAcademy" placeholder="www.code-academy.fr/user/xavier60400">
                      <!-- nombre de badge -->
                      <label for="numberOfBadge">Nombre de badge</label>
                      <select for="newStudent" name="numberOfBadge" id="numberOfBadge">
                        <?php for ($i=1; $i<=6; $i++){ ?>
                          <option><?php echo $i; ?></option>
                        <?php } ?>
                      </select>
                      <!-- votre hero -->
                      <label for="yourHero">Si vous étiez un super héros/une super héroïne, qui seriez-vous et pourquoi?</label>
                      <input type="text" for="newStudent" name="yourHero" id="yourHero" placeholder="John Wick, par ce que ca personne touche à mon chien...">
                      <!-- votre hack -->
                      <label for="yourHack">Racontez-nous un de vos "hacks" (pas forcément technique ou informatique)</label>
                      <textarea for="newStudent" name="yourHack" id="yourHack" placeholder="Détournement du contrôle parental; attaque DDOS; utilisation d'un couteau pour se curer les dents... etc"></textarea>
                      <!-- experience programmation -->
                      <label for="experienceDev">Avez vous déjà eu une expérience avec la programmation et/ou l'informatique avant de remplir ce formulaire ?</label>
                      <textarea for="newStudent" name="experienceDev" id="experienceDev" placeholder="Apprentissage d'un langage de programmation; construction d'un pc gamer; présentation Powerpoint... etc"></textarea>
                    </div>
                  </div>
                  <input type="submit" for="newStudent" name="submitButton" id="submitButton" value="Continuer - S'enregistrer">
                </form>
              <?php }else{ 
                  echo 'all field completed';
                }
              ?>
            </div>
          </div>
        </div>
    </body>
</html>