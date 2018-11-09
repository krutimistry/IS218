<!DOCTYPE html>
<html>
    <head>
    <body background="geometric-blue-background.jpg">
        <title>Register</title>
    </body>
    </head>
    <body>      			
		    <div class="registration-box">
            <h2>Registration</h2>
			        <form form class="form-asd" role="form" action="action.php" method="post">
              
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

<style>
body {
    background-color: #5abdd2;
    font-family: 'Ubuntu', sans-serif;
}

.registration-box{
    background-color: #99c0ff;
    color: black;
    margin: auto;
    padding: 20px;
    width: 300px;
    border: 10px solid black;
    font-family: 'Ubuntu', sans-serif;
}

.inputBox {
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
    /*
    box-shadow: 0 0 20px 1px rgba(0, 0, 0, 0.04);
    */
    }
</style>

