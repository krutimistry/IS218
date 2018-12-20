<?php include 'view/header.php'; ?>
<html>
<head>
<body background="../images/geometric-blue-background.jpg">
      <div class='edit-box'>
                <form action='index.php' method='post'>
                    <h1>Add a new question!</h1>
                    <input type='text' name='questionName' placeholder='Question Name'><br><br>
                    <input type='text' name='questionBody' placeholder='Question Body'><br><br>
                    <textarea name='questionSkills' placeholder='Question skills'></textarea><br><br>
                    
                    <input type="hidden" name="action" value="create_new_question">
                    <input type='submit' class='submit' value='Add'><br>
                </form>
        </div>
</body>
</head>
<center>
<?php include 'view/footer.php'; ?>
</center>