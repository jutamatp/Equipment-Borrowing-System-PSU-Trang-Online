<?php
$servername ="localhost";
$username ="root";
$password ="";
$dbname ="firstdb";

$conn = mysqli_connect($servername,$username,$password,$dbname);
if(!$conn){
    die("Connection failed: ".mysqli_connect_error());
}

$dept_no = $_POST['dept_no'];
$dept_name = $_POST['dept_name'];
$sql ="UPDATE dept set dept_name = '$dept_name' WHERE dept_no = '$dept_no'";

if (mysqli_query($conn,$sql)) {
	echo "$sql <br>";
	echo "Record updated successfully";
}else {
	echo "$sql <br>";
	echo "Error updating record: ".mysqli_error($conn);
}
mysqli_close($conn);
?>