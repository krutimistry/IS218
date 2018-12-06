<html>
<head>
    <title>Add Data</title>
</head>
 
<body background="../../images/geometric-blue-background.jpg">
<link rel="stylesheet" href="../../main.css">
<div class="added-box">

<?php
//including the database connection file
include_once("config.php");
 
if(isset($_POST['Submit'])) {    
    $email = $_POST['email'];
    $title = $_POST['title'];
    $body = $_POST['body'];
	$skills = $_POST['skills'];
        
    // checking empty fields
    if(empty($email) || empty($title) || empty($body)  || empty($skills)) {                
        if(empty($email)) {
            echo "<font color='red'>Email field is empty.</font><br/>";
        }
        
        if(empty($title)) {
            echo "<font color='red'>Title field is empty.</font><br/>";
        }
        
        if(empty($body)) {
            echo "<font color='red'>Body field is empty.</font><br/>";
        }
		
		if(empty($skills)) {
            echo "<font color='red'>Skills field is empty.</font><br/>";
        }
        
        //link to the previous page
        echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
    } else { 
        // if all the fields are filled (not empty)             
        //insert data to database
        $result = mysqli_query($mysqli, "INSERT INTO Q2(email, title, body, skills) VALUES('$email','$title','$body','$skills')");
        
        //display success message
        echo "<font color='green'>Data added successfully.";
        echo "<br/><a href='index.php'>View Result</a>";
    }
}
?>
</div>
</body>
</html>
