<?php 
    session_start();
    session_destroy();

    if(isset($_COOKIE['email']) and isset($_COOKIE['pass'])){

        $email = $_COOKIE['email'];
        $pass = $_COOKIE['pass'];
        setcookie('email', $email, time()-1);
        setcookie('pass', $pass, time()-1);
    }
    echo "You are now logged out";
    echo "<a href ='index.php'>Login </a>";

?>