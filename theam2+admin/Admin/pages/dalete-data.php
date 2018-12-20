<?php

error_reporting(-1);
require('/connect/conn.php');


$data_qurry_delete = $_GET["page"];
//echo $data_qurry_delete;

$sql_delete = "DELETE FROM data_db WHERE id='$data_qurry_delete'";

if (mysqli_query($dbcon,$sql_delete)){
	
	//echo "New Delete record successfully";
	echo "<script>window.open('http://localhost/theam2+admin/Admin/pages/forms.php','_self')</script>";
} else {
    echo "Error: " . $sql_delete . "<br>" .  mysqli_error($dbcon);
}






?>