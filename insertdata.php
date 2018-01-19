<?php

$employee_name = $_POST["firstname"];
$employee_cubical = $_POST["cubicalnumber"];

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

// sql to create table
$sql = "CREATE TABLE IF NOT EXISTS employeeCubicals (
 
firstname VARCHAR(30) NOT NULL,
cubical_id INT(3) PRIMARY KEY

)";

$sql = "INSERT INTO employeeCubicals (firstname, cubical_id)
VALUES ('$employee_name', '$employee_cubical')";

if ($conn->query($sql) === TRUE) {
    echo "Your entry was successful";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

include("updatexml.php");




$conn->close();



?>

