<?php
    session_start();


    ?>
<html>
    <head>
        <title><?php echo $tit;  ?></title>
        <link rel="stylesheet" href="../styles/header.css" type="text/css">
        <link rel="stylesheet" href="../styles/signup.css" type="text/css">
        <link rel="stylesheet" href="../styles/footer.css" type="text/css">
        <link rel="stylesheet" href="../styles/main.css" type="text/css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>

   
        <header>
            <div class="headdiv">
                <a href="../index.php" id="logo">LOGO</a>
               <ul>
               
                    
                    <?php
                    if (isset($_SESSION['logged_in'])){
                      echo "
                    <li><a href=' ../pages/dashboard.php'>Dashboard</a></li>
                    <li><a href='../includes/logout.php'>Log Out <i class='fa fa-sign-out' aria-hidden='true'></i></a></li>
                ";
                    }
                    else{
                        echo "
                        <li><a href=' ../pages/signup.php'>Signup</a></li>
                    <li><a href=' ../pages/signin.php'>Login</a></li>
                    ";

                    }
                    ?>

                </ul>
            </div>
          
        </header>
        