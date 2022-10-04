<?php

include ('../includes/db-connect.php');
$tit = "signup page";
include '../includes/header.php';



 

if (isset($_SESSION['logged_in'])){
	echo "<h2>You are already logged in</h2>
		<br />
		<h3>
	<a href= '../includes/logout.php'>Sign Out </a>now or <a href='dashboard.php'>Go to your Dashboard</a>
		</h3>";
		exit();
}
    
       




?>
<body>
    <h1 class="signh1">Signup</h1>
    <div  class="signh2">
        <form method="post" action="signup-pr.php" class="signform">
          
            <label>First Name</label>
            <input type="text" name="first_name"  placeholder = "First Name" autocomplete="on" required minlength="1" maxlength="15">
            <br/>
            <br/>
            <label>Last Name</label>
            <input type="text" name="last_name" signup-pr.php" placeholder = "Last Name" autocomplete="on" required minlength="1" maxlength="15">
            <br/>
            <br/>

            <label> UserName</label>
            <input type="text" name="user_name" placeholder = "Username" autocomplete="on" required minlength="2" maxlength="15">
            <br/>
            <br/>
        
            <label>Email</label>
            <input type="e-mail" name="e_mail" placeholder = "Email" autocomplete="on" required>
            <br/>
            <br/>

            <label>Password</label>
            <input type="password" name="p_assword"  placeholder = "Password" autocomplete="on" required minlength="4" maxlength="25">
            <br/>
            <br/>
            <label>Confirm Password</label>
            <input type="password" name="c-password" placeholder = "Confirm Password" autocomplete="off" required minlength="4" maxlength="25">
            <br/>
            <br/>
            <button type="submit" name="save" class="btn">submit</button>
        </form>
    </div>
</body>
<?php

include '../includes/footer.php';
?>

