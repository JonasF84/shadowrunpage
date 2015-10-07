<?php

// MySQL Verbindung herstellen
$mysqli = mysqli_connect('127.0.0.1','root','','shadowrun') or die('Keine MySQL Verbindung moeglich');

// Debug funktion
function dd($var) {
  var_dump($var);
  die();
}

// Fuehrt eine Abfrage aus und liefert alle Daten als Array
function getQueryResult($mysqli, $query) {
  $result = $mysqli->query($query);
  $list = [];
  while ($row = $result->fetch_object()) {
    array_push($list,$row);
  }
  return $list;
}

// Speichert einen Charaktere
function saveCharacter($mysqli,$data) {
  $stmt = $mysqli->prepare("INSERT INTO characters(id,name,race,job,history) VALUES (NULL,?,?,?,?)");
  $stmt->bind_param('ssss',$data->name,$data->race,$data->job,$data->history); // 's' steht fuer string'
  $stmt->execute();
}

// Liefert alle Charaktere
function getCharacters($mysqli) {
  return getQueryResult($mysqli,'SELECT * FROM characters');
}

?>
