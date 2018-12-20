<?php include 'view/header.php'; ?>
<html>
    <head>
    <body background="../images/geometric-blue-background.jpg">
        <title>Login</title>
    </head>
      <div class="login-box">
      <h2>Login Page</h2>
		   <form action="index.php" method="post">
                    <label for="email">E-mail </label><br>
                      <input name="email" type="email" class="email" placeholder="email@email.com"><br> 
                    <label for="password">Password </label>
       				        <input name="password" type="text" class="pass" placeholder="********"><br>
                    <input type="hidden" name="action" value="login">
                    <button name='name' class="submit" type="submit">Login</button><br>
        </form>
        <form action="index.php" method="post">
        <input type="hidden" name="action" value="show_registration">
          <input type="submit" class="register-submit" value="New User? Register">
        </form>
     </div>
</body>
</html>


<center>
<?php include 'view/footer.php'; ?>
</center>