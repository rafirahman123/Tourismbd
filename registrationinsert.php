<?php

        session_start();

        $user="root";
        $password="";
        $db="tour";
        $conn= mysqli_connect("localhost", $user ,$password, $db);
        mysqli_select_db($conn,$db);
        $f_name=$_POST['user_FirstName'];
        $l_name=$_POST['user_LastName'];
        $age=$_POST['user_age'];
        $email=$_POST['user_Email'];
        $password=$_POST['user_Password'];
        $address=$_POST['user_Address'];
        $phone=$_POST['user_Phone'];
        $city=$_POST['user_city'];
        $country=$_POST['user_country'];

        $registration= "insert into userreg(user_FirstName, user_LastName, user_age, user_Email, user_Password, user_Address, user_Phone, user_city, user_country) values('$f_name', '$l_name', '$age', '$email', '$password', '$address', '$phone', '$city', '$country' )";
        $r = mysqli_query($conn,$registration);

        if($r > 0)
        {
            $_SESSION['reg_check'] = 'Registration Successful';
		
            header('Location: login.php');
        }
        else{
            die('Error in registration!!');
        }

?>  