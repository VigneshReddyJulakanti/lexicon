<?php
// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');

$con = mysqli_connect('sql113.epizy.com', 'epiz_30617136', 'k91a2AjJILG5v','epiz_30617136_timepasscoders1');

// get the post records
$note = $_POST['note'];


// database insert SQL code
$sql = "INSERT INTO `gov_note` ( `note`) VALUES ( '$note')";

// insert in database 
$rs = mysqli_query($con, $sql);

// if($rs)
// {
// 	echo "Contact Records Inserted";
// }

?>