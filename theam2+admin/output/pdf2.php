<?php
ob_start();

require('fpdf181/fpdf.php');
define('FPDF_FONTPATH','C:/xampp/htdocs/web5/output/fpdf181/font');
require('/conn.php');

$UserNO = $_POST['UserNO']; 
//echo $UserNO; 
//******************************select-img-from DB********************/

	$data_result ="select * from upload_img where ID=(select max(ID) from upload_img where Userno='$UserNO' )";
	$data_result = mysqli_query($dbcon,$data_result);

    $run = mysqli_num_rows($data_result);

	$data_result_fetch = mysqli_fetch_assoc($data_result);	
    //echo $data_result_fetch["Filename1"];
//******************************select-img-from DB********************/

$input1 = $_POST['input1']; 
$input2 = $_POST['input2'];   
$input3 = $_POST['input3'];   
$input4 = $_POST['input4'];   
$input5 = $_POST['input5'];   
$input6 = $_POST['input6'];   
$input7 = $_POST['input7'];   
  
$input9 = $_POST['input9'];   

   
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
$input38 = $_POST['input38']; 
$input39 = $_POST['input39'];   
  
$input40 = $_POST['input40'];

$input41 = $_POST['input41'];
$input42 = $_POST['input42'];
$input43 = $_POST['input43'];
$input44 = $_POST['input44'];
$input45 = $_POST['input45'];
$input46 = $_POST['input46'];
$input47 = $_POST['input47'];
$input48 = $_POST['input48'];
$input49 = $_POST['input49'];
$input50 = $_POST['input50'];
$input51 = $_POST['input51'];
$input52 = $_POST['input52'];
$input53 = $_POST['input53'];
$input54 = $_POST['input54'];
$input55 = $_POST['input55'];
$input56 = $_POST['input56'];
$input57 = $_POST['input57'];

$input78 = $_POST['input78'];
$input79 = $_POST['input79'];
$input80 = $_POST['input80'];
$input81 = $_POST['input81'];
$input82 = $_POST['input82'];
$input83 = $_POST['input83'];
$input84 = $_POST['input84'];
$input85 = $_POST['input85'];
$input86 = $_POST['input86'];
$input87 = $_POST['input87'];
$input88 = $_POST['input88'];
$input89 = $_POST['input89'];
$input90 = $_POST['input90'];
$input91 = $_POST['input91'];
$input92 = $_POST['input92'];
$input93 = $_POST['input93'];
$input94 = $_POST['input94'];
$input95 = $_POST['input95'];
$input96 = $_POST['input96'];
$input97 = $_POST['input97'];
$input98 = $_POST['input98'];
$input99 = $_POST['input99'];
$input100 = $_POST['input100'];
$input101 = $_POST['input101'];
$input102 = $_POST['input102'];
$input103 = $_POST['input103'];
$input104 = $_POST['input104'];
$input105 = $_POST['input105'];
$input106 = $_POST['input106'];
$input107 = $_POST['input107'];

$input108 = $_POST['input108'];
$input109 = $_POST['input109'];
$input110 = $_POST['input110'];
$input111 = $_POST['input111'];
$input112 = $_POST['input112'];
$input113 = $_POST['input113'];
$input114 = $_POST['input114'];
$input115 = $_POST['input115'];
$input116 = $_POST['input116'];
$input117 = $_POST['input117'];
$input118 = $_POST['input118'];
$input119 = $_POST['input119'];

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
$img = 'rmutl-logo.png';
$pdf->Image('imgPDF/'.$img,3.50,2.54,2.10);



$pdf->Image('imgPDF/'.$data_result_fetch["Filename1"],17.30,3.64,2.50);

$pdf->setXY( 5.50,2.54 );
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , 'ศูนย์พัฒนาทักษะวิชาชีพนักศึกษา' ) );
$pdf->setXY( 16.80,2.54 );
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , 'เอกสารหมายเลข 3' ) );



$pdf->Ln(0.7);
$pdf->setX(5.50 );
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , 'มหาวิทยาลัยเทคโนโลยีราชมงคลล้านนา ตาก' ) );
$pdf->setX(17.50 );
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , 'หน้าที่ 1/4' ) );

 
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
$pdf->setX(8.50 );
$pdf->SetFont('THSarabun','B',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , 'ใบสมัครงานโครงการสหกิจศึกษา' ) );

/*---------------------------Number*1------------------------------------------*/
$pdf->Ln(0.7);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , 'ชื่อสถานประกอบการที่ต้องการสมัคร' ) );
$pdf->setX(9);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' ,'(Name of employer)') );
$pdf->Ln(0.7);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , $input1) );

$pdf->Ln(0.7);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , 'สมัครงานในตำแหน่ง' ) );
$pdf->setX(6.60 );
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' ,$input2) );
$pdf->setX(14.00 );
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' ,'หมายเลขงาน') );
$pdf->setX(16.10 );
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' ,$input3) );

$pdf->Ln(0.7);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , '(Position sought)' ) );
$pdf->setX(14.00 );
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , '(job number)' ) );


$pdf->Ln(0.7);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , 'ระยะเวลปฏิบัติงานสหกิจศึกษา จาก' ) );
$pdf->setX(8.90 );
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' ,$input4) );
$pdf->setX(14.00 );
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , 'ถึง' ) );
$pdf->setX(14.60 );
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' ,$input5) );

$pdf->Ln(0.7);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , '(Period of work)' ) );
$pdf->setX(8.20 );
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , '(From)' ) );
$pdf->setX(14.00 );
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , '(Until)' ) );
/*---------------------------ข้อมูลส่วนตัวนักศึกษา (Student personal data)------------------------------------------*/
$pdf->Ln(0.7);
$pdf->SetFont('THSarabun','B',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , 'ข้อมูลส่วนตัวนักศึกษา (Student personal data)' ) );

$pdf->Ln(0.7);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , 'ชื่อ-สกุล (ไทย) ' ) );
$pdf->setX(5.80 );
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' ,$input6) );

$pdf->Ln(0.7);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , 'Name&Surname (English)' ) );
$pdf->setX(7.80 );
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' ,$input7) );

$pdf->Ln(0.7);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , 'รหัสนักศึกษา (Student identification No.)' ) );
$pdf->setX(10.25 );
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' ,$input9) );

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
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' ,$input11) );
$pdf->setX(12.90);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , 'สาขา' ) );
$pdf->setX(13.75 );
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' ,$input12) );
$pdf->setX(16.10);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , 'คณะ' ) );
$pdf->setX(16.90);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' ,$input13) );

$pdf->Ln(0.7);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , 'นักศึกษาชั้นปีที่' ) );
$pdf->setX(5.95 );
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' ,$input14) );
$pdf->setX(9.50);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , 'อาจารย์ที่ปรึกษา' ) );
$pdf->setX(12.15 );
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' ,$input15) );

$pdf->Ln(0.7);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , '(Year in school)' ) );
$pdf->setX(9.50 );
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , '(Name of academic advisor)' ) );

$pdf->Ln(0.7);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , 'เกรดเฉลี่ยภาคการศึกษาที่ผ่านมา' ) );
$pdf->setX(8.55);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' ,$input16) );
$pdf->setX(12.50);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , 'เกรดเฉลี่ยสะสม' ) );
$pdf->setX(15.05);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' ,$input17) );

$pdf->Ln(0.7);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , '(GPA for most recently completed semester year)' ) );
$pdf->setX(12.50);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , '(GPAX for all courses completed to date)' ) );

$pdf->Ln(0.7);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , 'บัตรประจำตัวประชาชนเลขที่ (Identification card No.) ' ) );
$pdf->setX(12.05);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' ,$input18) );

$pdf->Ln(0.7);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , 'ออกให้ ณ' ) );
$pdf->setX(5.05);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' ,$input19) );
$pdf->setX(9.3 );
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , 'เมื่อวันที่' ) );
$pdf->setX(10.55);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' ,$input20) );
$pdf->setX(14.3 );
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , 'หมดอายุวันที่' ) );
$pdf->setX(16.35);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' ,$input21) );

$pdf->Ln(0.7);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , '(Issue at)' ) );
$pdf->setX(9.3);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , '(Issue date)' ) );
$pdf->setX(14.3);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , '(Expiry date)' ) );

$pdf->Ln(0.7);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , 'เชื้อชาติ' ) );
$pdf->setX(4.85);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' ,$input22) );
$pdf->setX(8.3);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , 'สัญชาติ' ) );
$pdf->setX(9.55);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' ,$input23) );
$pdf->setX(13.3);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , 'ศาสนา' ) );
$pdf->setX(14.55);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' ,$input24) );

$pdf->Ln(0.7);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , '(Race)' ) );
$pdf->setX(8.3);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , '(Nationality)' ) );
$pdf->setX(13.3);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , '(Religion)' ) );

$pdf->Ln(0.7);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , 'วันเดือนปีเกิด' ) );
$pdf->setX(5.55);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' ,$input25) );
$pdf->setX(11.0 );
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , 'สถานที่เกิด' ) );
$pdf->setX(12.75);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' ,$input26) );

$pdf->Ln(0.7);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , '(Date of birth)' ) );
$pdf->setX(11.7 );
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , '(Place of birth)' ) );

$pdf->Ln(0.7);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , 'อายุ' ) );
$pdf->setX(4.20);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' ,$input27) );
$pdf->setX(5.0);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , 'ปี ' ) );
$pdf->setX(5.5);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , 'เพศ' ) );
$pdf->setX(6.15);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' ,$input28) );
$pdf->setX(7.5);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , 'ส่วนสูง' ) );
$pdf->setX(8.65);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' ,$input29) );
$pdf->setX(10.0);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , 'ซม.' ) );
$pdf->setX(10.7);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , 'น้ำหนัก' ) );
$pdf->setX(11.85);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' ,$input30) );
$pdf->setX(13.1);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , 'กก.' ) );
$pdf->setX(13.8);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , 'โรคประจำตัว ระบุ' ) );
$pdf->setX(16.55);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' ,$input31) );

$pdf->Ln(0.7);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , '(Age)' ) );
$pdf->setX(5.5);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , '(Sex)' ) );
$pdf->setX(7.5);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , '(Height)' ) );
$pdf->setX(10.7);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , '(Weight)' ) );
$pdf->setX(13.8);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , '(Chronicle disease: specify)' ) );

$pdf->Ln(0.7);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , 'ที่อยู่ในภาคการศึกษานี้ (Address this semester)' ) );
$pdf->Ln(0.7);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' ,$input32) );


$pdf->Ln(0.7);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , 'โทรศัพท์' ) );
$pdf->setX(4.90);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' ,$input33) );
$pdf->setX(9.4);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , 'โทรศัพท์เคลื่อนที่ ' ) );
$pdf->setX(12.10);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' ,$input34) );
$pdf->setX(15.4);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , 'โทรสาร' ) );
$pdf->setX(16.60);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' ,$input35) );

$pdf->Ln(0.7);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , '(Telephone No.)' ) );
$pdf->setX(9.4);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , '(Mobile phone No.) ' ) );
$pdf->setX(15.4);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , '(Fax No.)' ) );

$pdf->Ln(0.7);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , 'จดหมายอิเล็กทรอนิกส์(E-mail)' ) );
$pdf->setX(8.30);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' ,$input36) );

$pdf->Ln(0.7);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , 'ที่อยู่ถาวร' ) );
$pdf->Ln(0.7);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' ,$input37) );

$pdf->Ln(0.7);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , 'โทรศัพท์' ) );
$pdf->setX(4.90);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' ,$input38) );
$pdf->setX(9.4);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , 'โทรศัพท์เคลื่อนที่ ' ) );
$pdf->setX(12.10);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' ,$input39) );
$pdf->setX(15.4);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , 'โทรสาร' ) );
$pdf->setX(16.60);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' ,$input40) );

$pdf->Ln(0.7);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , '(Telephone No.)' ) );
$pdf->setX(9.4);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , '(Mobile phone No.) ' ) );
$pdf->setX(15.4);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , '(Fax No.)' ) );
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
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , 'เอกสารหมายเลข 3' ) );
$pdf->Ln(0.7);
$pdf->setX(17.50 );
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , 'หน้าที่ 2/4' ) );
$pdf->Ln(0.7);
$pdf->SetFont('THSarabun','B',18);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , 'บุคคลที่ติดต่อได้ในกรณีฉุกเฉิน (Emergency case contact to)' ) );

/*****----------------end-header-page2------------------*******/////
/*****-----------------page2--here----------------------*******/////
$pdf->Ln(0.7);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , 'ชื่อ-สกุล' ) );
$pdf->setX(4.75);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' ,$input41) );
$pdf->setX(13.50 );
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , 'ความเกี่ยวข้อง' ) );
$pdf->setX(15.70);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' ,$input42) );

$pdf->Ln(0.7);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , 'อาชีพ' ) );
$pdf->setX(4.40);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' ,$input43) );
$pdf->setX(9.50 );
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , 'สถานที่ทำงาน' ) );
$pdf->setX(11.65);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' ,$input44) );
$pdf->Ln(0.7);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , 'ที่อยู่' ) );
$pdf->setX(4.25);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' ,$input45) );

$pdf->Ln(0.7);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , 'โทรศัพท์' ) );
$pdf->setX(4.90);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' ,$input46) );
$pdf->setX(9.4);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , 'โทรศัพท์เคลื่อนที่ ' ) );
$pdf->setX(12.10);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' ,$input47) );
$pdf->setX(15.4);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , 'โทรสาร' ) );
$pdf->setX(16.60);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' ,$input48) );

$pdf->Ln(0.7);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , '(Telephone No.)' ) );
$pdf->setX(9.4);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , '(Mobile phone No.) ' ) );
$pdf->setX(15.3);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , '(Fax No.)' ) );






$pdf->Ln(1.4);
$pdf->SetFont('THSarabun','B',18);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , 'ข้อมูลครอบครัว (Family Details)' ) );

$pdf->Ln(0.7);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , 'ชื่อบิดา' ) );
$pdf->setX(4.75);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' ,$input49) );
$pdf->setX(12.60 );
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , 'อายุ' ) );
$pdf->setX(13.55);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' ,$input50) );
$pdf->setX(14.60 );
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , 'ปี' ) );
$pdf->setX(15.0 );
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , 'อาชีพ' ) );
$pdf->setX(15.95);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' ,$input51) );

$pdf->Ln(0.7);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , '(Father’s name)' ) );
$pdf->setX(12.60 );
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , '(Age)' ) );
$pdf->setX(15.30 );
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , '(Occupation)' ) );

$pdf->Ln(0.7);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , 'ชื่อมารดา' ) );
$pdf->setX(5.05);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' ,$input52) );
$pdf->setX(12.60 );
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , 'อายุ' ) );
$pdf->setX(13.55);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' ,$input53) );
$pdf->setX(14.60 );
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , 'ปี' ) );
$pdf->setX(15.00 );
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , 'อาชีพ' ) );
$pdf->setX(15.95);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' ,$input54) );

$pdf->Ln(0.7);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , '(Mother’s name)' ) );
$pdf->setX(12.60 );
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , '(Age)' ) );
$pdf->setX(15.30 );
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , '(Occupation)' ) );

$pdf->Ln(0.7);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , 'ที่อยู่ (Address)' ) );
$pdf->Ln(0.7);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' ,$input56) );



$pdf->Ln(0.7);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , 'โทรศัพท์' ) );
$pdf->setX(4.90 );
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' ,$input55) );
$pdf->setX(8.60 );
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , 'จำนวนพี่น้อง' ) );


$chkword = $_POST["select_opt1"];
if ($chkword == "1"){
	$pdf->setX(10.70 );
	$pdf->SetFont('THSarabun','',16);
	$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' ,'1') );	
}else if ($chkword == "2"){
	$pdf->setX(10.70 );
	$pdf->SetFont('THSarabun','',16);
	$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' ,'2') );
}else if($chkword == "3"){
	$pdf->setX(10.70 );
	$pdf->SetFont('THSarabun','',16);
	$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' ,'3') );
	
}else if($chkword == "4"){
	$pdf->setX(10.70 );
	$pdf->SetFont('THSarabun','',16);
	$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' ,'4') );
}else{
	$pdf->setX(10.70 );
	$pdf->SetFont('THSarabun','',16);
	$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' ,'โปรดระบุ') );
	$number = 0;
	
}
$pdf->setX(12.25 );
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , 'คน' ) );
$pdf->setX(12.90 );
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , 'เป็นบุตรคนที่' ) );
$pdf->setX(14.95 );
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' ,$input57) );
$pdf->setX(15.30 );
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , 'ตามรายละเอียดข้างล่างนี้' ) );

$pdf->Ln(0.7);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , '(Telephone No.)' ) );
$pdf->setX(8.60 );
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , '(No. of relatives)' ) );
$pdf->setX(12.10 );
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , '(You are the)' ) );
$pdf->setX(15.00 );
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , '(as follows)' ) );
/*--------**************************human-1**************************------------------------------------------*/

	
$chkword = $_POST["select_opt1"];
if ($chkword == "1"){
	/*--------**************************end-human-1**************************------------------------------------------*/
	
$input58 = $_POST['input58'];   
$input59 = $_POST['input59'];   
$input60 = $_POST['input60'];   
$input61 = $_POST['input61'];   
$input62 = $_POST['input62'];   

	
$pdf->Ln(0.8);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , 'ลำดับที่' ) );
$pdf->setX(4.75 );
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' ,'1') );
$pdf->setX(5.30 );
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , 'ชื่อ-นามสกุล' ) );
$pdf->setX(7.25 );
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' ,$input58) );
$pdf->setX(13.30 );
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , 'อายุ' ) );
$pdf->setX(14.00 );
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' ,$input59) );
$pdf->setX(15.00 );
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , 'อาชีพ' ) );
$pdf->setX(15.95);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' ,$input60) );

$pdf->Ln(0.7);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , '(No.)' ) );
$pdf->setX(5.30 );
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , '(Name&Surname)' ) );
$pdf->setX(13.30 );
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , '(Age)' ) );
$pdf->setX(15.00 );
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , '(Occupation)' ) );

$pdf->Ln(0.7);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , 'ตำแหน่ง' ) );
$pdf->setX(4.90);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' ,$input61) );
$pdf->setX(8.6);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , 'ที่อยู่' ) );
$pdf->setX(9.30);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' ,$input62) );

$pdf->Ln(0.7);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , '(Postition)' ) );
$pdf->setX(8.6);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , '(Address)' ) );
/*--------**************************end-human-1**************************------------------------------------------*/

	
}else if ($chkword == "2"){
	/*--------**************************end-human-1**************************------------------------------------------*/

$input58 = $_POST['input58'];   
$input59 = $_POST['input59'];   
$input60 = $_POST['input60'];   
$input61 = $_POST['input61'];   
$input62 = $_POST['input62']; 

$input63 = $_POST['input63'];   
$input64 = $_POST['input64'];   
$input65 = $_POST['input65'];   
$input66 = $_POST['input66'];   
$input67 = $_POST['input67']; 
	
$pdf->Ln(0.8);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , 'ลำดับที่' ) );
$pdf->setX(4.75 );
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' ,'1') );
$pdf->setX(5.30 );
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , 'ชื่อ-นามสกุล' ) );
$pdf->setX(7.25 );
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' ,$input58) );
$pdf->setX(13.30 );
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , 'อายุ' ) );
$pdf->setX(14.00 );
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' ,$input59) );
$pdf->setX(15.00 );
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , 'อาชีพ' ) );
$pdf->setX(15.95);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' ,$input60) );

$pdf->Ln(0.7);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , '(No.)' ) );
$pdf->setX(5.30 );
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , '(Name&Surname)' ) );
$pdf->setX(13.30 );
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , '(Age)' ) );
$pdf->setX(15.00 );
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , '(Occupation)' ) );

$pdf->Ln(0.7);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , 'ตำแหน่ง' ) );
$pdf->setX(4.90);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' ,$input61) );
$pdf->setX(8.6);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , 'ที่อยู่' ) );
$pdf->setX(9.30);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' ,$input62) );

$pdf->Ln(0.7);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , '(Postition)' ) );
$pdf->setX(8.6);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , '(Address)' ) );
/*--------**************************end-human-1**************************------------------------------------------*/	
/*--------**************************human-2**************************------------------------------------------*/
$pdf->Ln(0.8);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , 'ลำดับที่' ) );
$pdf->setX(4.75 );
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' ,'2') );
$pdf->setX(5.30 );
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , 'ชื่อ-นามสกุล' ) );
$pdf->setX(7.25 );
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' ,$input63) );
$pdf->setX(13.30 );
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , 'อายุ' ) );
$pdf->setX(14.00 );
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' ,$input64) );
$pdf->setX(15.00 );
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , 'อาชีพ' ) );
$pdf->setX(15.95);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' ,$input65) );

$pdf->Ln(0.7);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , '(No.)' ) );
$pdf->setX(5.30 );
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , '(Name&Surname)' ) );
$pdf->setX(13.30 );
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , '(Age)' ) );
$pdf->setX(15.00 );
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , '(Occupation)' ) );

$pdf->Ln(0.7);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , 'ตำแหน่ง' ) );
$pdf->setX(4.90);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' ,$input66) );
$pdf->setX(8.6);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , 'ที่อยู่' ) );
$pdf->setX(9.30);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' ,$input67) );

$pdf->Ln(0.7);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , '(Postition)' ) );
$pdf->setX(8.6);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , '(Address)' ) );

	/*--------**************************end-human-2**************************------------------------------------------*/
}else if ($chkword == "3"){	

	/*--------**************************end-human-1**************************------------------------------------------*/
$input58 = $_POST['input58'];   
$input59 = $_POST['input59'];   
$input60 = $_POST['input60'];   
$input61 = $_POST['input61'];   
$input62 = $_POST['input62']; 

$input63 = $_POST['input63'];   
$input64 = $_POST['input64'];   
$input65 = $_POST['input65'];   
$input66 = $_POST['input66'];   
$input67 = $_POST['input67'];

$input68 = $_POST['input68'];   
$input69 = $_POST['input69'];   
$input70 = $_POST['input70'];   
$input71 = $_POST['input71'];   
$input72 = $_POST['input72']; 
	
$pdf->Ln(0.8);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , 'ลำดับที่' ) );
$pdf->setX(4.75 );
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' ,'1') );
$pdf->setX(5.30 );
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , 'ชื่อ-นามสกุล' ) );
$pdf->setX(7.25 );
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' ,$input58) );
$pdf->setX(13.30 );
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , 'อายุ' ) );
$pdf->setX(14.00 );
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' ,$input59) );
$pdf->setX(15.00 );
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , 'อาชีพ' ) );
$pdf->setX(15.95);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' ,$input60) );

$pdf->Ln(0.7);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , '(No.)' ) );
$pdf->setX(5.30 );
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , '(Name&Surname)' ) );
$pdf->setX(13.30 );
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , '(Age)' ) );
$pdf->setX(15.00 );
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , '(Occupation)' ) );

$pdf->Ln(0.7);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , 'ตำแหน่ง' ) );
$pdf->setX(4.90);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' ,$input61) );
$pdf->setX(8.6);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , 'ที่อยู่' ) );
$pdf->setX(9.30);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' ,$input62) );

$pdf->Ln(0.7);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , '(Postition)' ) );
$pdf->setX(8.6);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , '(Address)' ) );
/*--------**************************end-human-1**************************------------------------------------------*/
/*--------**************************human-2**************************------------------------------------------*/
$pdf->Ln(0.8);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , 'ลำดับที่' ) );
$pdf->setX(4.75 );
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' ,'2') );
$pdf->setX(5.30 );
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , 'ชื่อ-นามสกุล' ) );
$pdf->setX(7.25 );
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' ,$input63) );
$pdf->setX(13.30 );
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , 'อายุ' ) );
$pdf->setX(14.00 );
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' ,$input64) );
$pdf->setX(15.00 );
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , 'อาชีพ' ) );
$pdf->setX(15.95);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' ,$input65) );

$pdf->Ln(0.7);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , '(No.)' ) );
$pdf->setX(5.30 );
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , '(Name&Surname)' ) );
$pdf->setX(13.30 );
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , '(Age)' ) );
$pdf->setX(15.00 );
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , '(Occupation)' ) );

$pdf->Ln(0.7);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , 'ตำแหน่ง' ) );
$pdf->setX(4.90);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' ,$input66) );
$pdf->setX(8.6);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , 'ที่อยู่' ) );
$pdf->setX(9.30);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' ,$input67) );

$pdf->Ln(0.7);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , '(Postition)' ) );
$pdf->setX(8.6);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , '(Address)' ) );

	/*--------**************************end-human-2**************************------------------------------------------*/

/*--------**************************human-3**************************------------------------------------------*/
$pdf->Ln(0.8);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , 'ลำดับที่' ) );
$pdf->setX(4.75 );
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' ,'3') );
$pdf->setX(5.30 );
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , 'ชื่อ-นามสกุล' ) );
$pdf->setX(7.25 );
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' ,$input68) );
$pdf->setX(13.30 );
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , 'อายุ' ) );
$pdf->setX(14.00 );
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' ,$input69) );
$pdf->setX(15.00 );
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , 'อาชีพ' ) );
$pdf->setX(15.95);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' ,$input70) );

$pdf->Ln(0.7);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , '(No.)' ) );
$pdf->setX(5.30 );
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , '(Name&Surname)' ) );
$pdf->setX(13.30 );
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , '(Age)' ) );
$pdf->setX(15.00 );
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , '(Occupation)' ) );

$pdf->Ln(0.7);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , 'ตำแหน่ง' ) );
$pdf->setX(4.90);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' ,$input71) );
$pdf->setX(8.6);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , 'ที่อยู่' ) );
$pdf->setX(9.30);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' ,$input72) );

$pdf->Ln(0.7);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , '(Postition)' ) );
$pdf->setX(8.6);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , '(Address)' ) );
/*--------**************************end-human-3**************************------------------------------------------*/
}else {
	/*--------**************************end-human-1**************************------------------------------------------*/
	
$input58 = $_POST['input58'];   
$input59 = $_POST['input59'];   
$input60 = $_POST['input60'];   
$input61 = $_POST['input61'];   
$input62 = $_POST['input62']; 

$input63 = $_POST['input63'];   
$input64 = $_POST['input64'];   
$input65 = $_POST['input65'];   
$input66 = $_POST['input66'];   
$input67 = $_POST['input67'];

$input68 = $_POST['input68'];   
$input69 = $_POST['input69'];   
$input70 = $_POST['input70'];   
$input71 = $_POST['input71'];   
$input72 = $_POST['input72']; 

$input73 = $_POST['input73'];   
$input74 = $_POST['input74'];   
$input75 = $_POST['input75'];   
$input76 = $_POST['input76'];   
$input77 = $_POST['input77'];


	
$pdf->Ln(0.8);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , 'ลำดับที่' ) );
$pdf->setX(4.75 );
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' ,'1') );
$pdf->setX(5.30 );
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , 'ชื่อ-นามสกุล' ) );
$pdf->setX(7.25 );
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' ,$input58) );
$pdf->setX(13.30 );
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , 'อายุ' ) );
$pdf->setX(14.00 );
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' ,$input59) );
$pdf->setX(15.00 );
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , 'อาชีพ' ) );
$pdf->setX(15.95);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' ,$input60) );

$pdf->Ln(0.7);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , '(No.)' ) );
$pdf->setX(5.30 );
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , '(Name&Surname)' ) );
$pdf->setX(13.30 );
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , '(Age)' ) );
$pdf->setX(15.00 );
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , '(Occupation)' ) );

$pdf->Ln(0.7);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , 'ตำแหน่ง' ) );
$pdf->setX(4.90);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' ,$input61) );
$pdf->setX(8.6);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , 'ที่อยู่' ) );
$pdf->setX(9.30);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' ,$input62) );

$pdf->Ln(0.7);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , '(Postition)' ) );
$pdf->setX(8.6);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , '(Address)' ) );
/*--------**************************end-human-1**************************------------------------------------------*/
/*--------**************************human-2**************************------------------------------------------*/
$pdf->Ln(0.8);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , 'ลำดับที่' ) );
$pdf->setX(4.75 );
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' ,'2') );
$pdf->setX(5.30 );
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , 'ชื่อ-นามสกุล' ) );
$pdf->setX(7.25 );
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' ,$input63) );
$pdf->setX(13.30 );
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , 'อายุ' ) );
$pdf->setX(14.00 );
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' ,$input64) );
$pdf->setX(15.00 );
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , 'อาชีพ' ) );
$pdf->setX(15.95);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' ,$input65) );

$pdf->Ln(0.7);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , '(No.)' ) );
$pdf->setX(5.30 );
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , '(Name&Surname)' ) );
$pdf->setX(13.30 );
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , '(Age)' ) );
$pdf->setX(15.00 );
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , '(Occupation)' ) );

$pdf->Ln(0.7);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , 'ตำแหน่ง' ) );
$pdf->setX(4.90);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' ,$input66) );
$pdf->setX(8.6);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , 'ที่อยู่' ) );
$pdf->setX(9.30);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' ,$input67) );

$pdf->Ln(0.7);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , '(Postition)' ) );
$pdf->setX(8.6);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , '(Address)' ) );

	/*--------**************************end-human-2**************************------------------------------------------*/

/*--------**************************human-3**************************------------------------------------------*/
$pdf->Ln(0.8);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , 'ลำดับที่' ) );
$pdf->setX(4.75 );
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' ,'3') );
$pdf->setX(5.30 );
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , 'ชื่อ-นามสกุล' ) );
$pdf->setX(7.25 );
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' ,$input68) );
$pdf->setX(13.30 );
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , 'อายุ' ) );
$pdf->setX(14.00 );
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' ,$input69) );
$pdf->setX(15.00 );
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , 'อาชีพ' ) );
$pdf->setX(15.95);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' ,$input70) );

$pdf->Ln(0.7);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , '(No.)' ) );
$pdf->setX(5.30 );
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , '(Name&Surname)' ) );
$pdf->setX(13.30 );
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , '(Age)' ) );
$pdf->setX(15.00 );
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , '(Occupation)' ) );

$pdf->Ln(0.7);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , 'ตำแหน่ง' ) );
$pdf->setX(4.90);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' ,$input71) );
$pdf->setX(8.6);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , 'ที่อยู่' ) );
$pdf->setX(9.30);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' ,$input72) );

$pdf->Ln(0.7);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , '(Postition)' ) );
$pdf->setX(8.6);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , '(Address)' ) );
/*--------**************************end-human-3**************************------------------------------------------*/
/*--------**************************human-4**************************------------------------------------------*/
$pdf->Ln(0.8);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , 'ลำดับที่' ) );
$pdf->setX(4.75 );
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' ,'4') );
$pdf->setX(5.30 );
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , 'ชื่อ-นามสกุล' ) );
$pdf->setX(7.25 );
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' ,$input73) );
$pdf->setX(13.30 );
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , 'อายุ' ) );
$pdf->setX(14.00 );
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' ,$input74) );
$pdf->setX(15.00 );
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , 'อาชีพ' ) );
$pdf->setX(15.95);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' ,$input75) );

$pdf->Ln(0.7);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , '(No.)' ) );
$pdf->setX(5.30 );
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , '(Name&Surname)' ) );
$pdf->setX(13.30 );
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , '(Age)' ) );
$pdf->setX(15.00 );
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , '(Occupation)' ) );

$pdf->Ln(0.7);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , 'ตำแหน่ง' ) );
$pdf->setX(4.90);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' ,$input76) );
$pdf->setX(8.6);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , 'ที่อยู่' ) );
$pdf->setX(9.30);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' ,$input77) );

$pdf->Ln(0.7);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , '(Postition)' ) );
$pdf->setX(8.6);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , '(Address)' ) );
}
/*--------**************************end-human-4**************************------------------------------------------*/

/*--------**************************End-Page 2**************************------------------------------------------*/
/*--------////////////////////////---Page 3----//////////////////////////------------------------------------------*/
$pdf->SetLeftMargin(3.50); 
$pdf->SetTopMargin(1.54);
$pdf->SetAutoPageBreak(TRUE, 0);
$pdf->AddPage();
/*****----------------header-page3------------------*******/////
$pdf->Ln(0.7);
$pdf->setX(16.80);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , 'เอกสารหมายเลข 3' ) );
$pdf->Ln(0.7);
$pdf->setX(17.50 );
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , 'หน้าที่ 3/4' ) );
$pdf->Ln(0.7);
$pdf->SetFont('THSarabun','B',18);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , 'ประวัติการศึกษา (Education Background)' ) );

/*****----------------ระดับ ประถม (Primary)------------------*******/////
$pdf->Ln(1.0);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , 'ระดับ ประถม (Primary)' ) );

$pdf->Ln(0.7);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , 'สถานศึกษา' ) );
$pdf->setX(5.30);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' ,$input78) );
$pdf->setX(10.50 );
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , 'ปีที่เริ่ม' ) );
$pdf->setX(11.80);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' ,$input79) );
$pdf->setX(14.20 );
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , 'ปีที่จบ' ) );
$pdf->setX(15.60);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' ,$input80) );
$pdf->Ln(0.7);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , 'วุฒิการศึกษา' ) );
$pdf->setX(5.50);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' ,$input81) );
$pdf->setX(10.50 );
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , 'วิชา' ) );
$pdf->setX(11.40);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' ,$input82) );
/*****----------------ระดับ มัธยมต้น (Secondary)------------------*******/////
$pdf->Ln(1.0);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , 'ระดับ มัธยมต้น (Secondary)' ) );

$pdf->Ln(0.7);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , 'สถานศึกษา' ) );
$pdf->setX(5.30);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' ,$input83) );
$pdf->setX(10.50 );
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , 'ปีที่เริ่ม' ) );
$pdf->setX(11.80);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' ,$input84) );
$pdf->setX(14.20 );
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , 'ปีที่จบ' ) );
$pdf->setX(15.60);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' ,$input85) );
$pdf->Ln(0.7);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , 'วุฒิการศึกษา' ) );
$pdf->setX(5.50);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' ,$input86) );
$pdf->setX(10.50 );
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , 'วิชา' ) );
$pdf->setX(11.40);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' ,$input87) );
/*****----------------ระดับ มัธยมปลาย (High School)------------------*******/////
$pdf->Ln(1.0);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , 'ระดับ มัธยมปลาย (High School)' ) );

$pdf->Ln(0.7);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , 'สถานศึกษา' ) );
$pdf->setX(5.30);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' ,$input88) );
$pdf->setX(10.50 );
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , 'ปีที่เริ่ม' ) );
$pdf->setX(11.80);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' ,$input89) );
$pdf->setX(14.20 );
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , 'ปีที่จบ' ) );
$pdf->setX(15.60);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' ,$input90) );
$pdf->Ln(0.7);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , 'วุฒิการศึกษา' ) );
$pdf->setX(5.50);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' ,$input91) );
$pdf->setX(10.50 );
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , 'วิชา' ) );
$pdf->setX(11.40);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' ,$input92) );
/*****----------------ระดับ ต่ำกว่าอนุปริญญา (Vocational)------------------*******/////
$pdf->Ln(1.0);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , 'ระดับ ต่ำกว่าอนุปริญญา (Vocational)' ) );

$pdf->Ln(0.7);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , 'สถานศึกษา' ) );
$pdf->setX(5.30);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' ,$input93) );
$pdf->setX(10.50 );
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , 'ปีที่เริ่ม' ) );
$pdf->setX(11.80);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' ,$input94) );
$pdf->setX(14.20 );
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , 'ปีที่จบ' ) );
$pdf->setX(15.60);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' ,$input95) );
$pdf->Ln(0.7);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , 'วุฒิการศึกษา' ) );
$pdf->setX(5.50);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' ,$input96) );
$pdf->setX(10.50 );
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , 'วิชา' ) );
$pdf->setX(11.40);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' ,$input97) );
/*****----------------รระดับ อนุปริญญา (HighVocational)------------------*******/////
$pdf->Ln(1.0);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , 'ระดับ อนุปริญญา (HighVocational)' ) );

$pdf->Ln(0.7);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , 'สถานศึกษา' ) );
$pdf->setX(5.30);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' ,$input98) );
$pdf->setX(10.50 );
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , 'ปีที่เริ่ม' ) );
$pdf->setX(11.80);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' ,$input99) );
$pdf->setX(14.20 );
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , 'ปีที่จบ' ) );
$pdf->setX(15.60);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' ,$input100) );
$pdf->Ln(0.7);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , 'วุฒิการศึกษา' ) );
$pdf->setX(5.50);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' ,$input101) );
$pdf->setX(10.50 );
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , 'วิชา' ) );
$pdf->setX(11.40);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' ,$input102) );
/*****----------------ระดับ มหาวิทยาลัย (University)------------------*******/////
$pdf->Ln(1.0);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , 'ระดับ มหาวิทยาลัย (University)' ) );

$pdf->Ln(0.7);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , 'สถานศึกษา' ) );
$pdf->setX(5.30);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' ,$input103) );
$pdf->setX(10.50 );
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , 'ปีที่เริ่ม' ) );
$pdf->setX(11.80);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' ,$input104) );
$pdf->setX(14.20 );
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , 'ปีที่จบ' ) );
$pdf->setX(15.60);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' ,$input105) );
$pdf->Ln(0.7);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , 'วุฒิการศึกษา' ) );
$pdf->setX(5.50);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' ,$input106) );
$pdf->setX(10.50 );
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , 'วิชา' ) );
$pdf->setX(11.40);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' ,$input107) );
/*--------**************************End-Page 3**************************------------------------------------------*/
/*--------////////////////////////---Page 4----//////////////////////////------------------------------------------*/
$pdf->SetLeftMargin(3.50); 
$pdf->SetTopMargin(1.54);
$pdf->SetAutoPageBreak(TRUE, 0);
$pdf->AddPage();
/*****----------------header-page4------------------*******/////
$pdf->Ln(0.7);
$pdf->setX(16.80);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , 'เอกสารหมายเลข 3' ) );
$pdf->Ln(0.7);
$pdf->setX(17.50 );
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , 'หน้าที่ 4/4' ) );
$pdf->Ln(0.7);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , 'จุดมุ่งหมายอาชีพ (Career objectives)' ) );
$pdf->Ln(0.7);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , 'ระบุสายงานและลักษณะงานที่นักศึกษาสนใจ' ) );
$pdf->Ln(0.7);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , 'Indicate your objectives, files of interest and job preference' ) );

$pdf->Ln(0.7);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , '1.' ) );
$pdf->setX(4.0);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' ,$input108) );
$pdf->Ln(0.7);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , '2.' ) );
$pdf->setX(4.0);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' ,$input109) );
$pdf->Ln(0.7);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , '3.' ) );
$pdf->setX(4.0);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' ,$input110) );
$pdf->Ln(0.7);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , '4.' ) );
$pdf->setX(4.0);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' ,$input111) );

$pdf->Ln(2.0);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , 'กิจกรรมนอกหลักสูตร (Student activities)' ) );

$pdf->Ln(0.7);
$pdf->setX(4.80);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , 'ระยะเวลา Years' ) );
$pdf->setX(11.50);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , 'ตำแหน่งและหน้าที่ Position/Responsibility' ) );

$pdf->Ln(0.7);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , '1.' ) );
$pdf->setX(4.0);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' ,$input113) );
$pdf->setX(11.65);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' ,$input112) );
$pdf->Ln(0.7);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , '2.' ) );
$pdf->setX(4.0);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' ,$input115) );
$pdf->setX(11.65);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' ,$input114) );
$pdf->Ln(0.7);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , '3.' ) );
$pdf->setX(4.0);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' ,$input116) );
$pdf->setX(11.65);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' ,$input117) );
$pdf->Ln(0.7);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , '4.' ) );
$pdf->setX(4.0);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' ,$input119) );
$pdf->setX(11.65);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' ,$input118) );


$pdf->Ln(2.0);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , 'ความสามารถทางภาษา Language Ability' ) );
$pdf->Ln(0.7);
$pdf->setX(9.80);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , 'ฟัง/Listen' ) );
$pdf->setX(12.90);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , 'พูด/Speaking' ) );
$pdf->setX(16.80);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , 'เขียน/Writing' ) );
$pdf->Ln(0.7);
$pdf->setX(9.30);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , 'Good/Fair/Poor' ) );
$pdf->setX(12.70);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , 'Good/Fair/Poor' ) );
$pdf->setX(16.50);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , 'Good/Fair/Poor' ) );

$pdf->Line(3.6,17.25,19.50,17.25);

/*--------////////////////////////---english----//////////////////////////------------------------------------------*/
$pdf->Ln(1.2);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , 'ภาษาอังกฤษ (English)' ) );

$engListen = $_POST["select_opteng1"];
if ($engListen == "ดี"){
	$pdf->Image('check-mark.jpg',9.60,17.7,0.4);	
}else if ($engListen== "พอใช้"){
	$pdf->setX(4.90 );
	$pdf->Image('check-mark.jpg',10.60,17.7,0.4);	
}else if($engListen == "แย่"){
	$pdf->setX(4.90 );
	$pdf->Image('check-mark.jpg',11.6,17.7,0.4);	
	
}else{
	$pdf->setX(9.6);
	$pdf->SetFont('THSarabun','',16);
	$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , ' ' ) );
	$pdf->setX(10.6);
	$pdf->SetFont('THSarabun','',16);
	$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , ' ' ) );
	$pdf->setX(11.6);
	$pdf->SetFont('THSarabun','',16);
	$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , ' ' ) );

	
}



$pdf->setX(9.30);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , '[    ]' ) );
$pdf->setX(10.30);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , '[    ]' ) );
$pdf->setX(11.30);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , '[    ]' ) );



$engSpeaking = $_POST["select_opteng2"];
if ($engSpeaking == "ดี"){
	$pdf->Image('check-mark.jpg',13.00,17.7,0.4);	
}else if ($engSpeaking == "พอใช้"){
	$pdf->setX(4.90 );
	$pdf->Image('check-mark.jpg',14.00,17.7,0.4);	
}else if($engSpeaking == "แย่"){
	$pdf->setX(4.90 );
	$pdf->Image('check-mark.jpg',15.00,17.7,0.4);	
	
}else{
	$pdf->setX(13.0);
	$pdf->SetFont('THSarabun','',16);
	$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , ' ' ) );
	$pdf->setX(14.0);
	$pdf->SetFont('THSarabun','',16);
	$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , ' ' ) );
	$pdf->setX(15.0);
	$pdf->SetFont('THSarabun','',16);
	$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , ' ' ) );

	
}
$pdf->setX(12.70);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , '[    ]' ) );
$pdf->setX(13.70);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , '[    ]' ) );
$pdf->setX(14.70);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , '[    ]' ) );


$engWritting = $_POST["select_opteng3"];
if ($engWritting == "ดี"){
	$pdf->Image('check-mark.jpg',16.80,17.7,0.4);	
}else if ($engWritting== "พอใช้"){
	$pdf->setX(4.90 );
	$pdf->Image('check-mark.jpg',17.80,17.7,0.4);	
}else if($engWritting == "แย่"){
	$pdf->setX(4.90 );
	$pdf->Image('check-mark.jpg',18.80,17.7,0.4);	
	
}else{
	$pdf->setX(16.80);
	$pdf->SetFont('THSarabun','',16);
	$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , ' ' ) );
	$pdf->setX(17.80);
	$pdf->SetFont('THSarabun','',16);
	$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , ' ' ) );
	$pdf->setX(18.80);
	$pdf->SetFont('THSarabun','',16);
	$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , ' ' ) );

	
}
$pdf->setX(16.50);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , '[    ]' ) );
$pdf->setX(17.50);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , '[    ]' ) );
$pdf->setX(18.50);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , '[    ]' ) );
/*--------////////////////////////---china----//////////////////////////------------------------------------------*/
$pdf->Ln(1.0);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , 'ภาษาจีน (Chinese)' ) );


$chianListen = $_POST["select_optchina1"];
if ($chianListen  == "ดี"){
	$pdf->Image('check-mark.jpg',9.60,18.7,0.4);	
}else if ($chianListen  == "พอใช้"){
	$pdf->setX(4.90 );
	$pdf->Image('check-mark.jpg',10.60,18.7,0.4);	
}else if($chianListen  == "แย่"){
	$pdf->setX(4.90 );
	$pdf->Image('check-mark.jpg',11.6,18.7,0.4);	
	
}else{
	$pdf->setX(9.6);
	$pdf->SetFont('THSarabun','',16);
	$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , ' ' ) );
	$pdf->setX(10.6);
	$pdf->SetFont('THSarabun','',16);
	$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , ' ' ) );
	$pdf->setX(11.6);
	$pdf->SetFont('THSarabun','',16);
	$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , ' ' ) );

	
}
$pdf->setX(9.30);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , '[    ]' ) );
$pdf->setX(10.30);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , '[    ]' ) );
$pdf->setX(11.30);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , '[    ]' ) );


$chinaSpeaking = $_POST["select_optchina2"];
if ($chinaSpeaking  == "ดี"){
	$pdf->Image('check-mark.jpg',13.00,18.7,0.4);	
}else if ($chinaSpeaking  == "พอใช้"){
	$pdf->setX(4.90 );
	$pdf->Image('check-mark.jpg',14.00,18.7,0.4);	
}else if($chinaSpeaking  == "แย่"){
	$pdf->setX(4.90 );
	$pdf->Image('check-mark.jpg',15.00,18.7,0.4);	
	
}else{
	$pdf->setX(13.0);
	$pdf->SetFont('THSarabun','',16);
	$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , ' ' ) );
	$pdf->setX(14.0);
	$pdf->SetFont('THSarabun','',16);
	$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , ' ' ) );
	$pdf->setX(15.0);
	$pdf->SetFont('THSarabun','',16);
	$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , ' ' ) );

	
}

$pdf->setX(12.70);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , '[    ]' ) );
$pdf->setX(13.70);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , '[    ]' ) );
$pdf->setX(14.70);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , '[    ]' ) );

$chinaWritting = $_POST["select_optchina3"];
if ($chinaWritting == "ดี"){
	$pdf->Image('check-mark.jpg',16.80,18.7,0.4);	
}else if ($chinaWritting== "พอใช้"){
	$pdf->setX(4.90 );
	$pdf->Image('check-mark.jpg',17.80,18.7,0.4);	
}else if($chinaWritting == "แย่"){
	$pdf->setX(4.90 );
	$pdf->Image('check-mark.jpg',18.80,18.7,0.4);	
	
}else{
	$pdf->setX(16.80);
	$pdf->SetFont('THSarabun','',16);
	$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , ' ' ) );
	$pdf->setX(17.80);
	$pdf->SetFont('THSarabun','',16);
	$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , ' ' ) );
	$pdf->setX(18.80);
	$pdf->SetFont('THSarabun','',16);
	$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , ' ' ) );

	
}
$pdf->setX(16.50);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , '[    ]' ) );
$pdf->setX(17.50);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , '[    ]' ) );
$pdf->setX(18.50);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , '[    ]' ) );
/*--------////////////////////////---other-Langue----//////////////////////////------------------------------------------*/
$pdf->Ln(1.0);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , 'ภาษาอื่นๆ (Other)' ) );



if(isset($_POST["inputother"]) == null){
	
	$_POST["inputother"] = "space";
	
}

$inputother = $_POST["inputother"];


if ($inputother == null) {
	$pdf->setX(9.6);
	$pdf->SetFont('THSarabun','',16);
	$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , ' ' ) );
	$pdf->setX(10.6);
	$pdf->SetFont('THSarabun','',16);
	$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , ' ' ) );
	$pdf->setX(11.6);
	$pdf->SetFont('THSarabun','',16);
	$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , ' ' ) );
	
}else{
	$otherListen = $_POST["select_optother1"];

	if ($otherListen  == "ดี"){
		$pdf->Image('check-mark.jpg',9.60,19.7,0.4);	
	}else if ($otherListen  == "พอใช้"){
		$pdf->setX(4.90 );
		$pdf->Image('check-mark.jpg',10.60,19.7,0.4);	
	}else if($otherListen  == "แย่"){
		$pdf->setX(4.90 );
		$pdf->Image('check-mark.jpg',11.6,19.7,0.4);		
	}else{
		$pdf->setX(9.6);
		$pdf->SetFont('THSarabun','',16);
		$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , ' ' ) );
		$pdf->setX(10.6);
		$pdf->SetFont('THSarabun','',16);
		$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , ' ' ) );
		$pdf->setX(11.6);
		$pdf->SetFont('THSarabun','',16);
		$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , ' ' ) );

	}
}

$pdf->setX(9.30);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , '[    ]' ) );
$pdf->setX(10.30);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , '[    ]' ) );
$pdf->setX(11.30);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , '[    ]' ) );

if ($inputother == null) {
	$pdf->setX(13.0);
	$pdf->SetFont('THSarabun','',16);
	$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , ' ' ) );
	$pdf->setX(14.0);
	$pdf->SetFont('THSarabun','',16);
	$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , ' ' ) );
	$pdf->setX(15.0);
	$pdf->SetFont('THSarabun','',16);
	$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , ' ' ) );
}else{
	$otherSpeaking = $_POST["select_optother2"];
	if ($otherSpeaking  == "ดี"){
		$pdf->Image('check-mark.jpg',13.00,19.7,0.4);	
	}else if ($otherSpeaking  == "พอใช้"){
		$pdf->setX(4.90 );
		$pdf->Image('check-mark.jpg',14.00,19.7,0.4);	
	}else if($otherSpeaking  == "แย่"){
		$pdf->setX(4.90 );
		$pdf->Image('check-mark.jpg',15.00,19.7,0.4);	
	}else{
		$pdf->setX(13.0);
		$pdf->SetFont('THSarabun','',16);
		$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , ' ' ) );
		$pdf->setX(14.0);
		$pdf->SetFont('THSarabun','',16);
		$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , ' ' ) );
		$pdf->setX(15.0);
		$pdf->SetFont('THSarabun','',16);
		$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , ' ' ) );
	}
	
}

$pdf->setX(12.70);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , '[    ]' ) );
$pdf->setX(13.70);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , '[    ]' ) );
$pdf->setX(14.70);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , '[    ]' ) );

if ($inputother == null) {
	$pdf->setX(16.80);
	$pdf->SetFont('THSarabun','',16);
	$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , ' ' ) );
	$pdf->setX(17.80);
	$pdf->SetFont('THSarabun','',16);
	$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , ' ' ) );
	$pdf->setX(18.80);
	$pdf->SetFont('THSarabun','',16);
	$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , ' ' ) );
}else{

	$otherWritting = $_POST["select_optother3"];
	if ($chinaWritting == "ดี"){
		$pdf->Image('check-mark.jpg',16.80,19.7,0.4);	
	}else if ($chinaWritting== "พอใช้"){
		$pdf->setX(4.90 );
		$pdf->Image('check-mark.jpg',17.80,19.7,0.4);	
	}else if($chinaWritting == "แย่"){
		$pdf->setX(4.90 );
		$pdf->Image('check-mark.jpg',18.80,19.7,0.4);	
	
	}else{
		$pdf->setX(16.80);
		$pdf->SetFont('THSarabun','',16);
		$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , ' ' ) );
		$pdf->setX(17.80);
		$pdf->SetFont('THSarabun','',16);
		$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , ' ' ) );
		$pdf->setX(18.80);
		$pdf->SetFont('THSarabun','',16);
		$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , ' ' ) );
	}
	
}

$pdf->setX(16.50);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , '[    ]' ) );
$pdf->setX(17.50);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , '[    ]' ) );
$pdf->setX(18.50);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , '[    ]' ) );

$pdf->Ln(0.7);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , 'ระบุ' ) );
$pdf->setX(4.35);
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' ,$inputother) );



/*--------////////////////////////---end-Page 4----//////////////////////////------------------------------------------*/

$pdf->Output();
?>

