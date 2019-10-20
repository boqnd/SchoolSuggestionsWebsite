<?php
header('Content-Type: text/html; charset=utf-8');

//use these settings on server
/*
$servername = "fdb22.awardspace.net";
$username = "3161810_db";
$password = "Bbooyyaann123";
$dbname = "3161810_db";
*/

//use these settings on local machine

$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "test";


$suggestion = $_POST['suggestion'];
$fName = $_POST['firstName'];
$lName = $_POST['lastName'];
$grade = $_POST['grade'];
$class = $_POST['class'];
$mail = $_POST['mail'];

if (empty($suggestion)){
    include "indexErr.php";
}else{
// Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    mysqli_set_charset($conn, "utf8"); /* Procedural approach */

// Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "INSERT INTO FEGSuggestBETA
VALUES (NULL, '$suggestion','$fName','$lName','$mail','$grade','$class')";

    if ($conn->query($sql) === TRUE) {
        include 'compleate.php';
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}

