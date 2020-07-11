<?php
session_start();

$servername = "localhost";
$username = "id14263662_ncadmin";
$password = "2~MqDrX_L6!V_xNE";
$dbname = "id14263662_newcycle";

$con = new mysqli($servername, $username, $password, $dbname);

if ($con->connect_error) {
	die("Connection failed: " . $con->connect_error);
}
else{
}
  
?>