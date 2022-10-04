<?php
include '../includes/header.php';
    include ('../includes/db-connect.php');
?>
<?php

    if (isset($_POST['save'])){
        $u_sername = $_POST['user_name'];
        $p_assword = $_POST['p_assword'];

            //This is for the email address check
            $email_check = mysqli_query($conn, "SELECT * FROM user WHERE email = '$u_sername' and password = '$p_assword'");
                        //This line fetches the result from mysqli as an array
            $email_check_array = mysqli_fetch_array($email_check);
                            
                         

            //This is for the username check
            $username_check = mysqli_query($conn, "SELECT * FROM user WHERE username = '$u_sername' and password = '$p_assword'");
                        //This line fetches the result from mysqli as an array
            $username_check_array = mysqli_fetch_array($username_check);



        if (empty($u_sername) || empty($p_assword) ){
            header('location: signup.php?error=empty-fields');
            echo 'Please fill in all required fields';
            exit();
        }

        else if (is_array($email_check_array)){
        //set session variables
            $_SESSION['logged_in'] = true; 
            $_SESSION['first_name'] = $email_check_array['first_name']; 
            $_SESSION['last_name'] = $email_check_array['last_name'];
            $_SESSION['user_name'] = $email_check_array['username'];
            $_SESSION['user_email'] = $email_check_array['email'];
            $_SESSION['user_id'] = $email_check_array['id'];
                    //I will not advise you to do this please... this code is here because I just feel like and it is not  a real project, you dig?
            $_SESSION['user_password'] = $email_check_array['password'];

            header ('location: dashboard.php' );
        }

        else if (is_array($username_check_array)){
                   //set session variables
                   $_SESSION['logged_in'] = true; 
                   $_SESSION['first_name'] = $email_check_array['first_name']; 
                   $_SESSION['last_name'] = $email_check_array['last_name'];
                   $_SESSION['user_name'] = $email_check_array['username'];
                   $_SESSION['user_email'] = $email_check_array['email'];
                   $_SESSION['user_id'] = $email_check_array['id'];
                           //I will not advise you to do this please... this code is here because I just feel like and it is not  a real project, you dig?
                   $_SESSION['user_password'] = $email_check_array['password'];
       
                   header ('location: dashboard.php' );
        }

        else{
        echo "Incorrect username or password";
        }

       

        
    }
?>