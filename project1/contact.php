<!DOCTYPE html>
<html>
   <body>
     <head>
      <title>Questions</title>
      <fieldset>
      <legend>Question Form</legend>
      <form action = "<?php $_PHP_SELF ?>" method = "GET">
         Name: <input type = "text" name = "name" required><br><br>

         <label for="body">Body</label>
         <textarea id="subject" name="body" placeholder="Question Body..." required style="height:100px"></textarea><br><br>

         <label for="subject">Skills</label>
         <textarea id="subject" name="skills" pattern="[a-zA-Z,]*$" title="Use commas" placeholder="skills, skills, ..." required style="height:200px"></textarea><br><br>

      <input type = "submit"/>
      </form>
     </fieldset>
    </head>
   </body>
</html>

<?php
   if( $_GET["name"] || $_GET["body"] || $_GET["skills"] ) {
      echo "Name: ". $_GET['name']. "<br />";
      echo "Body: ". $_GET['body']. "<br />";
      echo "Skills: ". $_GET['skills']. "<br />";
      exit();
   }
?>
