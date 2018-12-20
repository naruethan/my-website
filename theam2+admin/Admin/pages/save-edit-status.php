<?php
error_reporting(-1);
require('/connect/conn.php');

$edit_status_id = $_POST["ID"];
$select_opt = $_POST["select_opt"];
//echo $edit_status_id;
//echo $select_opt;
if($select_opt == ""){
	
	echo "<script>window.history.back();</script>";
	
}
$check_user = "UPDATE member_login_db SET 
				Status='$select_opt' WHERE ID='$edit_status_id'";


if (mysqli_query($dbcon,$check_user)){
	echo "<script>window.open('http://localhost/theam2+admin/Admin/pages/satatus.php','_self')</script>";
} else {
    echo "Error updating record: " . mysqli_error($dbcon);
}








?>