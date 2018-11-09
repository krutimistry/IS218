<!DOCTYPE html>
<html>
   <body background="geometric-blue-background.jpg">
      <title>Questions</title>
      <div class="questions-box">
      <h2>Questions Page</h2>
      <form action = "question-action.php" method = "post">
         
         Email: <input type = "text" class="field" name = "owneremail" required><br>
         
         Title: <input type = "text" class="field" name = "title" required><br>

         <label for="body">Body</label>
         <textarea id="subject" name="body" class="field" required style="height:50px"></textarea><br>

         <label for="subject">Skills</label>
         <textarea id="subject" name="skills" class="field" required style="height:50px"></textarea><br>

      <button name='name' class="submit" type="submit">Submit</button><br><br>
      <p>Return to <a href="login.php">Login</a></p>
      </div>
      </form>
   </body>
</html>

<style>

body {
    /*
    background-color: #5abdd2;
    */
    font-family: 'Ubuntu', sans-serif;
}

.questions-box{
    background-color: #99c0ff;
    color: black;
    margin: auto;
    padding: 20px;
    width: 350px;
    border: 10px solid black;
    font-family: 'Ubuntu', sans-serif;
}

.field {
    width: 80%;
    font-weight: 700;
    font-size: 14px;
    letter-spacing: 1px;
    background: white;
    padding: 10px 20px;
    border: none;
    outline: none;
    text-align: center;
    margin-bottom: 27px;
    font-family: 'Ubuntu', sans-serif;
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
