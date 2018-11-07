<!DOCTYPE html>
<html>
<div class="logged-box">
<h2><a href="login.php">Login Again</a></h2>

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
		echo "Hello " . $firstname . " " . $lastname;
	}
	else {
		echo "<br><br><strong>Error!</strong>
	    Wrong PASSWORD was entered. Redirecting you to login page.";
	    header("refresh:4; url=login.php");
	}
}
?>

<hr>

<?php
echo "<h1>Questions</h1>";
$dsn = 'mysql:host=sql2.njit.edu;dbname=km487';
$username = 'km487';
$password = 'humidify0';
try {
	    $conn = new PDO($dsn, $username, $password);
	    echo "Connected successfully<br>";
	    $sql = "SELECT * FROM questions WHERE id < 7";
	    $q = $conn->prepare($sql);
	    $q->execute();
	    $results = $q->fetchAll();
	    if($q->rowCount() > 0){
	    	echo 'Results: '. $q->rowCount() . '<br>';
	    	echo "<table border=\"1\">
        <tr>
        <th>ID</th>
        <th>OwnerEmail</th>
        <th>Title</th>
        <th>Body</th>
        <th>Skills</th>
        </tr>";
	    	foreach ($results as $row) {
        		echo "<tr>
            <td>".$row["id"]."</td>
            <td>".$row["owneremail"]."</td>
            <td>".$row["title"]."</td>
            <td>".$row["body"]."</td>
            <td>".$row["skills"]."</td>
            </tr>";
    		}
	    }else{
	    	echo '0 results';
	    }
	    $q->closeCursor();
    }
catch(PDOException $e)
    {
    	echo "Connection failed: " . $e->getMessage();
    }
$conn = null;
?>
</div>

<p>Insert new Questions?</p>
<p><a href="questions.php">New Question</a> Click here to insert a new question.</p>

<style>
.logged-box{
    background-color: #99c0ff;
    color: black;
    margin: auto;
    padding: 20px;
    width: 500px;
    border: 10px solid black;
}

h2 {
    color: red;
    text-shadow: 3px 2px white;
}
</style>

</div>
</html>
