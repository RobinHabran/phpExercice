<?php
    $regexName = '/^([a-z \-]+$/i';
    
    if(!empty($_GET['inputFirstname'])){
        if(preg_match($regexName, $_GET['inputFirstname'])){
            // strip_tags = enleve les balises html
          $firstname = strip_tags($_GET['inputFirstname']) . ' est validée.';
        }else{
           $firstname = strip_tags($_GET['inputFirstname']) . ' n\'est pas valide';
        }
    }
    if(!empty($_GET['inputLastname'])){
        if(preg_match($regexName, $_GET['inputLastname'])){
            // strip_tags = enleve les balises html
           $lastname = strip_tags($_GET['inputLastname']) . ' est validée.';
        }else{
            $lastname = strip_tags($_GET['inputLastname']) . ' n\'est pas valide';
        }
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            echo $firstname . ' ' . $lastname;
            echo 'tu t\'appels ' . $_GET['inputFirstname'] . ' ' . $_GET['inputLastname'] ; 
        ?>
    </body>
</html>
