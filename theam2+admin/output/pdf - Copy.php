<?php
ob_start();

require('fpdf181/fpdf.php');
define('FPDF_FONTPATH','C:/xampp/htdocs/theam2+admin/output/fpdf181/font');


$input1 = $_POST['input1'];   
 
if(isset($_POST["op1"]) == null){
	
	$_POST["op1"] = "space";
	
}



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
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' ,'$input13') );


$pdf->Ln(0.7);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , 'ชื่อภาษาอังกฤษ ' ) );

$pdf->setX(6.00 );
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' ,'$input34') );


$pdf->setX(13.70 );
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , 'ชั้นปีที่ ' ) );
$pdf->setX(14.90 );
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' ,'4') );


$pdf->Ln(0.7);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , 'หลักสูตร' ) );
$pdf->setX(4.90 );
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' ,'input15') );

$pdf->setX(8.05);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , 'สาขาวิชา' ) );
$pdf->setX(9.55 );
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' ,'input16') );
$pdf->setX(12.90);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , 'สาขา' ) );
$pdf->setX(13.75 );
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' ,'input11') );
$pdf->setX(16.10);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , 'คณะ' ) );
$pdf->setX(16.90);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' ,'input15') );

 
 
$pdf->Ln(0.7);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , 'จำนวนหน่วยกิตที่สอบได้ปัจจุบัน' ) );
$pdf->setX(8.50);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' ,'0123') );
$pdf->setX(10.00 );
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , 'หน่วยกิต ' ) );
$pdf->setX(12.00 );
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , 'ระดับคะแนนเฉลี่ยสะสม ' ) );
$pdf->setX(15.90);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' ,'0123') );

$pdf->Ln(0.7);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , 'ภาคการศึกษาที่คาดว่าจะไปปฏิบัติงานสหกิจศึกษา ภาคการศึกษาที่' ) );
$pdf->setX(13.90);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' ,'012') );
$pdf->setX(15.50 );
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , 'ปีการศึกษา' ) );
$pdf->setX(17.50);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' ,'0123') );
/*---------------------------Number*2------------------------------------------*/
$pdf->Ln(0.7);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , '2. ที่อยู่ เลขที่' ) );
$pdf->setX(5.80);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' ,'7') );
$pdf->setX(7.50 );
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , 'ถนน' ) );
$pdf->setX(8.40);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' ,'input15') );
$pdf->setX(11.50 );
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , 'ตำบล' ) );
$pdf->setX(12.50);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' ,'input14') );
$pdf->setX(15.50 );
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , 'อำเภอ' ) );
$pdf->setX(16.60);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' ,'input18') );

$pdf->Ln(0.7);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , 'จังหวัด' ) );
$pdf->setX(4.55 );
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , 'input14' ) );
$pdf->setX(7.35 );
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , 'รหัสไปรษณีย์' ) );
$pdf->setX(9.35 );
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , '63120' ) );
$pdf->setX(10.50 );
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , 'โทรศัพท์' ) );
$pdf->setX(11.90 );
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , 'input12' ) );
$pdf->setX(14.25 );
$pdf->SetFont('THSarabun','',14);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , 'E-mail' ) );
$pdf->setX(15.25 );
$pdf->SetFont('THSarabun','',14);// 17 หลัก
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , 'input28' ) );

/*---------------------------Number*3------------------------------------------*/
$pdf->Ln(0.7);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , '3. ที่พักในภาคการศึกษานี้ (สำหรับกรณีเร่งด่วน)' ) );

$pdf->Ln(0.7);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , 'ที่อยู่ เลขที่' ) );
$pdf->setX(5.40);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' ,'7') );
$pdf->setX(7.50 );
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , 'ถนน' ) );
$pdf->setX(8.40);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' ,'input15') );
$pdf->setX(11.50 );
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , 'ตำบล' ) );
$pdf->setX(12.50);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' ,'input14') );
$pdf->setX(15.50 );
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , 'อำเภอ' ) );
$pdf->setX(16.60);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' ,'input18') );

$pdf->Ln(0.7);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , 'จังหวัด' ) );
$pdf->setX(4.55 );
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , 'input14' ) );
$pdf->setX(7.35 );
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , 'รหัสไปรษณีย์' ) );
$pdf->setX(9.35 );
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , '63120' ) );
$pdf->setX(10.50 );
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , 'โทรศัพท์' ) );
$pdf->setX(11.90 );
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , 'input12' ) );
$pdf->setX(14.25 );
$pdf->SetFont('THSarabun','',14);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , 'E-mail' ) );
$pdf->setX(15.25 );
$pdf->SetFont('THSarabun','',14);// 17 หลัก
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , 'input28' ) );

/*---------------------------Number*4------------------------------------------*/
$pdf->Ln(0.7);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , '4. ผู้ปกครองนักศึกษาหรือผู้ที่สามารถติดต่อได้ (กรณีที่ปิดภาคการศึกษา)' ) );

$pdf->Ln(0.7);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , 'ชื่อ-นามสกุล ' ) );
$pdf->setX(5.50 );
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' ,'$input55') );


$pdf->Ln(0.7);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , 'ที่อยู่ เลขที่' ) );
$pdf->setX(5.40);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' ,'7') );
$pdf->setX(7.50 );
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , 'ถนน' ) );
$pdf->setX(8.40);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' ,'input15') );
$pdf->setX(11.50 );
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , 'ตำบล' ) );
$pdf->setX(12.50);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' ,'input14') );
$pdf->setX(15.50 );
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , 'อำเภอ' ) );
$pdf->setX(16.60);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' ,'input18') );

$pdf->Ln(0.7);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , 'จังหวัด' ) );
$pdf->setX(4.55 );
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , 'input14' ) );
$pdf->setX(7.35 );
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , 'รหัสไปรษณีย์' ) );
$pdf->setX(9.35 );
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , '63120' ) );
$pdf->setX(10.50 );
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , 'โทรศัพท์' ) );
$pdf->setX(11.90 );
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , 'input12' ) );
$pdf->setX(14.25 );
$pdf->SetFont('THSarabun','',14);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , 'E-mail' ) );
$pdf->setX(15.25 );
$pdf->SetFont('THSarabun','',14);// 17 หลัก
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , 'input28' ) );

/*---------------------------Number*5------------------------------------------*/
$pdf->Ln(0.7);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , '5. ความสามารถพิเศษหรือกิจกรรมที่นักศึกษาถนัด' ) );

$pdf->Ln(0.7);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , 'input 80' ) );
/*---------------------------Number*6------------------------------------------*/
$pdf->Ln(0.7);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , '6. ความสามารถทางด้านคอมพิวเตอร์ (โปรดระบุ ดีมาก/ดี/ปานกลาง/พอใช้/หรือ ได้เล็กน้อย)' ) );



$pdf->Ln(0.7);
$pdf->setX(4.0);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , '[  ] Microsoft office Excel ระดับ' ) );
$pdf->setX(9.3 );
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , 'ดีมาก' ) );

$pdf->setX(12.5 );
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , '[  ] Microsoft office Word ระดับ' ) );

$pdf->Ln(0.7);
$pdf->setX(4.0 );
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , '[  ] Microsoft PPT ระดับ' ) );
$pdf->setX(12.5 );
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , '[  ] อื่นๆ' ) );
$pdf->setX(13.8);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , 'input19' ) );
$pdf->setX(17.5 );
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , 'ระดับ' ) );
$pdf->setX(18.5 );
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , 'ดีมาก' ) );
/*---------------------------Number*7------------------------------------------*/
$pdf->Ln(0.7);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , '7. ความสามารถทางภาษา (โปรดระบุ ดีมาก/ดี/ปานกลาง/พอใช้/หรือ ได้เล็กน้อย)' ) );

$pdf->Ln(0.7);
$pdf->setX(4.0 );
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , '[  ] อังกฤษ   ระดับ' ) );
$pdf->setX(12.5 );
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , '[  ] ญี่ปุ่น   ระดับ' ) );

$pdf->Ln(0.7);
$pdf->setX(4.0 );
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , '[  ] จีน        ระดับ' ) );
$pdf->setX(12.5 );
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , '[  ] อื่นๆ' ) );
$pdf->setX(13.8);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , 'input19' ) );
$pdf->setX(17.5 );
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , 'ระดับ' ) );
$pdf->setX(18.5 );
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , 'ดีมาก' ) );
/*---------------------------Number*8------------------------------------------*/
$pdf->Ln(0.7);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , '8. ภูมิภาคที่นักศึกษาสนใจไปปฏิบัตงาน (เลือกเพียง 1 หัวข้อเพื่อประกอบการเลือกสถานประกอบการ)' ) );

$pdf->Ln(0.7);
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
$pdf->setX(4.0 );
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , '[  ] งานการตลาด' ) );
$pdf->setX(10.0);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , '[  ] งานสายการผลิต  ' ) );
$pdf->setX(13.5);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , '[  ] อื่นๆ ' ) );
/*---------------------------Number*10------------------------------------------*/
$pdf->Ln(0.7);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , '10. ความสนใจทางด้านวิชาการเฉพาะ' ) );
//ข้อที่ 10 / ตอบ
$pdf->Ln(0.5);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , 'input80' ) );

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

