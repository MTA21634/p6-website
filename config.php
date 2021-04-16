<?php
session_start();
$host = "localhost"; 
$user = "root";
$password = "";
$dbname = "videos";

$con = mysqli_connect($host, $user, $password,$dbname);
// Check connection
if (!$con) {
  die("Connection failed: " . mysqli_connect_error());
}


$fetchVideos = mysqli_query($con, "SELECT * FROM videos ORDER BY id DESC");
while($row = mysqli_fetch_assoc($fetchVideos)){
  $location = $row['location'];
  $name = $row['name'];
  $date = $row['date'];
  $dateToPrint = date('M-d-y', strtotime($date) ) ;
}
