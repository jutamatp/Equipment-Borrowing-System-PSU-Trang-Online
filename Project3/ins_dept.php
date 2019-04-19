<?php
$servername ="localhost";
$username ="root";
$password ="";
$dbname ="firstdb";

$conn = mysqli_connect($servername,$username,$password,$dbname);
if(!$conn){
    die("Connection failed: ".mysqli_connect_error());
}

$dept_no = $_POST["dept_no"];
$dept_name = $_POST["dept_name"];
$dept_number = $_POST["dept_number"];
$sql = "INSERT INTO dept(dept_no,dept_name,dept_number) values('$dept_no','$dept_name','$dept_number')";

if(mysqli_query($conn,$sql)){
    echo "$sql <br>";
    echo "record added!";
}else{
    echo "$sql <br>";
    echo "Error insert record: ".mysqli_error($conn);
}

mysqli_close($conn);
?>