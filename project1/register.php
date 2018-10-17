<!DOCTYPE html>
<html>
   <body>
     <head>
      <title>Register</title>
      <fieldset>
      <legend>Registration Page</legend>
      <form action = "<?php $_PHP_SELF ?>" method = "GET">
        First Name: <input type = "text" name = "firstname" placeholder="First Name" required><br>
        Last Name: <input type = "text" name = "lastname" placeholder="Lastname" required><br>
	      Birthday: <input type = "date" name = "birthday" placeholder="mm/dd/yyyy" pattern="(0[1-9]|1[012])[- /.](0[1-9]|[12][0-9]|3[01])[- /.](19|20)\d\d" title="mm/dd/yyyy" required><br>
	      Email: <input type = "text" name = "email" placeholder="example@mail.com" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" title="example@mail.com" required><br>
	      Password: <input type = "password" name = "password" pattern=".{8,}" title="Eight or more characters" required><br>
      <input type = "submit" />
      </form>
    </fieldset>
    </head>
   </body>
</html>

<?php
   if( $_GET["firstname"] || $_GET["lastname"] || $_GET["birthday"] || $_GET["email"] || $_GET["password"] ) {
      echo "Firstname: ". $_GET['firstname']. "<br />";
      echo "Lastname: ". $_GET['lastname']. "<br />";
      echo "Birthday: ". $_GET['birthday']. "<br />";
      echo "Email: ". $_GET['email']. "<br />";
      echo "Password: ". $_GET['password']. "<br />";
      exit();
   }
?>
