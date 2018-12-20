<?php
error_reporting(-1);
require('/confic/conn.php');
$UserNOimg = $_POST['UserNO']; 
$result="select * from member_login_db where username='$UserNOimg'"; 
$result = mysqli_query($dbcon,$result);
$run=mysqli_num_rows($result);
$row = mysqli_fetch_assoc($result);
//echo "Number_user ". $row["username"];

	
	if(move_uploaded_file($_FILES["filUpload"]["tmp_name"],"C:/xampp/htdocs/theam2+admin/file-user-upload/".$_FILES["filUpload"]["name"]))
	{
		

		
		$sql_add_file = "INSERT INTO upload_db(NO_usr,File_Db) VALUES ('".$row["username"]."','".$_FILES["filUpload"]["name"]."')";
        $sql_add_file = mysqli_query($dbcon,$sql_add_file);
		
		echo "<script>window.history.back()</script>";	
	}

?>

