<?php
//รับค่ารหัสแผนกจากฟอร์ม
$dept_no =$_REQUEST['dept_no'];

require('oo_mysql_conn.php');

//สร้างคำสั่ง sql
$query = "SELECT * FROM dept WHERE dept_no = '$dept_no'";
// สั้งให้คำสั่ง sql ทำงาน
$result =$mysqli->query($query) or die ("Query Failed");

//ดึงข้อมูลมาใส่ในตัวแปล
$row = $result->fetch_array();
$dept_no = $row['dept_no'];
$dept_name = $row['dept_name'];
$dept_number = $row['dept_number'];
echo "<b>แก้ไขข้อมูลของรหัสแผนก $dept_no</b>";

//สร้าง ฟอร์มสำหรับข้อมูลใหม่
echo "<form action =\"oo_upd_dept.php\" methos=\"post\">";
echo "<input type=\"hidden\" name=\"dept_no\" value=\"$dept_no\">";
echo "ชื่อแผนก : <input type=\"text\" name=\"dept_name\" value=\"$dept_name\">";
echo "จำนวน : <input type=\"text\" name=\"dept_number\" value=\"$dept_number\">";
echo "<br><input type=\"submit\" name=\"update\" value=\"Update\">";
echo "</form>";

$result->free();
$mysqli->close();
?>