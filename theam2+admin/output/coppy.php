<?php
ob_start();
require('fpdf181/fpdf.php');
define('FPDF_FONTPATH','C:/xampp/htdocs/web5/output/fpdf181/font');


if(isset($_POST["op1"]) == null){
	
	$_POST["op1"] = "space";
	
}
	


	




	




$pdf=new FPDF( 'P' , 'cm' , 'A4' );
 

$pdf->AddFont('THSarabun','','THSarabun.php');
$pdf->AddFont('THSarabun','B','THSarabun Bold.php');
$pdf->AddFont('THSarabun','I','THSarabun Italic.php');
$pdf->AddFont('THSarabun','BI','THSarabun Bold Italic.php');


$pdf->AddFont('angsana','','angsa.php');
$pdf->AddFont('angsana','B','angsab.php');
$pdf->AddFont('angsana','I','angsai.php');
$pdf->AddFont('angsana','BI','angsaz.php');


$pdf->SetLeftMargin(3.50); 
$pdf->SetRightMargin(0.50);
$pdf->SetTopMargin(2.54);
$pdf->SetAutoPageBreak(TRUE, 0);
$pdf->AddPage();
 
// กำหนดฟอนต์ที่จะใช้  อังสนา ตัวธรรมดา ขนาด 12


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

$pdf->Ln(1);
$pdf->setX(7.50 );
$pdf->SetFont('THSarabun','B',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , 'แบบแจ้งรายละเอียดการเข้าร่วมโครงการสหกิจศึกษา' ) );

$pdf->Ln(0.7);
$pdf->setX(5.50 );
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' , 'นักศึกษาจะต้องแนบแผนการเรียนมาตรฐานของสาขาวิชาที่ระบุระดับคะแนนตัวอักษรด้วย' ) );

$pdf->Ln(0.7);

for($i=0;$i<count($_POST["op1"]);$i++)
{
	if(trim($_POST["op1"][$i]) != "")
	{
        $chk[$i] = $_POST["op1"][$i];	
		$chk1 = $_POST["select_opt"];
		$chk2 = $_POST["select_opt2"];
				
		if($chk[$i] == 'Excel'){
			$show = 1;
			$pdf->Image('check-mark.jpg',5.6,7.4,0.4);
			
			$textother = 1;
					
		}else if($chk[$i] == 'word'){
			
			$show = 2;
			$show_2=1;
			$pdf->Image('check-mark.jpg',5.6,8.1,0.4);
			$textother = 1;
			
		}else if ($chk[$i] == 'PPT'){
			
			$show = 3;
			$pdf->Image('check-mark.jpg',5.6,8.9,0.4);
		    $textother = 1;
			
		}else if ($chk[$i] == 'other'){
			      $pdf->Image('check-mark.jpg',5.6,9.6,0.4);
			  if($_POST["text-other"] != ''){
				  
				  $show = 4;	
                  $textother = 1;				  
				  
			  }else{
                  $show = 6;
				  $textother = 2;
				  
			  }
			 		
								
		}else{
		    $show = 5;
		    $textother = 1;
			}
		
	
	}
			
}
$pdf->Ln(0.7);
$pdf->setX(5.50 );
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' ,'[ ] Microsoft office Excel ระดับ ') );
//echo $show;
if ( $show == 5){
	$pdf->setX(10.60 );
	$pdf->SetFont('THSarabun','B',16);
	$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' ,'') );
		
}else if( $show == 1) {

	switch ($chk1) {
	case "ดีมาก":
	    $pdf->setX(10.60);
		$pdf->SetFont('THSarabun','',16);
		$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' ,'ดีมาก') );
	
		break;
	
	case "ดี":
	    $pdf->setX(10.60);
		$pdf->SetFont('THSarabun','',16);
		$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' ,'ดี') );
		break;
	case "พอใช้":
	    $pdf->setX(10.60);
		$pdf->SetFont('THSarabun','',16);
		$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' ,'พอใช้') );
		break;
	case "แย่":
	    $pdf->setX(10.60);
		$pdf->SetFont('THSarabun','',16);
		$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' ,'แย่') );
	break;
	
	default:
		$pdf->setX(10.60 );
		$pdf->SetFont('THSarabun','B',16);
		$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' ,'') );
	
	}
}
$pdf->Ln(0.7);
$pdf->setX(5.50 );
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' ,'[ ] Microsoft office Word ระดับ') );
if ( $show == 5){
	$pdf->setX(10.60 );
	$pdf->SetFont('THSarabun','B',16);
	$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' ,'') );
		
}else{
	switch ($chk2) {
	case "ดีมาก":
	    $pdf->setX(10.60);
		$pdf->SetFont('THSarabun','',16);
		$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' ,'ดีมาก') );
	
		break;
	
	case "ดี":
	    $pdf->setX(10.60);
		$pdf->SetFont('THSarabun','',16);
		$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' ,'ดี') );
		break;
	case "พอใช้":
	    $pdf->setX(10.60);
		$pdf->SetFont('THSarabun','',16);
		$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' ,'พอใช้') );
		break;
	case "แย่":
	    $pdf->setX(10.60);
		$pdf->SetFont('THSarabun','',16);
		$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' ,'แย่') );
		break;
	default:
		$pdf->setX(10.60 );
		$pdf->SetFont('THSarabun','B',16);
		$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' ,'') );
	}
}

$pdf->Ln(0.7);
$pdf->setX(5.50 );
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' ,'[ ] Microsoft PPT ระดับ') );


$pdf->Ln(0.7);
$pdf->setX(5.50 );
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' ,'[ ] อื่นๆ') );
$pdf->setX(6.9 );
$pdf->SetFont('THSarabun','',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' ,$_POST["text-other"]) );

//echo $textother;
if($textother == 2){
	
$pdf->setX(6.9 );
$pdf->SetFont('THSarabun','B',16);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' ,'โปรดระบุ') );
	
}else{
	$pdf->setX(6.9 );
	$pdf->SetFont('THSarabun','B',16);
	$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','' ,'') );
	
}




$pdf->Output();
	



?>

