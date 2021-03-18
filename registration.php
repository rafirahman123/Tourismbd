<?php
    session_start();
	
	if(isset($_SESSION['reg_check']))
	{
		echo $_SESSION['reg_check'];
		unset($_SESSION['reg_check']);
    }
    /*if($_POST['user_Password']!==$_POST['confirmpassword']) {
        echo "Your passwords did not match";
        } else {
        // success page here
        }*/
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
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
 input[type=text], input[type=password], input[type=email] {   
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
    <div>
        <form action="registrationinsert.php" method="post">
            <div class="container">
                <h1>Registration</h1>
                <p>Fill up the form with correct value.</p>

                <label for="user_FirstName"><b>First Name: </b></label>
                <input type="text" name="user_FirstName" required><br>

                <label for="user_LastName"><b>Last Name: </b></label>
                <input type="text" name="user_LastName" required><br>

                <label for="user_age"><b>Age: </b></label>
                <input type="text" name="user_age" required><br>

                <label for="user_Email"><b>Email Address: </b></label>
                <input type="email" name="user_Email" required><br>

                <label for="user_Phone"><b>Phone Number: </b></label>
                <input type="text" name="user_Phone" required><br>

                <label for="user_Address"><b>Address: </b></label>
                <input type="text" name="user_Address" required><br>

                <label for="user_Password"><b>Password: </b></label>
                <input type="password" name="user_Password" required><br>

                <label for="confirmpassword"><b>Confirm Password: </b></label>
                <input type="password" name="confirmpassword" required><br>

                <label for="user_city"><b>City: </b></label>
                <input type="text" name="user_city" required><br>

                <label for="user_country"><b>Country: </b></label>
                <input type="text" name="user_country" required><br>

				
                
                <input type="submit" name="create" value="Sign Up">
            </div>
        </form>
    </div>

</body>
</html>