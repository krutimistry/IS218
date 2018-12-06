<!DOCTYPE html>
<html>
    <head>
	  <link rel="stylesheet" href="../../main.css">
    <body background="../../images/geometric-blue-background.jpg">
        <title>Login</title>
    </head>

      <div class="login-box">
		    <h2>Login Page</h2>
		    		<form form class="form" role="form" action="login-action.php" method="post">
              <label for="email">E-mail </label>
                <input name="email" type="email" class="email" placeholder="email@email.com"><br>
		        	<label for="password">Password </label>
       				  <input name="pass" type="text" class="pass" placeholder="********"><br>
                 <button name='name' class="submit" type="submit">Login</button><br><br>

	        	</form>
        <p>New User? <a href="register.php">Create Account</a></p>
      </div>
</body>
</html>
