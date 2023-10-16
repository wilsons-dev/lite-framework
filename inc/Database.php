<?php



//host, username, password, database
$dbHost = 'localhost';
$dbUser = 'root'; 
$dbPass = 'root';
$dbName = 'tasgigs';

$connection = mysqli_connect($dbHost, $dbUser, $dbPass, $dbName);

// If there is a connection error you will see a "Connection Error"
// and you will have to find the incorrect value and have to fix it.
if($connection) {
//   echo "Connected";
} else {
  die("CONNECTION FAILED: " . mysqli_connect_error());  
}

?>
