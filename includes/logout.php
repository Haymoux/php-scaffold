<?php
    session_start();
    ?>
<?php
unset($_SESSION['logged_in']);
unset($_SESSION['first_name']);
unset($_SESSION['last_name']);
unset($_SESSION['user_name']);
unset($_SESSION['user_email']);
unset($_SESSION['user_password']);

header ('location: ../index.php')

?>