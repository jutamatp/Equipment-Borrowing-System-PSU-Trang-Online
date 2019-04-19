<?php
//Check is user already login or still login?
if(isset($_COOKIE['login']) or isset($_COOKIE['uname'])){
    setcookie("login","",time()-3600);
    setcookie("uname","",time()-3600);
    setcookie("counter","",time()-3600);
    echo "<b>You have successfully logged out</b><br>";
    echo "<a href=\"c_index.php\">Login again</a>";
}else{
    echo "No coolie value<br>";
    echo "<b>You do not login to system</b><br>";
    echo "<a href=\"c_index.php\">Login to system</a>";
}
?>