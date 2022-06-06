<?php 
    $username = $_POST['email'];
    $cookieName = 'authenticated';
    if(isset ($username) && !empty($username)) {
        setcookie($cookieName, $username, time() + 10000*30);
        header("Location: /project/index.php");
    }
?>
 