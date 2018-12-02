<!DOCTYPE html>
<html>
<body background="geometric-blue-background.jpg">

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
    header("refresh:3; url=./edit/index.php");  
	}
	else {
		echo "<br><br><strong>Error!</strong> Wrong Credientials";
      echo "<span style='color: red;'>...Redirecting to Login Page</span>"; 
	    header("refresh:4; url=login.php");
	}
}
?>

</div>
</body>
</html>


<style>
.box{
    background-color: #99c0ff;
    color: black;
    margin: auto;
    padding: 20px;
    width: 400px;
    border: 10px solid black;
}

h2 {
    color: red;
    /*
    text-shadow: 3px 2px white;
    */
}

.submit {
    cursor: pointer;
    background: #3366cc;
    color: #fff;
    border: 0;
    padding-left: 40px;
    padding-right: 40px;
    padding-bottom: 10px;
    padding-top: 10px;
    font-family: 'Ubuntu', sans-serif;
    font-size: 13px;
}

</style>
