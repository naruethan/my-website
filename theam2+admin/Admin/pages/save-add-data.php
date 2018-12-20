<?php

error_reporting(-1);
require('/connect/conn.php');


$data_TitleCompany_add = $_POST["TitleCompany"];
$data_TitleGroupCompany_add  = $_POST["TitleGroupCompany"];
$data_AddressCompany_add  = $_POST["AddressCompany"];
$data_TelCompany_add  = $_POST["TelCompany"];
$data_FaxCompany_add  = $_POST["FaxCompany"];
$data_Term_add  = $_POST["Term"];
$data_Years_add  = $_POST["Years"];
$data_nameMapGG_add  = $_POST["nameMapGG"];

$data_NameStudent1_add  = $_POST["NameStudent1"];
$data_NameStudent2_add  = $_POST["NameStudent2"];
$data_NameStudent3_add  = $_POST["NameStudent3"];
$data_NameStudent4_add  = $_POST["NameStudent4"];
$data_NameTel1_add  = $_POST["NameTel1"];
$data_NameTel2_add  = $_POST["NameTel2"];
$data_NameTel3_add  = $_POST["NameTel3"];
$data_NameTel4_add  = $_POST["NameTel4"];

//echo $data_TitleCompany_add; 
//echo $data_TitleGroupCompany_add;  
//echo $data_AddressCompany_add;  
//echo $data_TelCompany_add; 
//echo $data_FaxCompany_add;
//echo $data_Term_add;
//echo $data_Years_add;

$sql_add = "INSERT INTO data_db(title, Address, tel, GroupComp, Years, Term, fax, 
								Stuname1,Stuname2, Stuname3, Stuname4, StuTel1, StuTel2, StuTel3, StuTel4,MapName) 
			VALUES ('$data_TitleCompany_add',
					'$data_AddressCompany_add',		
					'$data_TelCompany_add',
					'$data_TitleGroupCompany_add', 
					'$data_Years_add',
					'$data_Term_add',
					'$data_FaxCompany_add',										
					'$data_NameStudent1_add',
					'$data_NameStudent2_add',
					'$data_NameStudent3_add',
					'$data_NameStudent4_add',
					'$data_NameTel1_add',
					'$data_NameTel2_add',
					'$data_NameTel3_add',	
					'$data_NameTel4_add',					
					'$data_nameMapGG_add')";

if (mysqli_query($dbcon,$sql_add)){
	
	//echo "New record created successfully";
		echo "<script>window.open('http://localhost/theam2+admin/Admin/pages/forms.php','_self')</script>";
} else {
    echo "Error: " . $sql_add . "<br>" .  mysqli_error($dbcon);
}


?>