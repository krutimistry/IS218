<?php
include_once("config.php");
 
if(isset($_POST['update']))
{    
    $id = $_POST['id'];
    
    $email=$_POST['email'];
    $title=$_POST['title'];
    $body=$_POST['body'];    
    $skills=$_POST['skills'];  
	
    if(empty($email) || empty($title) || empty($body) || empty($skills)) {            
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
    } else {    
        //updating the table
        $result = mysqli_query($mysqli, "UPDATE Q2 SET email='$email',title='$title',body='$body',skills='$skills' WHERE id=$id");
        
        //redirectig to the display page. In our case, it is index.php
        header("Location: index.php");
    }
}
?>
<?php
//getting id from url
$id = $_GET['id'];
 
//selecting data associated with this particular id
$result = mysqli_query($mysqli, "SELECT * FROM Q2 WHERE id=$id");
 
while($res = mysqli_fetch_array($result))
{
    $email = $res['email'];
    $title = $res['title'];
    $body = $res['body'];
	$skills = $res['skills'];
}
?>
<html>
<head>    
    <title>Edit Data</title>    
 	  <link rel="stylesheet" href="../../main.css">
    <body background="../../images/geometric-blue-background.jpg">
</head>

<div class="edit-box">
    <a href="index.php" class="home">Return to Questions Page</a>
    <br/><br/>
    
    <form name="form1" method="post" action="edit.php">
        <table border="0">
            <tr> 
                <td>Email</td>
                <td><input type="text" name="email" value="<?php echo $email;?>"></td>
            </tr>
            <tr> 
                <td>Title</td>
                <td><input type="text" name="title" value="<?php echo $title;?>"></td>
            </tr>
            <tr> 
                <td>Body</td>
                <td><input type="text" name="body" value="<?php echo $body?>"></td>
            </tr>
			<tr> 
                <td>Skills</td>
                <td><input type="text" name="skills" value="<?php echo $skills;?>"></td>
            </tr>
            <tr>
                <td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
                <td><input type="submit" name="update" value="Update" class="update"></td>
            </tr>
        </table>
    </form>
	</div>
</body>
</html>
