<?php
    session_start();
	
	if(isset($_SESSION['login_check']) && $_SESSION['login_check'] != '')
	{
		echo $_SESSION['login_check'];
		$_SESSION['login_check'] = '';
	}
?>
<!DOCTYPE html>   
<html>   
<head>  
<meta name="viewport" content="width=device-width, initial-scale=1">  
<title> Login Page </title>  
<style>   
Body {  
  font-family: Calibri, Helvetica, sans-serif;  
  background-color: pink;  
}  
button {   
       background-color: #4CAF50;   
       width: 100%;  
        color: orange;   
        padding: 15px;   
        margin: 10px 0px;   
        border: none;   
        cursor: pointer;   
         }   
 form {   
        border: 3px solid #f1f1f1;   
    }   
 input[type=text], input[type=password] {   
        width: 100%;   
        margin: 8px 0;  
        padding: 12px 20px;   
        display: inline-block;   
        border: 2px solid green;   
        box-sizing: border-box;   
    }  
 button:hover {   
        opacity: 0.7;   
    }   
  .cancelbtn {   
        width: auto;   
        padding: 10px 18px;  
        margin: 10px 5px;  
    }   
        
     
 .container {   
        padding: 25px;   
        background-color: lightblue;  
    }   
</style>   
</head>    
<body>    
    <center> <h1> Login Form </h1> </center>   
    <form method="post" action="adminlogininsert.php">  
        <div class="container">   
            <label>Email : </label>   
            <input type="text" placeholder="Enter Email" name="Email" required>  
            <label>Password : </label>   
            <input type="password" placeholder="Enter Password" name="Password" required>
			
			
								
            <button type="submit">Login</button>   
            Not a member? <a href="adminreg.php"> Sign Up </a>   
        </div>   
    </form>     
</body>     
</html>