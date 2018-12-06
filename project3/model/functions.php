function Login($email, $password){  
            $s = mysql_query("SELECT * FROM accounts WHERE email = '".$email."' AND password = '"$password"'");  
            $user_data = mysql_fetch_array($s);  
            $rows = mysql_num_rows($s);  
              
            if ($rows == 1)   
            {  
                return TRUE;  
            }  
            else  
            {  
                return FALSE;  
            }               
        }  

function Register($fname, lname, $email, birthday, $password){  
                $r = mysql_query("INSERT INTO accounts(fname, lname, email, birthday, password) values('".$fname."','".$lname."','".$email."','".$birthday."','".$password."')") or die(mysql_error());  
                return $r;  
                }
                
function UserExist($email){  
            $q = mysql_query("SELECT * FROM accounts WHERE emailid = '".$email."'");  
            echo $row = mysql_num_rows($q);  
            if($row > 0){  
                return true;  
            } else {  
                return false;  
            }  
        }  
                
