<?php

function insertContact($request){
require 'db_connection.php';

$params = [
  'id' => null,
  'your_name' => $request['your_name'],
  'email' => $request['email'],
  'password' => $request['password'],
  'url' => $request['url'],
  'gender' => $request['gender'],
  'age' => $request['age'],
  'contact' => $request['contact'],
  'created_at' => null
];

$count = 0;
$columns = '';
$values = '';

foreach(array_keys($params) as $key){
  if($count++>0){
    $columns .= ',';
    $values .= ',';
  }
  $columns .= $key;
  $values .= ':'.$key;
}

$sql = 'insert into contacts ('. $columns .')values('. $values .')';

// exit;

$stml = $pdo->prepare($sql);
$stml->execute($params);

header('Location: login.php');
exit();
}
