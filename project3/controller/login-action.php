<!DOCTYPE html>
<html>
<head>
	  <link rel="stylesheet" href="../../main.css">
    <body background="../../images/geometric-blue-background.jpg">
        <title>Loading...</title>
</head>

<div class="box">

<?php require "db.php" ?>

<?php
$email = $_POST['email'];
$password = $_POST['pass'];
$sql = "SELECT * FROM accounts WHERE email = '$email'";
$results = runQuery($sql);
if(count($results) > 0){
	foreach($results as $row){
		$getEmail = $row['email'];
		$getPass = $row['password'];
	}
}else {
	echo "<br><br><strong>Error!</strong>
    Incorrect credentials... Redirecting you to login page...";
    header("refresh:4; url=login.php");
    break;
}
if(isset($email, $password)){
$sql = "SELECT * FROM accounts WHERE email = '$email' AND password='$password'";
$results = runQuery($sql);
	if( count($results) > 0 ) {
		foreach ($results as $row){
			$firstname = $row['fname'];
			$lastname = $row['lname'];
		}
		?>
		<h1>Welcome!<br>
		<hr>
		<?php
		echo "Hello " . $firstname . " " . $lastname; 
		?>
		</h1>
		<?php
    echo "<span style='color: green;'> Redirecting... to Questions Page</span>";  
    header("refresh:3; url=https://web.njit.edu/~km487/is218/project3mvc/view/edit/index.php");  
	}
	else {
		echo "<br><br><strong>Error!</strong> Wrong Credientials";
      echo "<span style='color: red;'>...Redirecting to Login Page</span>"; 
	    header("refresh:4; url=https://web.njit.edu/~km487/is218/project3mvc/controller/user/login.php");
	}
}
?>

</div>
</body>
</html>

