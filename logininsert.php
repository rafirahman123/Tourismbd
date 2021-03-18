<?php

        //require_once('include/sessioncheck.php');
		session_start();

        $user="root";
        $password="";
        $db="tour";
        $conn= mysqli_connect("localhost", $user ,$password, $db);
        mysqli_select_db($conn,$db);
        $email=$_POST['user_Email'];
        $password=$_POST['user_Password'];
        $registration= "select user_ID from userreg where user_Email = '$email' and user_Password = '$password' ";
        $r = mysqli_query($conn,$registration);

        $count = mysqli_num_rows($r);

        if($count > 0)
        {
            $_SESSION['is_logged_in'] = 1;
			
			while ($list = mysqli_fetch_assoc($r)) {
				$_SESSION['user_ID'] = $list['user_ID'];
				
				$_SESSION['valid'] = true;
			}
			
        }
        else{
            die('Error in Login!!');
        }
		

  mysqli_close($conn);

?>