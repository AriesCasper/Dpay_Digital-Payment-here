<?php
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
// define('DB_SERVER', 'localhost');
// define('DB_USERNAME', '');
// define('DB_PASSWORD', '');
// define('DB_NAME', 'login_system');
 
/* Attempt to connect to MySQL database */
$conection_db =  mysqli_connect("localhost", "root", "", "login_system");
 
// Check connection
if($conection_db === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>

 