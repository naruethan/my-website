<?php
error_reporting(-1);
require('/confic/conn.php');
$UserNOimg = $_POST['UserNOimg']; 
$result="select * from member_login_db where username='$UserNOimg'"; 
$result = mysqli_query($dbcon,$result);
$run=mysqli_num_rows($result);
$row = mysqli_fetch_assoc($result);
//echo "Number_user ". $row["username"];
if ($_FILES["filUpload"]["size"] > 80000) {
	echo "Sorry, your file is too large.";
}else{
	
	if(move_uploaded_file($_FILES["filUpload"]["tmp_name"],"C:/xampp/htdocs/theam2+admin/output/imgPDF/".$_FILES["filUpload"]["name"]))
	{
		

		
		$sql_add_img = "INSERT INTO upload_img(UserNo,Filename1) VALUES ('".$row["username"]."','".$_FILES["filUpload"]["name"]."')";
        $sql_add_img = mysqli_query($dbcon,$sql_add_img);
		
		echo "<script>window.history.back()</script>";	
	}
}
?>

