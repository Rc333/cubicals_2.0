<?php

$employee_name = $_POST["firstname"];
$employee_cubical = $_POST["cubicalnumber"];
//echo $employee_name."<br>";

//echo $employee_cubical."<br>";

// mySQL connection and creation

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cubicaldata";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 


$sql = "DELETE FROM employeeCubicals WHERE cubical_id=$employee_cubical";

if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
	include("updatexml.php");
} else {
    echo "Error deleting record: " . $conn->error;
}



$conn->close();

?>

