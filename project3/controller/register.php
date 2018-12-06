<!DOCTYPE html>
<html>
<head>
	  <link rel="stylesheet" href="../../main.css">
    <body background="../../images/geometric-blue-background.jpg">
    <title>Register</title>
</body>
</head>
    <body>      			
		    <div class="registration-box">
            <h2>Registration</h2>
			        <form form class="form-asd" role="form" action="register-action.php" method="post">
              
                <label for="fname">First Name</label>
                  <input name="fname" class="inputBox" type="text" placeholder="First Name" required><br>
                
                <label for="lname">Last Name</label>
                  <input name="lname" class="inputBox" type="text" placeholder="Last Name" required><br>           
		        		<label for="email">E-mail </label>
        				  <input name="email" class="inputBox" type="email" placeholder="Email@email.com" required><br>

					     	<label for="birthday">Birthday </label>
       				    <input name="birthday" class="inputBox" type="text" placeholder="YYYY/DD/MM" required><br>
                                             
	        		  <label for="password">Password </label>
	        				<input name="password" class="inputBox" type="text" placeholder="Password" required><br>
			        			
              <button name='name' class="submit" type="submit">Sign Up</button><br><br>
			        </form> 
		     </div>    	
    </body>
</html>

