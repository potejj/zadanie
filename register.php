<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "shop";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

    include "connect.php";
    if(isset($_POST['submit'])){
        $register = "INSERT INTO users (`id_user`, `name`, `email`, `password`) VALUES (null,'".$_POST['username']."',".$_POST['email']."','".$_POST['password']."')";
        $conn->exec($register);
    }
?>


<form method="post">
    <label for="username">Username:</label>
    <input type="text" id="username" name="username" required>
    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required>
    <label for="password">Password:</label>
    <input type="password" id="password" name="password" required>
    <input type="submit" id="submit" name="subimt" value="Register">
</form>

    
</body>
</html>