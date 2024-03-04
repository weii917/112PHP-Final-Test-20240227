<?php
include_once "db.php";
$que = $Que->find(['id' => $_POST['id']]);
$que['sh'] = ($que['sh'] + 1) % 2;
$Que->save($que);
