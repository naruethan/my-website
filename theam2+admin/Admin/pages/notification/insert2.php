<?php
//insert.php
require('/conn.php');
$select_opt = $_POST["select_opt"];

//echo $select_opt;
switch ($select_opt) {
	case "รอตรวจสอบเอกสาร" : echo "1";
		break;
	case "ยืนยันเอกสาร/รอแบบตอบรับ" : echo "2";
		break;
	case "แบบตอบรับส่งมาแล้ว" : echo "<script>window.history.back();</script>";
	
		break;
	default: $Text = $_POST["subject"]; echo "$Text"; echo "4";
		break;
	
	
	
}


?>