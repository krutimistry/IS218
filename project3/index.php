<?php

include_once("config.php");
 
$result = mysqli_query($mysqli, "SELECT * FROM Q2"); 
?>
 
<html>
<head>    
    <title>Homepage</title>
</head>
 
<body background="geometric-blue-background.jpg">
<div class="question-box">
<form action="../project3mvc/controller/user/login.php">
	<input type="submit" class="button" value="Return to Login Page" />
</form><br>
<hr>
<h1><center>Welcome!<br>Questions Page</center></h1>

	<center>
    <a href="add.html" class="add">Add New Data</a><br/><br/>
    <table width='90%' border=1>
        <tr bgcolor='#CCCCCC'>
			<td>ID</td>
            <td>Email</td>
            <td>Title</td>
            <td>Body</td>
            <td>Skills</td>
            <td>Edit/Delete</td>
        </tr>
		</center>
        <?php 
        
        while($res = mysqli_fetch_array($result)) {         
            echo "<tr>";
			echo "<td>".$res['id']."</td>";
            echo "<td>".$res['email']."</td>";
            echo "<td>".$res['title']."</td>";
            echo "<td>".$res['body']."</td>"; 
			echo "<td>".$res['skills']."</td>";  
            echo "<td><a href=\"edit.php?id=$res[id]\">Edit</a> | <a href=\"delete.php?id=$res[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";        
        }
        ?>
		<br>
	</div>
    </table>
</body>
</html>


/*
<style>

.question-box{
    background-color: #99c0ff;
    color: black;
    margin: auto;
    padding: 20px;
    width: 65%;
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
	float: right;
}

.add {
    width: auto;
    padding: 10px;
    font-weight: bold;
    font-size: 100%;
    background: #5f94fc;
    color: #fff;
    border: 1px solid #3366cc;
}

</style>
*/