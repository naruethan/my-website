<?php

error_reporting(-1);
require('/connect/conn.php');

$data_id_update = $_POST["id"];
$data_TitleCompany_update = $_POST["TitleCompany"];
$data_TitleGroupCompany_update  = $_POST["TitleGroupCompany"];
$data_AddressCompany_update  = $_POST["AddressCompany"];
$data_TelCompany_update  = $_POST["TelCompany"];
$data_FaxCompany_update = $_POST["FaxCompany"];
$data_Term_update  = $_POST["Term"];
$data_Years_update  = $_POST["Years"];
$data_nameMapGG_update  = $_POST["nameMapGG"];

$data_NameStudent1_update  = $_POST["NameStudent1"];
$data_NameStudent2_update  = $_POST["NameStudent2"];
$data_NameStudent3_update  = $_POST["NameStudent3"];
$data_NameStudent4_update  = $_POST["NameStudent4"];
$data_NameTel1_update  = $_POST["NameTel1"];
$data_NameTel2_update  = $_POST["NameTel2"];
$data_NameTel3_update = $_POST["NameTel3"];
$data_NameTel4_update  = $_POST["NameTel4"];


$check_user = "UPDATE data_db SET 
				title='$data_TitleCompany_update', 
				Address='$data_AddressCompany_update',
				tel='$data_TelCompany_update',
				GroupComp='$data_TitleGroupCompany_update',
				Years='$data_Years_update ',
				Term='$data_Term_update',
				fax='$data_FaxCompany_update',
				Stuname1='$data_NameStudent1_update',
				Stuname2='$data_NameStudent2_update',
				Stuname3='$data_NameStudent3_update',
				Stuname4='$data_NameStudent4_update',
				StuTel1='$data_NameTel1_update',
				StuTel2='$data_NameTel2_update',
				StuTel3='$data_NameTel3_update',
				StuTel4='$data_NameTel4_update',
				MapName='$data_nameMapGG_update'
			   WHERE ID='$data_id_update'";




if (mysqli_query($dbcon,$check_user)){
	echo "<script>window.open('http://localhost/theam2+admin/Admin/pages/forms.php','_self')</script>";
} else {
    echo "Error updating record: " . mysqli_error($dbcon);
}









?>