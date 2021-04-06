<?php

class Connection {
  public PDO $pdo;
  public function __construct() {
    // Connection made to the notes database
    $this->pdo = new PDO('mysql:server=localhost;dbname=notes', 'root', '');
    $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  }
  // Function for reading and returning the notes
  public function getNotes() {
    // Creating a PDO statement
    $statement = $this->pdo->prepare("SELECT * FROM notes ORDER BY create_date DESC");
    // Executing the statement
    $statement->execute();
    return $statement->fetchAll(PDO::FETCH_ASSOC);
  }
}
