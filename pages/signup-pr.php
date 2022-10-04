<?php
    include ('../includes/db-connect.php');
    session_start();
?>
<?php

    if (isset($_POST['save'])){
        $fname = $_POST['first_name'];
        $lname = $_POST['last_name'];
        $u_sername = $_POST['user_name'];
        $e_mail = $_POST['e_mail'];
        $p_assword = $_POST['p_assword'];
        $cpass = $_POST['c-password'];

            //This is for the email address check
            $email_check = mysqli_query($conn, "SELECT * FROM user WHERE email = '$e_mail' ");
            $email_check_row = mysqli_num_rows($email_check);
                            


            //This is for the username check
            $username_check = mysqli_query($conn, "SELECT * FROM user WHERE username = '$u_sername' ");
            $username_check_row = mysqli_num_rows($username_check);



        if (empty($u_sername) || empty($p_assword) || empty($cpass) || empty($e_mail) || empty($lname) || empty($fname)){
            header('location: signup.php?error=empty-fields');
            echo 'Please fill in all required fields';
            exit();
        }

        else if ($p_assword !== $cpass){    
            echo 'Passwords does not match';
            exit();
        }

        else if ($email_check_row > 0){
            echo 'This email address is already in use';
        }
        else if ($username_check_row > 0){
            echo 'This username is already taken';
        }

        else{
        $dropp = mysqli_query($conn, "INSERT INTO user (id, username, first_name, last_name, email, password)
        VALUES ('', '$u_sername', '$fname', '$lname', '$e_mail', '$p_assword')");
        
        header("location: signin.php");
        exit();
        }

       

        
    }
?>