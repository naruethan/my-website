<?php

require('/confic/conn.php');

$edit_user_iduser = $_POST["iduser"];
$edit_user_username = $_POST["username"];
$edit_user_newpwd = $_POST["newpwd"];
$edit_user_newname = $_POST["newname"];
$edit_user_newemail = $_POST["newemail"];
$edit_user_newmajor = $_POST["newmajor"];
$edit_user_newyear = $_POST["newyear"];
$edit_user_newtel = $_POST["newtel"];


//echo $edit_user_iduser; 

//echo $edit_user_username; 
//echo $edit_user_newpwd; 
//echo $edit_user_newname; 
//echo $edit_user_newemail; 
//echo $edit_user_newmajor; 
//echo $edit_user_newyear; 
//echo $edit_user_newtel; 


$check_user = "UPDATE member_login_db SET				
				username='$edit_user_username', 
				password='$edit_user_newpwd', 
				name='$edit_user_newname', 
				major='$edit_user_newmajor', 
				emailuser='$edit_user_newemail', 
				tel='$edit_user_newtel', 
				years='$edit_user_newyear' 			
				WHERE ID='$edit_user_iduser'";


if (mysqli_query($dbcon,$check_user)){
	echo "<script>window.open('http://localhost/theam2+admin/user.php','_self')</script>";
} else {
    echo "Error updating record: " . mysqli_error($dbcon);
}






?>