<?php include 'includes/functions.php' ?>
<?php

//dd($_POST);

$char = new StdClass;
$char->name =  $_POST['name'];
$char->race =  $_POST['race'];
$char->job  =  $_POST['job'];
$char->history =  $_POST['history'];

// TODO: Daten validieren
/*
  $isValid = validateChar($char);
  if (!$isValid) {
    echo 'Nice try';
    die();
  }
*/

saveCharacter($mysqli,$char);

header('Location: charactershowroom.php');

?>
