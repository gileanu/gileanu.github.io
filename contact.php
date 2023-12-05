<?php
// database connection code
if(isset($_POST['txtName']))
{
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');
$con = mysqli_connect('localhost', 'root', '','db_gileanu-t1');

// get the post records

$txtName = $_POST['f-name'];
$txtEmail = $_POST['l-name'];

// database insert SQL code
$sql = "INSERT INTO `tbl_contact` (`Id`, `f-name`, `l-name`) VALUES ('0', '$f-name', '$l-name')";

// insert in database 
$rs = mysqli_query($con, $sql);
if($rs)
{
	echo "Contact Records Inserted";
}
}
else
{
	echo "Are you a genuine visitor?";
	
}
?>