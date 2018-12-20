<?php
//insert.php
require('/conn.php');

$IDuser = $_POST["ID"];
$Text = $_POST["subject"];
$member_token = $_POST["UserToken"];
$name_Admin = $_POST["nameAdmin"];

//echo $IDuser;
//echo $member_token;
//echo "<script>window.open('http://localhost/theam2+admin/Admin/pages/Edite-status.php?page=$IDuser','_self')</script>";
$subject = mysqli_real_escape_string($dbcon, $_POST["subject"]);
//$comment = mysqli_real_escape_string($dbcon, $_POST["comment"]);
$query = "
 INSERT INTO notification_db (msg_txt,token,Admin_name)
 VALUES ('$subject','$member_token','$name_Admin')
 ";
 
if (mysqli_query($dbcon,$query)){
	echo "<script>window.history.back();</script>";
} else {
    echo "Error record: " . mysqli_error($dbcon);
}

?>

