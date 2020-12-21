<! DOCTYPE html>
<?php
$server = "localhost";
$user = "root";
$pass = "";
$database = "banking";
$conn =  new mysqli($server , $user , $pass , $database);
if($conn->connect_error)
{
	die("Sorrry : ".$conn->connect_error);
}
?>