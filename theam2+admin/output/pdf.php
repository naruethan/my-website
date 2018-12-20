<?php
ob_start();

require('fpdf181/fpdf.php');
define('FPDF_FONTPATH','C:/xampp/htdocs/theam2+admin/output/fpdf181/font');


 
if(isset($_POST["op1"]) == null){
	
	$_POST["op1"] = "space";
	
}
if(isset($_POST["op2"]) == null){
	
	$_POST["op2"] = "space";
	
}
if(isset($_POST["op3"]) == null){
	
	$_POST["op3"] = "space";
	
}
if(isset($_POST["op4"]) == null){
	
	$_POST["op4"] = "space";
	
}


$input1 = $_POST['input1']; 
$input2 = $_POST['input2'];   
$input3 = $_POST['input3'];   
$input4 = $_POST['input4'];   
$input5 = $_POST['input5'];   
$input6 = $_POST['input6'];   
$input7 = $_POST['input7'];   
$input8 = $_POST['input8'];   
$input9 = $_POST['input9'];   
$input10 = $_POST['input10'];
   
$input11 = $_POST['input11'];
$input12 = $_POST['input12'];   
$input13 = $_POST['input13'];   
$input14 = $_POST['input14'];   
$input15 = $_POST['input15'];   
$input16 = $_POST['input16'];   
$input17 = $_POST['input17'];   
$input18 = $_POST['input18'];   
$input19 = $_POST['input19'];   
$input20 = $_POST['input20']; 

$input21 = $_POST['input21'];
$input22 = $_POST['input22'];   
$input23 = $_POST['input23'];   
$input24 = $_POST['input24'];   
$input25 = $_POST['input25'];   
$input26 = $_POST['input26'];   
$input27 = $_POST['input27'];   
$input28 = $_POST['input28'];   
$input29 = $_POST['input29'];   
$input30 = $_POST['input30'];

$input31 = $_POST['input31'];
$input32 = $_POST['input32'];   
$input33 = $_POST['input33'];   
$input34 = $_POST['input34'];   
$input35 = $_POST['input35'];   
$input36 = $_POST['input36'];   
$input37 = $_POST['input37'];   
  
$input41 = $_POST['input41']; 


/******************pdf-section ***************************************/
$pdf=new FPDF( 'P' , 'cm' , 'A4' );
 
//****Add Fornt**////
$pdf->AddFont('THSarabun','','THSarabun.php');
$pdf->AddFont('THSarabun','B','THSarabun Bold.php');
$pdf->AddFont('THSarabun','I','THSarabun Italic.php');
$pdf->AddFont('THSarabun','BI','THSarabun Bold Italic.php');
/*--------------------------------------------------------------------*/
$pdf->AddFont('angsana','','angsa.php');
$pdf->AddFont('angsana','B','angsab.php');
$pdf->AddFont('angsana','I','angsai.php');
$pdf->AddFont('angsana','BI','angsaz.php');
//****Add Fornt**////

/*--------------------------set page------------------------------------------*/
$pdf->SetLeftMargin(3.50); 
$pdf->SetRightMargin(0.50);
$pdf->SetTopMargin(2.54);
$pdf->SetAutoPageBreak(TRUE, 0);
$pdf->AddPage();
 
// กำหนดฟอนต์ที่จะใช้  อังสนา ตัวธรรมดา ขนาด 12
/*--------------------------header--page-1----------------------------------------*/

$pdf->Image('rmutl-logo.png',3.50,2.54,2.10);

$pdf->setXY( 5.50,2.54 );
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , 'ศูนย์พัฒนาทักษะวิชาชีพนักศึกษา' ) );
$pdf->setXY( 16.80,2.54 );
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , 'เอกสารหมายเลข 1' ) );



$pdf->Ln(0.7);
$pdf->setX(5.50 );
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , 'มหาวิทยาลัยเทคโนโลยีราชมงคลล้านนา ตาก' ) );
$pdf->setX(17.50 );
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , 'หน้าที่ 1/2' ) );

 
$pdf->Ln(0.7);
$pdf->setX(5.50 );
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , 'เลขที่ 41/1 หมู่ 7 ถ.พหลโยธิน ต.ไม้งาน อ.เมือง จ.ตาก 63000' ) );

$pdf->Ln(0.7);
$pdf->setX(5.50 );
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , 'โทรศัพท์ 0-5551-1848/0-5551-5900 ต่อ 322 โทรสาร 0-5551-1848' ) );
/*--------------------------header-end------------------------------------------*/
$pdf->Ln(1);
$pdf->setX(7.50 );
$pdf->SetFont('THSarabun','B',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , 'แบบแจ้งรายละเอียดการเข้าร่วมโครงการสหกิจศึกษา' ) );

$pdf->Ln(0.7);
$pdf->setX(5.50 );
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , 'นักศึกษาจะต้องแนบแผนการเรียนมาตรฐานของสาขาวิชาที่ระบุระดับคะแนนตัวอักษรด้วย' ) );

$pdf->Line(5.6,6.55,18.7,6.55);


$pdf->Ln(0.7);
$pdf->setX(4.50 );
$pdf->SetFont('THSarabun','B',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , 'ส่วนที่ 1 ข้อมูลนักศึกษา' ) );

$pdf->Line(4.60,7.25,8.30,7.25);
/*---------------------------Number*1------------------------------------------*/
$pdf->Ln(0.7);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , '1. ชื่อ-นามสกุล ' ) );
$pdf->setX(5.90 );
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' ,$input1) );

$pdf->setX(12.50 );
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , 'รหัสประจำตัวนักศิกษา' ) );
$pdf->setX(16.00 );
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' ,$input3) );


$pdf->Ln(0.7);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , 'ชื่อภาษาอังกฤษ ' ) );

$pdf->setX(6.00 );
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' ,$input2) );


$pdf->setX(13.70 );
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , 'ชั้นปีที่ ' ) );
$pdf->setX(14.90 );
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' ,$input4) );


$pdf->Ln(0.7);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , 'หลักสูตร' ) );

$chkword = $_POST["select_opt91"];
if ($chkword == "ปริญญาตรี"){
	$pdf->setX(4.90 );
	$pdf->SetFont('THSarabun','',16);
	$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' ,'ปริญญาตรี') );
}else if ($chkword == "เทียบโอน"){
	$pdf->setX(4.90 );
	$pdf->SetFont('THSarabun','',16);
	$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' ,'ปริญญาตรี เทียบโอน') );
}else if($chkword == "ป.ว.ส."){
	$pdf->setX(4.90 );
	$pdf->SetFont('THSarabun','',16);
	$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' ,'ป.ว.ส.') );
	
}else{
    $pdf->setX(4.90 );
	$pdf->SetFont('THSarabun','B',16);
	$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' ,'โปรดเลือก') );	
	
}
			                       

$pdf->setX(8.05);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , 'สาขาวิชา' ) );
$pdf->setX(9.55 );
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' ,$input5) );
$pdf->setX(12.90);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , 'สาขา' ) );
$pdf->setX(13.75 );
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' ,$input6) );
$pdf->setX(16.10);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , 'คณะ' ) );
$pdf->setX(16.90);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' ,$input7) );

 
 
$pdf->Ln(0.7);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , 'จำนวนหน่วยกิตที่สอบได้ปัจจุบัน' ) );
$pdf->setX(8.50);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' ,$input8) );
$pdf->setX(10.00 );
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , 'หน่วยกิต ' ) );
$pdf->setX(12.00 );
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , 'ระดับคะแนนเฉลี่ยสะสม ' ) );
$pdf->setX(15.90);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' ,$input9) );

$pdf->Ln(0.7);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , 'ภาคการศึกษาที่คาดว่าจะไปปฏิบัติงานสหกิจศึกษา ภาคการศึกษาที่' ) );
$pdf->setX(13.90);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' ,$input10) );
$pdf->setX(15.50 );
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , 'ปีการศึกษา' ) );
$pdf->setX(17.50);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' ,$input11) );
/*---------------------------Number*2------------------------------------------*/
$pdf->Ln(0.7);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , '2. ที่อยู่ เลขที่' ) );
$pdf->setX(5.80);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' ,$input12) );
$pdf->setX(7.50 );
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , 'ถนน' ) );
$pdf->setX(8.40);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' ,$input13) );
$pdf->setX(11.50 );
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , 'ตำบล' ) );
$pdf->setX(12.50);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' ,$input14) );
$pdf->setX(15.50 );
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , 'อำเภอ' ) );
$pdf->setX(16.60);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' ,$input15) );

$pdf->Ln(0.7);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , 'จังหวัด' ) );
$pdf->setX(4.55 );
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , $input16 ) );
$pdf->setX(7.35 );
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , 'รหัสไปรษณีย์' ) );
$pdf->setX(9.35 );
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , $input17 ) );
$pdf->setX(10.50 );
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , 'โทรศัพท์' ) );
$pdf->setX(11.90 );
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , $input18) );
$pdf->setX(14.25 );
$pdf->SetFont('THSarabun','',14);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , 'E-mail' ) );
$pdf->setX(15.25 );
$pdf->SetFont('THSarabun','',14);// 17 หลัก
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , $input19 ) );

/*---------------------------Number*3------------------------------------------*/
$pdf->Ln(0.7);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , '3. ที่พักในภาคการศึกษานี้ (สำหรับกรณีเร่งด่วน)' ) );

$pdf->Ln(0.7);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , 'ที่อยู่ เลขที่' ) );
$pdf->setX(5.40);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' ,$input20) );
$pdf->setX(7.50 );
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , 'ถนน' ) );
$pdf->setX(8.40);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' ,$input21) );
$pdf->setX(11.50 );
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , 'ตำบล' ) );
$pdf->setX(12.50);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' ,$input22) );
$pdf->setX(15.50 );
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , 'อำเภอ' ) );
$pdf->setX(16.60);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' ,$input23) );

$pdf->Ln(0.7);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , 'จังหวัด' ) );
$pdf->setX(4.55 );
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , $input24 ) );
$pdf->setX(7.35 );
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , 'รหัสไปรษณีย์' ) );
$pdf->setX(9.35 );
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , $input25 ) );
$pdf->setX(10.50 );
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , 'โทรศัพท์' ) );
$pdf->setX(11.90 );
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , $input26) );
$pdf->setX(14.25 );
$pdf->SetFont('THSarabun','',14);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , 'E-mail' ) );
$pdf->setX(15.25 );
$pdf->SetFont('THSarabun','',14);// 17 หลัก
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , $input27) );

/*---------------------------Number*4------------------------------------------*/
$pdf->Ln(0.7);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , '4. ผู้ปกครองนักศึกษาหรือผู้ที่สามารถติดต่อได้ (กรณีที่ปิดภาคการศึกษา)' ) );

$pdf->Ln(0.7);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , 'ชื่อ-นามสกุล ' ) );
$pdf->setX(5.50 );
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' ,$input28) );


$pdf->Ln(0.7);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , 'ที่อยู่ เลขที่' ) );
$pdf->setX(5.40);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' ,$input29) );
$pdf->setX(7.50 );
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , 'ถนน' ) );
$pdf->setX(8.40);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' ,$input30) );
$pdf->setX(11.50 );
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , 'ตำบล' ) );
$pdf->setX(12.50);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' ,$input31) );
$pdf->setX(15.50 );
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , 'อำเภอ' ) );
$pdf->setX(16.60);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' ,$input32) );

$pdf->Ln(0.7);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , 'จังหวัด' ) );
$pdf->setX(4.55 );
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , $input33 ) );
$pdf->setX(7.35 );
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , 'รหัสไปรษณีย์' ) );
$pdf->setX(9.35 );
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , $input34 ) );
$pdf->setX(10.50 );
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , 'โทรศัพท์' ) );
$pdf->setX(11.90 );
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , $input35 ) );
$pdf->setX(14.25 );
$pdf->SetFont('THSarabun','',14);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , 'E-mail' ) );
$pdf->setX(15.25 );
$pdf->SetFont('THSarabun','',14);// 17 หลัก
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , $input36 ) );

/*---------------------------Number*5------------------------------------------*/
$pdf->Ln(0.7);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , '5. ความสามารถพิเศษหรือกิจกรรมที่นักศึกษาถนัด' ) );

$pdf->Ln(0.7);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , $input37) );
/*---------------------------Number*6------------------------------------------*/
$pdf->Ln(0.7);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , '6. ความสามารถทางด้านคอมพิวเตอร์ (โปรดระบุ ดีมาก/ดี/ปานกลาง/พอใช้/หรือ ได้เล็กน้อย)' ) );



$pdf->Ln(0.7);
for($i=0;$i<count($_POST["op1"]);$i++)
{
	if(trim($_POST["op1"][$i]) != "")
	{
        $chk[$i] = $_POST["op1"][$i];	
		$chk1 = $_POST["select_opt61"];
		$chk2 = $_POST["select_opt62"];
		//echo $chk[$i];
        switch ($chk[$i]) {
			case "Excel":
                $show = 1;
				$show_2=0;
				$pdf->Image('check-mark.jpg',4.1,19.4,0.4);
				switch ($chk1) {
					case "ดีมาก":
						$pdf->setX(9.3);
						$pdf->SetFont('THSarabun','',16);
						$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' ,'ดีมาก') );
						break;
	
					case "ดี":
						$pdf->setX(9.3);
						$pdf->SetFont('THSarabun','',16);
						$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' ,'ดี') );
						break;
					case "พอใช้":
						$pdf->setX(9.3);
						$pdf->SetFont('THSarabun','',16);
						$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' ,'พอใช้') );
						break;
					case "แย่":
						$pdf->setX(9.3);
						$pdf->SetFont('THSarabun','',16);
						$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' ,'แย่') );
					break;		
					default:
						$pdf->setX(9.3);
						$pdf->SetFont('THSarabun','B',16);
						$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' ,'โปรดระบุ') );
				}$textother = 1;
                break;
				case "word":
                $show = 2;
				$show_2=1;
				$pdf->Image('check-mark.jpg',12.7,19.4,0.4);
				switch ($chk2) {
					case "ดีมาก":
						$pdf->setX(17.8);
						$pdf->SetFont('THSarabun','',16);
						$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' ,'ดีมาก') );
						break;
	
					case "ดี":
						$pdf->setX(17.8);
						$pdf->SetFont('THSarabun','',16);
						$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' ,'ดี') );
						break;
					case "พอใช้":
						$pdf->setX(17.8);
						$pdf->SetFont('THSarabun','',16);
						$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' ,'พอใช้') );
						break;
					case "แย่":
						$pdf->setX(17.8);
						$pdf->SetFont('THSarabun','',16);
						$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' ,'แย่') );
					break;	
					default:
						$pdf->setX(17.8);
						$pdf->SetFont('THSarabun','B',16);
						$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' ,'โปรดระบุ') );
				}
				$textother = 1;
                break;            
				 
            default:
                $show = 5;
				$textother = 1;

		}
			
	
	}
			
}
$pdf->setX(4.0);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , '[  ] Microsoft office Excel ระดับ' ) );


$pdf->setX(12.5 );
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , '[  ] Microsoft office Word ระดับ' ) );

$pdf->Ln(0.7);
for($i=0;$i<count($_POST["op1"]);$i++)
{
	if(trim($_POST["op1"][$i]) != "")
	{
        $chk[$i] = $_POST["op1"][$i];	
		$chk3 = $_POST["select_opt63"];
		$chk4 = $_POST["select_opt64"];
		//echo $chk[$i];
        switch ($chk[$i]) {
			case "PPT":
                $show = 3;
				$pdf->Image('check-mark.jpg',4.1,20.1,0.4);
				 switch ($chk3) {
					case "ดีมาก":
						$pdf->setX(8.00);
						$pdf->SetFont('THSarabun','',16);
						$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' ,'ดีมาก') );
						break;
	
					case "ดี":
						$pdf->setX(8.00);
						$pdf->SetFont('THSarabun','',16);
						$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' ,'ดี') );
						break;
					case "พอใช้":
						$pdf->setX(8.00);
						$pdf->SetFont('THSarabun','',16);
						$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' ,'พอใช้') );
						break;
					case "แย่":
						$pdf->setX(8.00);
						$pdf->SetFont('THSarabun','',16);
						$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' ,'แย่') );
					break;	
					default:
						$pdf->setX(8.00);
						$pdf->SetFont('THSarabun','B',16);
						$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' ,'โปรดระบุ') );
				}
				$textother = 1;
                break;	
                case "other":
                $pdf->Image('check-mark.jpg',12.7,20.1,0.4);
			  if($_POST["input38"] != ''){
				  $pdf->setX(13.9 );
				  $pdf->SetFont('THSarabun','',16);
                  $pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' ,$_POST["input38"]) );
				  $show = 4;	
				  switch ($chk4) {
					case "ดีมาก":
						$pdf->setX(18.5 );
						$pdf->SetFont('THSarabun','',16);
						$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' ,'ดีมาก') );
						break;
	
					case "ดี":
						$pdf->setX(18.5 );
						$pdf->SetFont('THSarabun','',16);
						$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' ,'ดี') );
						break;
					case "พอใช้":
						$pdf->setX(18.5 );
						$pdf->SetFont('THSarabun','',16);
						$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' ,'พอใช้') );
						break;
					case "แย่":
						$pdf->setX(18.5 );
						$pdf->SetFont('THSarabun','',16);
						$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' ,'แย่') );
					break;	

					default:
						$pdf->setX(18.5 );
						$pdf->SetFont('THSarabun','B',16);
						$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' ,'โปรดระบุ') );
				}
                  $textother = 1;				  
				  
			  }else{
                  $show = 6;
				  $textother = 2;
				  
			  }
                break;				
				 
            default:
                $show = 5;
				$textother = 1;

		}
			
	
	}
			
}
$pdf->setX(4.0 );
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , '[  ] Microsoft PPT ระดับ' ) );
$pdf->setX(12.5 );
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , '[  ] อื่นๆ' ) );

if($textother == 2){
	
$pdf->setX(13.9 );
$pdf->SetFont('THSarabun','B',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' ,'โปรดระบุ') );
	
}else{
	$pdf->setX(13.9 );
	$pdf->SetFont('THSarabun','B',16);
	$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' ,'') );
	
}


$pdf->setX(17.5);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , 'ระดับ' ) );

/*---------------------------Number*7------------------------------------------*/
$pdf->Ln(0.7);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , '7. ความสามารถทางภาษา (โปรดระบุ ดีมาก/ดี/ปานกลาง/พอใช้/หรือ ได้เล็กน้อย)' ) );

$pdf->Ln(0.7);
for($i=0;$i<count($_POST["op2"]);$i++)
{
	if(trim($_POST["op2"][$i]) != "")
	{
        $chk[$i] = $_POST["op2"][$i];	
		$chk1 = $_POST["select_opt71"];
		$chk2 = $_POST["select_opt72"];
		//echo $chk[$i];
        switch ($chk[$i]) {
			case "Eng":
                $show = 1;
				$show_2=0;
				$pdf->Image('check-mark.jpg',4.1,21.5,0.4);
				switch ($chk1) {
					case "ดีมาก":
						$pdf->setX(7.3);
						$pdf->SetFont('THSarabun','',16);
						$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' ,'ดีมาก') );
						break;
	
					case "ดี":
						$pdf->setX(7.3);
						$pdf->SetFont('THSarabun','',16);
						$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' ,'ดี') );
						break;
					case "พอใช้":
						$pdf->setX(7.3);
						$pdf->SetFont('THSarabun','',16);
						$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' ,'พอใช้') );
						break;
					case "แย่":
						$pdf->setX(7.3);
						$pdf->SetFont('THSarabun','',16);
						$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' ,'แย่') );
					break;		
					default:
						$pdf->setX(7.3);
						$pdf->SetFont('THSarabun','B',16);
						$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' ,'โปรดระบุ') );
				}$textother = 1;
                break;
				case "Japan":
                $show = 2;
				$show_2=1;
				$pdf->Image('check-mark.jpg',12.7,21.5,0.4);
				switch ($chk2) {
					case "ดีมาก":
						$pdf->setX(15.3);
						$pdf->SetFont('THSarabun','',16);
						$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' ,'ดีมาก') );
						break;
	
					case "ดี":
						$pdf->setX(15.3);
						$pdf->SetFont('THSarabun','',16);
						$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' ,'ดี') );
						break;
					case "พอใช้":
						$pdf->setX(15.3);
						$pdf->SetFont('THSarabun','',16);
						$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' ,'พอใช้') );
						break;
					case "แย่":
						$pdf->setX(15.3);
						$pdf->SetFont('THSarabun','',16);
						$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' ,'แย่') );
					break;	
					default:
						$pdf->setX(15.3);
						$pdf->SetFont('THSarabun','B',16);
						$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' ,'โปรดระบุ') );
				}
				$textother = 1;
                break;            
				 
            default:
                $show = 5;
				$textother = 1;

		}
			
	
	}
			
}
$pdf->setX(4.0 );
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , '[  ] อังกฤษ   ระดับ' ) );
$pdf->setX(12.5 );
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , '[  ] ญี่ปุ่น   ระดับ' ) );

$pdf->Ln(0.7);
for($i=0;$i<count($_POST["op2"]);$i++)
{
	if(trim($_POST["op2"][$i]) != "")
	{
        $chk[$i] = $_POST["op2"][$i];	
		$chk3 = $_POST["select_opt73"];
		$chk4 = $_POST["select_opt74"];
		//echo $chk[$i];
        switch ($chk[$i]) {
			case "china":
                $show = 3;
				$pdf->Image('check-mark.jpg',4.1,22.2,0.4);
				 switch ($chk3) {
					case "ดีมาก":
						$pdf->setX(7.3);
						$pdf->SetFont('THSarabun','',16);
						$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' ,'ดีมาก') );
						break;
	
					case "ดี":
						$pdf->setX(7.3);
						$pdf->SetFont('THSarabun','',16);
						$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' ,'ดี') );
						break;
					case "พอใช้":
						$pdf->setX(7.3);
						$pdf->SetFont('THSarabun','',16);
						$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' ,'พอใช้') );
						break;
					case "แย่":
						$pdf->setX(7.3);
						$pdf->SetFont('THSarabun','',16);
						$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' ,'แย่') );
					break;	
					default:
						$pdf->setX(7.3);
						$pdf->SetFont('THSarabun','B',16);
						$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' ,'โปรดระบุ') );
				}
				$textother = 1;
                break;	
                case "other7":
                $pdf->Image('check-mark.jpg',12.7,22.2,0.4);
			  if($_POST["input39"] != ''){
				  $pdf->setX(13.9  );
				  $pdf->SetFont('THSarabun','',16);
                  $pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' ,$_POST["input39"]) );
				  $show = 4;	
				  switch ($chk4) {
					case "ดีมาก":
						$pdf->setX(18.4);
						$pdf->SetFont('THSarabun','',16);
						$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' ,'ดีมาก') );
						break;
	
					case "ดี":
						$pdf->setX(18.4);
						$pdf->SetFont('THSarabun','',16);
						$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' ,'ดี') );
						break;
					case "พอใช้":
						$pdf->setX(18.4);
						$pdf->SetFont('THSarabun','',16);
						$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' ,'พอใช้') );
						break;
					case "แย่":
						$pdf->setX(18.4);
						$pdf->SetFont('THSarabun','',16);
						$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' ,'แย่') );
					break;	

					default:
						$pdf->setX(18.4);
						$pdf->SetFont('THSarabun','B',16);
						$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' ,'โปรดระบุ') );
				}
                  $textother = 1;				  
				  
			  }else{
                  $show = 6;
				  $textother = 2;
				  
			  }
                break;				
				 
            default:
                $show = 5;
				$textother = 1;

		}
			
	
	}
			
}

$pdf->setX(4.0 );
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , '[  ] จีน        ระดับ' ) );
$pdf->setX(12.5 );
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , '[  ] อื่นๆ' ) );

if($textother == 2){
	
$pdf->setX(13.9);
$pdf->SetFont('THSarabun','B',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' ,'โปรดระบุ') );
	
}else{
	$pdf->setX(18.5 );
	$pdf->SetFont('THSarabun','B',16);
	$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' ,'') );
	
}

$pdf->setX(17.5 );
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , 'ระดับ' ) );

/*---------------------------Number*8------------------------------------------*/
$pdf->Ln(0.7);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , '8. ภูมิภาคที่นักศึกษาสนใจไปปฏิบัตงาน (เลือกเพียง 1 หัวข้อเพื่อประกอบการเลือกสถานประกอบการ)' ) );

$pdf->Ln(0.7);
for($i=0;$i<count($_POST["op3"]);$i++)
{
	if(trim($_POST["op3"][$i]) != "")
	{
        $chk[$i] = $_POST["op3"][$i];	

		//echo $chk[$i];
        switch ($chk[$i]) {
			case "bangkok":
                $show = 1;
				$show_2=0;
				$pdf->Image('check-mark.jpg',4.1,23.6,0.4);		
				$textother = 1;
                break;
			case "north":
                $show = 1;
				$show_2=0;
				$pdf->Image('check-mark.jpg',10.1,23.6,0.4);		
				$textother = 1;
                break;
			case "eastnorth":
                $show = 1;
				$show_2=0;
				$pdf->Image('check-mark.jpg',13.7,23.6,0.4);		
				$textother = 1;
                break;				
				
				 
            default:
                $show = 5;
				$textother = 1;

		}
			
	
	}
			
}
$pdf->setX(4.0 );
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , '[  ] กทม.และปริมลฑล' ) );
$pdf->setX(10.0);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , '[  ] ภาคเหนือ   ' ) );
$pdf->setX(13.5);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , '[  ] ภาคตะวันออกเฉียงเหนือ' ) );

$pdf->Ln(0.7);
for($i=0;$i<count($_POST["op3"]);$i++)
{
	if(trim($_POST["op3"][$i]) != "")
	{
        $chk[$i] = $_POST["op3"][$i];	

		//echo $chk[$i];
        switch ($chk[$i]) {
			case "mid":
                $show = 1;
				$show_2=0;
				$pdf->Image('check-mark.jpg',4.1,24.3,0.4);		
				$textother = 1;
                break;
			case "south":
                $show = 1;
				$show_2=0;
				$pdf->Image('check-mark.jpg',10.1,24.3,0.4);		
				$textother = 1;
                break;
			case "east":
                $show = 1;
				$show_2=0;
				$pdf->Image('check-mark.jpg',13.7,24.3,0.4);		
				$textother = 1;
                break;				
				
				 
            default:
                $show = 5;
				$textother = 1;

		}
			
	
	}
			
}
$pdf->setX(4.0 );
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , '[  ] ภาคกลาง' ) );
$pdf->setX(10.0);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , '[  ] ภาคใต้' ) );
$pdf->setX(13.5);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , '[  ] ภาคตะวันออก' ) );
/*---------------------------Number*9------------------------------------------*/
$pdf->Ln(0.7);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , '9. ลักษณะงานที่สนใจและต้องการไปปฏิบัติงานสหกิจศึกษา' ) );

$pdf->Ln(0.7);
for($i=0;$i<count($_POST["op4"]);$i++)
{
	if(trim($_POST["op4"][$i]) != "")
	{
        $chk[$i] = $_POST["op4"][$i];	

		//echo $chk[$i];
        switch ($chk[$i]) {
			case "workout":
                $show = 1;
				$show_2=0;
				$pdf->Image('check-mark.jpg',4.1,25.7,0.4);		
				$textother = 1;
                break;
			case "pro":
                $show = 1;
				$show_2=0;
				$pdf->Image('check-mark.jpg',10.2,25.7,0.4);		
				$textother = 1;
                break;
			case "room":
                $show = 1;
				$show_2=0;
				$pdf->Image('check-mark.jpg',13.7,25.7,0.4);		
				$textother = 1;
                break;				
				
				 
            default:
                $show = 5;
				$textother = 1;

		}
			
	
	}
			
}
$pdf->setX(4.0 );
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , '[  ] งานภาคสนาม' ) );
$pdf->setX(10.0);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , '[  ] งานวิจัย  ' ) );
$pdf->setX(13.5);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , '[  ] งานห้องปฏิยัติการ' ) );

$pdf->Ln(0.7);
for($i=0;$i<count($_POST["op4"]);$i++)
{
	if(trim($_POST["op4"][$i]) != "")
	{
        $chk[$i] = $_POST["op4"][$i];	

		//echo $chk[$i];
        switch ($chk[$i]) {
			case "marketting":
                $show = 1;
				$show_2=0;
				$pdf->Image('check-mark.jpg',4.1,26.4,0.4);		
				$textother = 1;
                break;
			case "produce":
                $show = 1;
				$show_2=0;
				$pdf->Image('check-mark.jpg',10.2,26.4,0.4);		
				$textother = 1;
                break;
			case "other9":
                $show = 1;
				$show_2=0;
				$pdf->Image('check-mark.jpg',13.7,26.4,0.4);		
				$textother = 1;
                				
			  if($_POST["input40"] != ''){
				  $pdf->setX(14.9 );
				  $pdf->SetFont('THSarabun','',16);
                  $pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' ,$_POST["input40"]) );
				  $show = 4;				  
				  $textother = 1;				  
				  
			  }else{
                  $show = 6;
				  $textother = 2;
				  
			  }
            break;					
				 
            default:
                $show = 5;
				$textother = 1;

		}
			
	
	}
			
}
$pdf->setX(4.0 );
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , '[  ] งานการตลาด' ) );
$pdf->setX(10.0);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , '[  ] งานสายการผลิต  ' ) );
$pdf->setX(13.5);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , '[  ] อื่นๆ ' ) );
if($textother == 2){
	
$pdf->setX(14.9);
$pdf->SetFont('THSarabun','B',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' ,'โปรดระบุ') );
	
}else{
	$pdf->setX(14.9 );
	$pdf->SetFont('THSarabun','B',16);
	$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' ,'') );
	
}
/*---------------------------Number*10------------------------------------------*/
$pdf->Ln(0.7);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , '10. ความสนใจทางด้านวิชาการเฉพาะ' ) );
//ข้อที่ 10 / ตอบ
$pdf->Ln(0.5);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , $input41 ) );

/*---------------------------License------------------------------------------*/
$pdf->Ln(0.6);
$pdf->setX(12.00 );
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , '(ลงชื่อ).....................................................ผู้สมัคร' ) );

$pdf->Ln(0.6);
$pdf->setX(12.90);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , '(.....................................................)' ) );
/*--------**************************End-Page 1**************************------------------------------------------*/

/*--------////////////////////////---Page 2----//////////////////////////------------------------------------------*/
$pdf->SetLeftMargin(3.50); 
$pdf->SetTopMargin(1.54);
$pdf->SetAutoPageBreak(TRUE, 0);
$pdf->AddPage();
/*****----------------header-page2------------------*******/////
$pdf->Ln(0.7);
$pdf->setX(16.80);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , 'เอกสารหมายเลข 1' ) );
$pdf->Ln(0.7);
$pdf->setX(17.50 );
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , 'หน้าที่ 2/2' ) );
$pdf->Ln(0.7);
$pdf->setX(4.50 );
$pdf->SetFont('THSarabun','B',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , 'ส่วนที่ 2 ผลการพิจารณา ' ) );
$pdf->Line(4.6,3.85,8.4,3.85);
$pdf->setX(8.5);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , '(สำหรับอาจารย์ที่ปรึกษาพิจารณา)' ) );
/*****----------------end-header-page2------------------*******/////
/*****-----------------page2--here----------------------*******/////
$pdf->Ln(0.7);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , '(โปรดทำเครื่องหมาย / ลงใน [ ] หน้าข้อความที่ตรงกับความประสงค์ของท่าน)' ) );

$pdf->Ln(0.7);
$pdf->setX(8.50 );
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , 'เหมาะสม                  ไม่เหมาะสม         หมายเหตุ' ) );

$pdf->Ln(0.7);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , '1. ความพร้อมทางวิชาการ' ) );
$pdf->setX(9);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , '[ ]' ) );
$pdf->setX(12.80);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , '[ ]' ) );
$pdf->setX(15.10);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , '…………………………….......' ) );

$pdf->Ln(0.7);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , '2. ความประพฤติ' ) );
$pdf->setX(9);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , '[ ]' ) );
$pdf->setX(12.80);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , '[ ]' ) );
$pdf->setX(15.10);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , '…………………………….......' ) );

$pdf->Ln(0.7);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , '3. ความรับผิดชอบ วุฒิภาวะ ' ) );
$pdf->setX(9);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , '[ ]' ) );
$pdf->setX(12.80);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , '[ ]' ) );
$pdf->setX(15.10);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , '…………………………….......' ) );


$pdf->Ln(1.7);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , 'สาขาวิชาได้พิจารณาความเหมาะสมของนักศึกษารายนี้แล้ว ขอแจ้งผลการพิจารณาดังนี้' ) );

$pdf->Ln(0.7);
$pdf->setX(5.40 );
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , '[ ]   ให้ไปปฏิบัติงานสหกิจศึกษาตามระยะเวลาที่กำหนดได้' ) );

$pdf->Ln(0.7);
$pdf->setX(5.40 );
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , '[ ]   รอพิจารณาในโอกาสต่อไป' ) );

$pdf->Ln(0.7);
$pdf->setX(5.40 );
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , '[ ]   อื่นๆ โปรดระบุ' ) );
$pdf->Ln(0.7);
$pdf->setX(5.40 );
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , '................................................................................................................................' ) );
$pdf->Ln(0.7);
$pdf->setX(5.40 );
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , '................................................................................................................................' ) );


$pdf->Ln(2.1);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , '(ลงชื่อ)..................................................' ) );
$pdf->setX(12.80 );
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , '(ลงชื่อ)..................................................' ) );

$pdf->Ln(0.7);
$pdf->setX(4.50 );
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , '(.................................................)' ) );
$pdf->setX(13.80 );
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , '(.................................................)' ) );

$pdf->Ln(0.7);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , 'อาจารย์ที่ปรึกษาสหกิจศึกษา/ผู้ประสานงานสหกิจศึกษา' ) );
$pdf->setX(14.80 );
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , 'อาจารย์ที่ปรึกษา' ) );

$pdf->Ln(0.7);
$pdf->setX(4.60 );
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , '........../................/.............' ) );
$pdf->setX(13.90 );
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , '........../................/.............' ) );


$pdf->Ln(2.8);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , '(ลงชื่อ)..................................................' ) );
$pdf->setX(12.80 );
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , '(ลงชื่อ)..................................................' ) );

$pdf->Ln(0.7);
$pdf->setX(4.50 );
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , '(.................................................)' ) );
$pdf->setX(13.80 );
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , '(.................................................)' ) );

$pdf->Ln(0.7);
$pdf->setX(4.80 );
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , 'หัวหน้าสาขาวิชา/หลักสูตร' ) );
$pdf->setX(12.80 );
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , 'หัวหน้าศูนย์พัฒนาทักษะวิชาชีพนักศึกษา' ) );

$pdf->Ln(0.7);
$pdf->setX(4.60 );
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , '........../................/.............' ) );
$pdf->setX(13.90 );
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , '........../................/.............' ) );


$pdf->Output();
?>

