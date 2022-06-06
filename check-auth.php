<?php 
    $cookieName = "authenticated";
    // setcookie($cookieName, $cookieValue, time() + (86400 * 30));
    if (isset ($_COOKIE[$cookieName])){
        echo "Welcome: ".$_COOKIE[$cookieName];
    } else {
        //Redirect to a different page
        header("Location: /project/login.php");
        echo "Cookie is not set";
    }
?>