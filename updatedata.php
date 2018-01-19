<?php

$employee_name = $_POST["firstname"];
$employee_cubical1 = $_POST["cubicalnumber1"];
$employee_cubical2 = $_POST["cubicalnumber2"];
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


$sql = "UPDATE employeeCubicals SET cubical_id='$employee_cubical2' WHERE cubical_id = $employee_cubical1";

if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
	include("updatexml.php");
} else {
    echo "Error updating record: " . $conn->error;
}



$conn->close();

?>

