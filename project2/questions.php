<!DOCTYPE html>
<html>
   <body>
     <head>
      <title>Questions</title>
      <fieldset>
      <legend>Question Form</legend>
      <form action = "question.php" method = "GET">
         Name: <input type = "text" name = "name" required><br><br>

         <label for="body">Body</label>
         <textarea id="subject" name="body" required style="height:100px"></textarea><br><br>

         <label for="subject">Skills</label>
         <textarea id="subject" name="skills" required style="height:200px"></textarea><br><br>

      <input type = "submit"/>
      </form>
     </fieldset>
    </head>
   </body>
</html>


<?php
$name=$_GET['name'];
$body=$_GET['body'];
$skills=$_GET['skills'];
$list=split(',',$skills);
$contact=true;

if(empty($name)){
  echo "Empty name input.";
  $contact=false;
	}

if(strlen($name)<3){
  echo "Name is less than 3 characters.";
  $contact=false;
	}

if(empty($body)){
  echo "Empty body feild.";
  $contact=false;
	}

if(strlen($body)>500){
  echo "500 characters only";
  $contact=false;
	}

if($contact){
  echo "Name: $name</br>";
  echo "Body: $body</br>";
  echo "Skills: ";
    foreach($list as $skill){
      echo "$skill</br>";
    }
  }
?>
