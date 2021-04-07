<?php
// For handling note submissions

echo '<pre>';
var_dump($_POST);
echo '</pre>';

$connection = require_once './Connection.php';
$connection->addNote($_POST);
