<!DOCTYPE html>
<html>
   <body>
      <title>Questions</title>
      <fieldset>
      <div class="questions-box">
      <h2>Questions Page</h2>
      <form action = "questions.php" method = "GET">
         
         Name: <input type = "text" class="name" name = "name" required><br>

         <label for="body">Body</label>
         <textarea id="subject" name="body" class="name" required style="height:75px"></textarea><br>

         <label for="subject">Skills</label>
         <textarea id="subject" name="skills" class="name" required style="height:100px"></textarea><br>

      <button name='name' class="submit" type="submit">Login</button><br><br>
      </div>
      </form>
     </fieldset>
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


<style>

body {
    background-color: #5abdd2;
    font-family: 'Ubuntu', sans-serif;
}

.questions-box{
    background-color: #99c0ff;
    color: black;
    margin: auto;
    padding: 20px;
    width: 300px;
    border: 10px solid black;
    font-family: 'Ubuntu', sans-serif;
}

.name {
    width: 76%;
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
