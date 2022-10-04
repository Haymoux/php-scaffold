<?php

        //SESSION /PAGE RESTRICTION
        if($_SESSION['logged_in'] !=true ){
            header ('location: ../index.php');
        }
$tit = "Edit profile";
include '../includes/header.php';
?>

<body>
<h1 class="signh1">Edit Profile</h1>
    <div  class="signh2">
        <form method="post" action="../">

            <label>Password</label>
            <input type="password" name="password" value="<?php echo $passwo; ?>" placeholder = "First Name" autocomplete="off" required>
            <br/>
            <br/>
           
            <button type="submit" name="save" class="btn">submit</button>
        </form>
    </div>
</body>
<?php
include '../includes/footer.php';
?>
