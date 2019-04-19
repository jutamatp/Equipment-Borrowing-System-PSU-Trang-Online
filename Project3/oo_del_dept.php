<?php
require('oo_mysql_conn.php');

$dept_no = $_REQUEST['dept_no'];

$sql = "DELETE from dept WHERE dept_no ='$dept_no'";

//excute sql
if($mysqli->query($sql)){
	echo "Record deleted!";
}else{
	echo "Error :",mysql_error();
}
$mysqli->close();
?>