<?php
session_start();

$db = pg_connect("host=localhost dbname=mydb user=postgres password=12345");

if(!isset($_SESSION['id'])){ //if login in session is not set
    header("Location: http://www.example.com/login.php");
}

?>
