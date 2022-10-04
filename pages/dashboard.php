<?php


//SESSION /PAGE RESTRICTION
       
$tit = "Dashboard";
$_SESSION ['logged_in'] =false;
include_once ("signin-pr.php");


 //I could have done better...but it is what it is
if ($_SESSION ['logged_in'] === true){
 
}
else{
    header('Location: ../index.php');
}
            
        


?>
<body>
    <h1 id="welcome">Welcome, <?php echo $_SESSION['first_name']; ?></h1>
    <div class="container">
    
            <div class="_stbox">
            <a class="gen_link "href="##">
                <p>Book a room</p>
                <p>icon</p>
                </a>
            </div>
    


            <div class="_ndbox">
            <a class="gen_link "href="##">
                <p>My Reservations</p>
                <p>icon</p>
                </a>
            </div>
    

        
            <div class="_rdbox">
            <a class="gen_link "href="##">
                <p>Profile</p>
                <p>icon</p>
                </a>
            </div>
        
    </div>
</body>
<?php
include '../includes/footer.php';
?>