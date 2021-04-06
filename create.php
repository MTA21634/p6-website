<?php
// For handling note submissions


$connection = require_once './Connection.php';
$connection->addNote($_POST);
