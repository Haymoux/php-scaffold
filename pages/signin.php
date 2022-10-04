

<?php


        

$tit = "SignIn Page";
include '../includes/header.php';
 

if ( isset($_SESSION ['logged_in'])){
	header ("location: dashboard.php");
	exit;
		}
?>


<body>
<h1 class="signh1">SignIn</h1>
    <div  class="signh2">
        <form method="post" action="signin-pr.php">
            <label>Username or Email </label>
            <input type="text" name="user_name" placeholder = "Username or Email " autocomplete="on" required minlength="2">
            <br/>
            <br/>
            <label>Password</label>
            <input type="password" name="p_assword"  placeholder = "Password" autocomplete="on" required minlength="4" maxlength="25">
            <br/>
            <br/>
           
            <button type="submit" name="save" class="btn">submit</button>
        </form>
    </div>
</body>
<?php
include '../includes/footer.php';
?>

