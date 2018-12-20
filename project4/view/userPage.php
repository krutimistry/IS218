<?php include 'view/header.php'; ?>
<title>Questions</title>
<div class="question-box">
        <!---nav bar here----->
        <ul>
          <li><a class="active" href="index.php?action=show_questions">Your Questions</a></li>
          <li><a href="view/allQuestions.php">All Questions</a></li>
          <li style="float:right"><a href="index.php">Log Off</a></li>
        </ul>
<!-------nav bar end------------->
        <hr>
                <h1>Welcome <?php echo $account['fname']; ?>&nbsp;<?php echo $account['lname']; ?>!</h1>
                <h2>Your questions:</h2> 
                
                <?php $questionCounter = 1; ?>
                <?php foreach ($questions as $question) : ?>
                <font size="3" face = "century gothic">
                <table style="width:50%" border="1">
                  <tr>
                    <th>Questions</th>
                    <th>Title</th> 
                    <th>Body</th>
                    <th>Edit</th>
                    <th>Delete</th>
                  </tr>
                  <tr>
                    <td><?php echo $questionCounter; ?></td>
                    <td><?php echo $question['title']; ?></td>
                    <td><?php echo $question['body']; ?></td>
                    <td>
                     <form action="index.php" method="post">
                    <input type="hidden" name="questionId" value="<?php echo $question['id']; ?>">
                    <input type="hidden" name="action" value="show_edit_question">
                    <input type="submit" value="Edit" class='submit'>
                    </form>
                    </td>
                    <td>
                    <form action="index.php" method="post">
                    <input type="hidden" name="questionId" value="<?php echo $question['id']; ?>">
                    <input type="hidden" name="action" value="delete_question">
                    <input type="submit" value="Delete" class='submit'>
                    </form> 
                    </td>     
                  </tr>
                </table> 
                <br>

                <?php $questionCounter++; ?>
                <?php endforeach; ?>
                <form action='index.php' method='post'>
                    <input type="hidden" name="action" value="show_new_question">
                    <input type='submit' class='submit' value='New question'><br>
                </form>
            </div>
        </div>
</body>
<center>
<?php include 'view/footer.php'; ?>
</center>
