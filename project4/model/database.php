<?php
$hostname = "mysql:host=sql2.njit.edu;dbname=km487";
$username = "km487";
$password = "password";

try {
    $db = new PDO($hostname, $username, $password);
}catch(PDOException $e) {
    $error_message = $e->getMessage();
    echo "<p>SQL Connection Database error: $error_message</p>";
}

