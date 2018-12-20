<?php include 'view/header.php'; ?>

<html>
<head>
    <body background="../images/geometric-blue-background.jpg">
        <title>Register</title>
    </body>
</head>

        <div class="registration-box">
                <form action="index.php" method="post">
                    <h2>Registration</h2>
                    <label>First Name</label><br>
                      <input type="text" name="firstname" class="inputBox" placeholder="First Name"><br>
                    
                    <label>Last Name</label><br>
                    <input type="text" name="lastname" class="inputBox" placeholder="Last Name"><br>
                    
                    <label>Email</label><br>
                    <input type="text" name="email" class="inputBox" placeholder="Email Address"><br>
                    
                    <label>Birthday</label><br>
                    <input name="birthday" class="inputBox" type="text" placeholder="YYYY/DD/MM" required>
                    
                    <label>Password</label>
                    <input name="password" class="inputBox" type="text" placeholder="Password" required><br>
        
                    <input type="submit" class="submit" value="Register"><br>
                    <input type="hidden" name="action" value="register">
                    
                    <p>Already have an account? <a href="index.php">Back to Login</a></p>
                </form>
            </div>
        </div>
<center>
<?php include 'view/footer.php'; ?>
</center>
