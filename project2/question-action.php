<!DOCTYPE html>
<html>
<body background="geometric-blue-background.jpg">
</body>
<div class="question-box">
<?php require "db.php" ?>

<?php
echo "<h1>Questions</h1>";
$dsn = 'mysql:host=sql2.njit.edu;dbname=km487';
$username = 'km487';
$password = '-----';

$owneremail = $_POST['owneremail'];
$title = $_POST['title'];
$body = $_POST['body'];
$skills = $_POST['skills'];

$sql = "SELECT title FROM questions WHERE title = '$title'";
$results = runQuery($sql);
if( count($results) > 0 ) {
	echo "<br>The title <strong>" . $title . "</strong> already exists, please use another one. <br> ";
	echo "<br><br><div class='alert alert-warning'> <strong>WARNING!</strong>
	    Redirecting you to previous page.</div>";
}
else {
	$sql = "INSERT INTO questions VALUES('', '$owneremail', '', '', '$title', '$body', '$skills', '')";
	$results = runQuery($sql);
    echo "You may now login again <strong>" . $owneremail . "</strong><br><br>";
}

?>

<p> Thank you for the question, please log in again to see your question</p>

<form action="login.php">
    <input type="submit" class="button" value="Return to Login Page" />
</form>
</div>
</html>

<style>
.question-box{
    background-color: #99c0ff;
    color: black;
    margin: auto;
    padding: 20px;
    width: 300px;
    border: 10px solid black;
}

.button {
    width: auto;
    padding: 10px;
    font-weight: bold;
    font-size: 100%;
    background: #3366cc;
    color: #fff;
    border: 1px solid #3366cc;
}
</style>
