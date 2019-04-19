<?php
session_start();

if(empty($_REQUEST['passwd']) || empty($_REQUEST['login'])){
    echo "<b>Please fill Login name and Password </b>";
    exit;
}else{
    $login = $_REQUEST['login'];
    $passwd = $_REQUEST['passwd'];
    $passwd_sha1 = md5($_REQUEST['passwd']);

    include("mysql_conn.php");

    $query ="select * from users where login = :bp_login and passwd= :bp_passwd";
    $stmt = $conn->prepare($query);
    $stmt->bindParam(':bp_login',$login);
    $stmt->bindParam(':bp_passwd',$passwd_sha1);
    $stmt->execute();

    if($stmt !== false){
            $row = $stmt->fetch(PDO::FETCH_ASSOC);
            $uname = $row['fname'];
            $counter = 1;

            echo "<font color ='green'><b>Welcome $uname login successfully</b></font><br>";
            $_SESSION['login']= $login;
            $_SESSION['uname']= $uname;
            
            echo "SET Session to user : $uname, login : $login <br>";
            echo "<a href=\"s_user.php\">User detail</a><br>";
            echo "<a href=\"s_logout.php\">Logout</a>";
        }else{
            echo "User $uname Authentication Failed<br>";
            echo "<a href=\"s_login.html\">Login again</a>";
        }
    
    $conn = null;
}

?>