<?php

error_reporting(-1);
require('/connect/conn.php');

$username_adduser = $_POST["username"];
$password_adduser  = $_POST["password"];
$email_adduser  = $_POST["email"];
$name_adduser  = $_POST["name"];
$major_adduser  = $_POST["major"];
$year_adduser  = $_POST["year"];
$satatus_adduser  = 'นักศึกษา';

//echo $username_adduser.$password_adduser.$email_adduser.$name_adduser.$major_adduser.$year_adduser.$satatus_adduser;

$sql_add = "INSERT INTO member_login_db (username,password,name,major,emailuser,years,Position)
			VALUES ('$username_adduser',
					'$password_adduser',
					'$name_adduser',
					'$major_adduser',
					'$email_adduser',
					'$year_adduser',
					'$satatus_adduser')";



if (mysqli_query($dbcon,$sql_add)){
	
	//echo "New record created successfully";
		echo "<script>window.open('http://localhost/theam2+admin/Admin/pages/tables.php','_self')</script>";
} else {
    echo "Error: " . $sql_add . "<br>" .  mysqli_error($dbcon);
}

?>