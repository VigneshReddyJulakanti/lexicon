<?php
// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');

$con = mysqli_connect('sql113.epizy.com', 'epiz_30617136', 'k91a2AjJILG5v','epiz_30617136_timepasscoders1');

// get the post records
$name = $_POST['name'];
$user_id = $_POST['user_id'];
$password = $_POST['password'];


// database insert SQL code
$sql = "INSERT INTO `private_details` ( `name`, `user_id`, `password`) VALUES ( '$name', '$user_id', '$password')";

// insert in database 
$rs = mysqli_query($con, $sql);

// if($rs)
// {
// 	echo "Contact Records Inserted";
// }

?>