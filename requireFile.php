<?php

$prenom = "je sais pas comment tu t'appelles";
$secret = "le sens de la vie c'est sdkjfhqsldfhlqnvlksqflkjqhfdsl";
$userAutorise = "michel";
$motDePasse = "motdepassedemichel";
$contenu = "entre le bon username et mot de passe pour que te sois révélé le secret";

if(isset($_POST['prenom'])){
  $prenom = $_POST['prenom'];
}



if(isset($_POST['username'])) {
  if ($_POST['username'] == $userAutorise) {
    if ($_POST['password'] != $motDePasse)
      $contenu = "mauvais mot de passe";
  } else{
    $contenu = "déso je te connais pas toi là.";
  }


  if ($_POST['username'] == $userAutorise && $_POST['password'] == $motDePasse) {
    $contenu = $secret;
  }

}
