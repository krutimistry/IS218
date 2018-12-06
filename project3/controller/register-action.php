<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="../../main.css">
    <body background="../../images/geometric-blue-background.jpg">
</head>

<div class="action-box">
<?php require "db.php" ?>

<?php
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$birthday = $_POST['birthday'];
$password = $_POST['password'];
$sql = "SELECT email FROM accounts WHERE email = '$email'";
$results = runQuery($sql);
if( count($results) > 0 ) {
	echo "<br>The email <strong>" . $email . "</strong> already exists, please use another one. <br> ";
	echo "<br><br><div class='alert alert-warning'> <strong>WARNING!</strong>
	    Redirecting you to previous page.</div>";
	header("refresh:5; url=login.php");
}
else {
	$sql = "INSERT INTO accounts VALUES('', '$email', '$fname', '$lname', '$birthday', '$password')";
	$results = runQuery($sql);
    echo "You may now login with the email <strong>" . $email . "</strong><br><br>";
}

?>

<p> Thank you for registering, please log in again to access your account</p>
<button onclick="location.href='login.php'" type="button" class="button">Login Page</button>
</div>
</html>
