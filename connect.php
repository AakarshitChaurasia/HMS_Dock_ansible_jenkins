<?php
require_once realpath(__DIR__ . "/vendor/autoload.php");
use Dotenv\Dotenv;
$dotenv = Dotenv::createMutable(__DIR__);
$dotenv->load();
//getenv();
$servername=getenv('Servername');
//$username = "hms_admin1";
$username = getenv("Username");
$password = getenv('Password');
$dbname = getenv('Dbname');
/* Local Database*/
/*
$servername = "demo2.mysql.database.azure.com";
$username = "hms_admin1";
$password = "@Admin123@";
$dbname = "clinic_db";
/*
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "clinic_db";*/
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}



?> 
