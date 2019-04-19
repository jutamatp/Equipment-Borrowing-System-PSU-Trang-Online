<?php
session_start();
header("Cache-control: private");

if(!isset($_SESSION['login'])){
    unset($_SESSION['login']);
    unset($_SESSION['uname']);
    $_SESSION = array(); //reset session array
    session_destroy(); //Finally, destory the session.
    echo "<b>You have successfully logged out</b><br>";
    echo "<a href=\"s_login.html\">Login again</a>";
}else{
    echo "<b>Error : You do not login to system</b><br>";
    echo "Please <a href=\"s_index.html\">login</a><br>";
}
?>