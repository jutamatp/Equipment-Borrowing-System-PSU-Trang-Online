<?php
session_start();
header("Cache-control: private");

if(!isset($_SESSION['login'])){
    echo "<b>Error : You do not login to system</b><br>";
    echo "Please <a href=\"s_index.html\">login</a><br>";
}else{
    $login = $_SESSION['login'];
    $uname = $_SESSION['uname'];
    echo "<center><h1>Session User Detail</h1>";
    echo "<h2>Welcome user : $uname</h2>";
    echo "<h2>login : $login</h2></center>";
}
?>