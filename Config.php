<?php
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'php');

/* Attempt to connect to MySQL database */
$con=new mysqli('localhost','root','','php');
if($con){
    echo "";

}
else{
    die(mysqli_error($con));
}