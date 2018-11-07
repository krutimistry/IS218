<!DOCTYPE html>
<html>
    <head>
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
<p>New User? <a href="https://web.njit.edu/~km487/is218/project2/register.php">Create Account</a></p>
      </div>
</html>

<style>

body {
    background-color: #5abdd2;
    font-family: 'Ubuntu', sans-serif;
}

.login-box{
    background-color: #99c0ff;
    color: black;
    margin: auto;
    padding: 20px;
    width: 300px;
    border: 10px solid black;
    font-family: 'Ubuntu', sans-serif;
}

.email {
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

.pass {
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
}

.name {
    width: 75px;
    padding: 10px;
    font-weight: bold;
    font-size: 100%;
    background: #3366cc;
    color: #fff;
    border: 1px solid #3366cc;
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
