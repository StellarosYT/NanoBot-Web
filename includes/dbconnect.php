<?php
$user = 'nanobot';
$pass = 'WW1up0IB0pDhziFWZmqS';
$host = 'localhost';
$database = 'nanobot';

try {

  $bdd = new PDO("mysql:host=$host;dbname=$database;charset=utf8", $user, $pass);

} catch (PDOException $e){
  echo 'ERROR: ' . $e->getMessage();
  die;
}

$getStats = $bdd->query("SELECT * FROM stats");
while ($stats = $getStats->fetch(PDO::FETCH_OBJ)){
  $guilds = $stats->guilds;
  $members = $stats->members;
  $commands = $stats->commands;
  $dayofdev = $stats->dayofdev;
}

?>