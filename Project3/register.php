<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ระบบยืม-คืน</title>

    <link href="pacific.css" rel="stylesheet" type="text/css">

</head>

<body>
    <div id="wrapper">

        <header>

            <h1></h1>
        </header>

        <nav>
            <ul>

                <li><a href="index.html">หน้าแรก</a></li>
                <li><a href="frm_register.html">สมัครสมาชิก</a></li>
                <li><a href="index.html">ค้นหาอุปกรณ์</a></li>
            </ul>
        </nav>

        <section id="main">
        <?php
include("mysql_conn.php");

$fname = $_REQUEST['fname'];
$lname = $_REQUEST['lname'];
$login = $_REQUEST['login'];
$passwd_sha1 = md5($_REQUEST['passwd']);
echo "passwd_sha1: ".$passwd_sha1."<br>";

$sql ="INSERT INTO users(fname,lname,login,passwd) value(:bp_fname, :bp_lname, 
:bp_login, :bp_passwd)";

$stmt = $conn->prepare($sql);
$stmt->bindParam(':bp_fname',$fname);
$stmt->bindParam(':bp_lname',$lname);
$stmt->bindParam(':bp_login',$login);
$stmt->bindParam(':bp_passwd',$passwd_sha1);
$stmt->execute();
if($stmt !== false){
    echo $stmt->rowCount()." record INSERTED";
}else{
    echo "Insertion failed";
}
?>
            </form>
            <footer>
            </footer>
        </section>
    </div>
</body>

</html>