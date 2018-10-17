<!DOCTYPE html>
<html>
   <body>
     <head>
      <title>Login</title>
      <fieldset>
      <legend>Login Page</legend>
      <form action = "<?php $_PHP_SELF ?>" method = "GET">
         Username: <input type = "text" name = "email" autocomplete="false" placeholder="Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" title="example@mail.com"  required><br>
         Password: <input type = "password" name = "pass" autocomplete="false" placeholder="Password" pattern=".{8,}" title="Eight or more characters" required><br>
         <input type = "submit" />
      </form>
    </fieldset>
    </head>
   </body>
</html>

<?php
   if( $_GET["email"] || $_GET["pass"] ) {
      echo "Welcome: ". $_GET['email']. "<br />";
      echo "Your password is: ". $_GET['pass']. "<br />";

      exit();
   }
?>

