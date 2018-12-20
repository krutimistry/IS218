<?php include 'view/header.php'; ?>
<html>
<head>
<body background="../images/geometric-blue-background.jpg">
      <div class='edit-box'>
                <form action='index.php' method='post'>
                    <h1>Add a new answer!</h1>
                    <input type='text' name='answerName' placeholder='Answer Name'><br><br>
                    <input type='text' name='answerBody' placeholder='Answer Body'><br><br>
                    <textarea name='answerSkills' placeholder='Answer skills'></textarea><br><br>
                    
                    <input type="hidden" name="action" value="create_new_answer">
                    <input type='submit' class='submit' value='Add'><br>
                </form>
        </div>
</body>
</head>
<center>
<?php include 'view/footer.php'; ?>
</center>