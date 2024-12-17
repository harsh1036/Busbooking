<?php

$db_host = 'localhost';
$db_username = 'root';
$db_password = '';
$db_name = 'ticketbooking';

$conn = new mysqli($db_host, $db_username, $db_password, $db_name);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  
    $username = $_POST["username"];
    $password = $_POST["password"];

       
         $sql = "INSERT INTO users (username, password) VALUES ('$username', '$password')";
         if ($conn->query($sql) === TRUE) {
            header('Location: ../index.php');
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
   
    }


$conn->close();
?>