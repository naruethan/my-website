<?php

session_start();
error_reporting(-1);
require('/header.php');
require('/confic/conn.php');
if($_SESSION["username"] == null){
	echo'<META HTTP-EQUIV="Refresh" CONTENT="0;URL=http://localhost/theam2+admin/index.php">';
}
if(!isset($_SESSION["username"])){
	
	header("location: index.php");
}

$qurry_username = $_SESSION["username"];

$data_result ="select * from upload_img where ID=(select max(ID) from upload_img where Userno='$qurry_username' )";
$data_result = mysqli_query($dbcon,$data_result);
$run = mysqli_num_rows($data_result);
$data_result_fetch = mysqli_fetch_assoc($data_result);


?>
<html>

<style>
  ul#stepForm, ul#stepForm li {
    margin: 0;
    padding: 0;
  }
  ul#stepForm li {
    list-style: none outside none;
  } 
</style>
<body>
    <div class="container-main" style="background-color: rgb(230, 230, 230);">     
      <br>
	  <div class="container">
        <!-- Content Row -->
        <div class="row">
            <div class="col-md-9">
			  <div class="single-post-breadcrumb">
				<ol class="breadcrumb">
					<li><a href="http://localhost/theam2+admin/home.php">Home</a></li>
					<li class="active">สมัครเข้าร่วมโครงการสหกิจ</li>				
					<li class="active">เอกสารที่ 3</li>
				</ol>
					<div class="page-header">
						<h3>แบบฟอร์มกรอกข้อมูลใบสมัครงานโครงการสหกิจศึกษา (เอกสารที่ 3) </h3>      
					</div>
			  </div>
	<div class="col-md-12" style="margin-bottom: 30px; background-color: rgba(245, 245, 245, 0.95);">		
	  <form name="form1" method="post" action="uploadTosql.php" enctype="multipart/form-data">	
	    
	  <h4>อัพโหลดรูปภาพ : ใช้รูปขนาด ความกว้างและความยาวไม่เกิน 250*250 </h4>

		<input class="form-control" type="file" name="filUpload"><br>
	 <div class="row"> 
	  <div class="col-md-3">
	  <input type="hidden" value="<?php echo $qurry_username;?>" class="form-control" name="UserNOimg" id="UserNOimg" maxlength="14">
      </div>	
     </div>	 	  
	  <h4>คุณได้อัพโหลดรูป : <?php echo $data_result_fetch["Filename1"]; ?> เรียบร้อยแล้ว</h4>
	  <input class="btn btn-default" class="form-control" name="btnSubmit" type="submit" value="อัพโหลด"> 
	  </form>	
	</div>


	<div class="col-md-12" style="background-color: rgba(245, 245, 245, 0.95);">
	<form name="basicform" id="basicform" method="post" action="output/pdf2.php">
		<div id="sf1" class="frm">
			<div class="resgister-page1/4-sheet3" style="font-size: 17px;">
			     <h4>หน้าที่ 1/4 </h4>
			
			<div class="container">			     
				 <h4>ชื่อสถานประกอบการที่ต้องการสมัคร</h4>
			<div class="row"> 	 
				 <div class="col-md-8">
				    <input type="hidden" value="<?php echo $qurry_username;?>" class="form-control" name="UserNO" id="UserNO" maxlength="14">
					<input type="text" class="form-control" name="input1" id="input1" maxlength="70">
				 </div>
			</div>
			<div class="row"> 
				<div class="col-md-4">
				  <h4>สมัครงานในตำแหน่ง</h4>
				  <input type="text" class="form-control" name="input2" id="input2" maxlength="30">
				</div>
			
				<div class="col-md-4">
						<h4>หมายเลขงาน</h4>
						<input type="text" class="form-control" name="input3" id="input3" maxlength="17">
				</div>
			</div>
			    <h4>ระยะเวลปฏิบัติงานสหกิจศึกษา </h4> 

			<div class="row">
				<div class="col-sm-1" style="width: 40px;">
					<h4>จาก </h4> </div>
				<div class="col-sm-3">
					<input type="text" class="form-control" name="input4" id="input4" maxlength="24"></div>
				<div class="col-sm-1" style="width: 30px;">
					<h4>ถึง </h4></div>
				<div class="col-sm-3">
					<input type="text" class="form-control" name="input5" id="input5" maxlength="26"></div>
			</div>
			<br>
			<div class="row">
				<div class="col-md-8">
					<hr style="border: 1px solid #c3c3c3;">
				</div>			
			</div>
				<h4>ข้อมูลส่วนตัวนักศึกษา (Student personal data)</h4>
			<div class="container">		
			 <div class="row"> 
				<div class="col-md-4">
				    <h4>ชื่อ-สกุล( ไทย)</h4>
				    <input type="text" class="form-control" name="input6" id="input6" maxlength="56">
				</div>			
				<div class="col-md-4">
					<h4>Name&Surname(English)</h4>
					<input type="text" class="form-control" name="input7" id="input7" maxlength="56">
				</div>
			 </div>		 
			</h4>รหัสนักศึกษา (Student identification No.)</h4>
			 <div class="row"> 
				<div class="col-md-4">				  
				  <input type="text" class="form-control" name="input9" id="input9" maxlength="13">
				</div>         
			 </div> 
			 <div class="row"> 
				<div class="col-md-4">
				    <h4>หลักสูตร</h4>
				    <select class="form-control" id="select_opt91" name="select_opt91">		   	
						<option value="ปริญญาตรี">ปริญญาตรี</option>
						<option value="เทียบโอน">ปริญญาตรี เทียบโอน</option>
						<option value="ป.ว.ส.">ป.ว.ส.</option>
					</select>
				</div>			
				<div class="col-md-4">
					<h4>สาขาวิชา</h4>
					<input type="text" class="form-control" name="input11" id="input11" value="วิศวกรรมคอมพิวเตอร์" maxlength="19">
				</div>
			 </div>
			 <div class="row"> 
				<div class="col-md-4">
				    <h4>สาขา</h4>
				    <input type="text" class="form-control" name="input12" id="input12" maxlength="13" value="วิศวกรรมไฟฟ้า">
				</div>			
				<div class="col-md-4">
					<h4>คณะ</h4>
					<input type="text" class="form-control" name="input13" id="input13" maxlength="15" value="วิศวกรรมศาสตร์">
				</div>
			 </div>	
			 <div class="row"> 
				<div class="col-md-4">
				    <h4>นักศึกษาชั้นปีที่</h4>
				    <input type="text" class="form-control" name="input14" id="input14" maxlength="1">
				</div>			
				<div class="col-md-4">
					<h4>อาจารย์ที่ปรึกษา</h4>
					<input type="text" class="form-control" name="input15" id="input15" maxlength="37">
				</div>
			 </div>	
			 <h4></h4>
			<div class="row">
				<div class="col-sm-3" style="width: 292px;">
					<h4>เกรดเฉลี่ยภาคการศึกษาที่ผ่านมา</h4> </div>
				<div class="col-sm-2" style="width: 170px;">
					<input type="text" class="form-control" name="input16" id="input16" maxlength="6"></div>
				<div class="col-sm-2" style="width: 150px;">
					<h4>เกรดเฉลี่ยสะสม</h4></div>
				<div class="col-sm-2" style="width: 170px;">
					<input type="text" class="form-control" name="input17" id="input17" maxlength="6"></div>
			</div>
			<h4></h4>
			<div class="row">
				<div class="col-sm-5" style="width: 430px;">
					<h4>บัตรประจำตัวประชาชนเลขที่ (Identification card No.) </h4> </div>
				<div class="col-sm-2">
					<input type="text" class="form-control" name="input18" id="input18" maxlength="13"></div>
				
			</div>
			<h4></h4>
			<div class="row">
				<div class="col-sm-2" style="width: 89px;padding-right: 1px;padding-left: 15px;">
					<h4>ออกให้ ณ</h4> </div>
				<div class="col-sm-2">
					<input type="text" class="form-control" name="input19" id="input19" maxlength="20"></div>
				<div class="col-sm-2" style="width: 70px;padding-right: 1px;padding-left: 1px;">
					<h4>เมื่อวันที่</h4> </div>
				<div class="col-sm-1" style="width: 150px;">
					<input type="text" class="form-control" name="input20" id="input20" maxlength="17"></div>
				<div class="col-sm-2" style="width: 119px;padding-right: 2px;padding-left: 5px;">
					<h4>หมดอายุวันที่</h4> </div>
				<div class="col-sm-2" style="width: 150px;">
					<input type="text" class="form-control" name="input21" id="input21" maxlength="18"></div>
				
			</div>
			<h4></h4>
			<div class="row">
				<div class="col-sm-2" style="width: 89px;padding-right: 1px;padding-left: 15px;">
					<h4>เชื้อชาติ</h4> </div>
				<div class="col-sm-2">
					<input type="text" class="form-control" name="input22" id="input22" maxlength="17"></div>
				<div class="col-sm-2" style="width: 70px;padding-right: 1px;padding-left: 1px;">
					<h4>สัญชาติ</h4> </div>
				<div class="col-sm-1" style="width: 150px;">
					<input type="text" class="form-control" name="input23" id="input23" maxlength="17"></div>
				<div class="col-sm-2" style="width: 119px;padding-right: 2px;padding-left: 5px;">
					<h4>ศาสนา</h4> </div>
				<div class="col-sm-2" style="width: 150px;">
					<input type="text" class="form-control" name="input24" id="input24" maxlength="17"></div>
				
			</div>
			<h4></h4>
			<div class="row">
				<div class="col-sm-2"style="width:120px;padding-right: 1px;">
					<h4>วันเดือนปีเกิด</h4> </div>
				<div class="col-sm-2" >
					<input type="text" class="form-control" name="input25" id="input25" maxlength="25"></div>
				<div class="col-sm-2"style="width:120px;padding-right: 1px;">
					<h4>สถานที่เกิด</h4> </div>
				<div class="col-sm-4" style="width: 335px;">
					<input type="text" class="form-control" name="input26" id="input26" maxlength="35"></div>			
				
			</div>
			<h4></h4>
			<div class="row">
				<div class="col-sm-2" style="width: 50px;padding-right: 1px;padding-left: 15px;">
					<h4>อายุ</h4> </div>
				<div class="col-sm-1" style="padding-right: 5px;padding-left: 5px;">
					<input type="text" class="form-control" name="input27" id="input27" maxlength="3"></div>
				<div class="col-sm-2" style="width: 50px;padding-right: 1px;padding-left: 1px;">
					<h4>ปี     เพศ</h4> </div>
				<div class="col-sm-1" style="width: 65px;padding-right: 1px;padding-left: 1px;">
					<input type="text" class="form-control" name="input28" id="input28" maxlength="4"></div>
				<div class="col-sm-2" style="width: 60px;padding-right: 1px;padding-left: 5px;">
					<h4>ส่วนสูง</h4> </div>
				<div class="col-sm-1" style="width: 50px;padding-right: 1px;padding-left: 1px;">
					<input type="text" class="form-control" name="input29" id="input29" maxlength="6"></div>
				<div class="col-sm-2" style="width: 105px;padding-right: 1px;padding-left: 5px;">
					<h4>ซม.     น้ำหนัก</h4> </div>
				<div class="col-sm-1" style="width: 50px;padding-right: 1px;padding-left: 1px;">
					<input type="text" class="form-control" name="input30" id="input30" maxlength="6"></div>
			</div>
			<div class="row">
				<div class="col-md-4">
					<h4>โรคประจำตัว ระบุ</h4>
					<input type="text" class="form-control" name="input31" id="input31" maxlength="17">
				</div>			
			</div>
			
			<div class="row">
				<div class="col-md-8">
					<hr style="border: 1px solid #c3c3c3;">
				</div>			
			</div>
	
			<div class="row">
				<div class="col-md-8">
					<h4>ที่อยู่ในภาคการศึกษานี้ (Address this semester)</h4>
					<input type="text" class="form-control" name="input32" id="input32" maxlength="76">
				</div>			
			</div>
			<h4></h4>
			<div class="row">
				<div class="col-sm-2" style="width: 89px;padding-right: 1px;padding-left: 15px;">
					<h4>โทรศัพท์</h4> </div>
				<div class="col-sm-2" style="width: 150px;padding-right: 5px;padding-left: 5px;">
					<input type="text" class="form-control" name="input33" id="input33" maxlength="15"></div>
				<div class="col-sm-2" style="width: 135px;padding-right: 1px;padding-left: 1px;">
					<h4>โทรศัพท์เคลื่อนที่</h4> </div>
				<div class="col-sm-1" style="width: 150px;">
					<input type="text" class="form-control" name="input34" id="input34" maxlength="15"></div>
				<div class="col-sm-2" style="width: 89px;padding-right: 2px;padding-left: 5px;">
					<h4>โทรสาร</h4> </div>
				<div class="col-sm-2" style="width: 158px;padding-right: 5px;padding-left: 5px;">
					<input type="text" class="form-control" name="input35" id="input35" maxlength="15"></div>
				
			</div>
			<div class="row">
				<div class="col-sm-3" style="width: 240px; padding-right: 1px;padding-left: 0px;">
					<h4>จดหมายอิเล็กทรอนิกส์(E-mail)</h4> </div>
				<div class="col-sm-4" style="padding-right: 0px;padding-left: 0px;">
					<input type="text" class="form-control" name="input36" id="input36" maxlength="50"></div>
			</div>
			<div class="row">
				<div class="col-md-8">
					<hr style="border: 1px solid #c3c3c3;">
				</div>			
			</div>

			<div class="row">
				<div class="col-md-8">
					<h4>ที่อยู่ถาวร</h4>
					<input type="text" class="form-control" name="input37" id="input37" maxlength="76">
				</div>			
			</div>
			<h4></h4>
			<div class="row">
				<div class="col-sm-2" style="width: 89px;padding-right: 1px;padding-left: 15px;">
					<h4>โทรศัพท์</h4> </div>
				<div class="col-sm-2" style="width: 150px;padding-right: 5px;padding-left: 5px;">
					<input type="text" class="form-control" name="input38" id="input38" maxlength="15"></div>
				<div class="col-sm-2" style="width: 135px;padding-right: 1px;padding-left: 1px;">
					<h4>โทรศัพท์เคลื่อนที่</h4> </div>
				<div class="col-sm-1" style="width: 150px;">
					<input type="text" class="form-control" name="input39" id="input39" maxlength="15"></div>
				<div class="col-sm-2" style="width: 89px;padding-right: 2px;padding-left: 5px;">
					<h4>โทรสาร</h4> </div>
				<div class="col-sm-2" style="width: 158px;padding-right: 5px;padding-left: 5px;">
					<input type="text" class="form-control" name="input40" id="input40" maxlength="15"></div>
				
			</div>


			 
			
			</div>
			<!--ข้อมูลส่วนตัวนักศึกษา --->
	
			
			<br>
			<div class="form-group">
              <div class="col-lg-12 col-lg-offset-4">
                <button class="btn btn-primary open1" type="button">ไปหน้า 2 <span class="fa fa-arrow-right" style="padding: 0;width: 20; height: 20;"></span></button> 
              </div>
            </div>
			
			
			</div>
			 <!-- end-page-1--->
		</div>
	</div>
		<!---page-2--->		
	<div id="sf2" class="frm" style="display: none;">
		<div class="resgister-page2/4-sheet3" style="font-size: 17px;">
			     <h4>หน้าที่ 2/4 </h4>
			<div class="container">
				 <h4>บุคคลที่ติดต่อได้ในกรณีฉุกเฉิน (Emergency case contact to)</h4>
			<div class="container">
			<div class="row"> 
				<div class="col-md-6">
				    <h4>ชื่อ-สกุล </h4>
				    <input type="text" class="form-control" name="input41" id="input41" maxlength="43">
				</div>			
				<div class="col-md-2">
					<h4>ความเกี่ยวข้อง</h4>
					<input type="text" class="form-control" name="input42" id="input43" maxlength="20">
				</div>
			 </div>
			 <h4></h4>
			<div class="row">
				<div class="col-sm-1" style="width: 70px;">
					<h4>อาชีพ</h4> </div>
				<div class="col-sm-2" style="padding-right: 5px;padding-left: 5px;">
					<input type="text" class="form-control" name="input43" id="input43" maxlength="25"></div>
				<div class="col-sm-2" style="width: 117px; padding-right: 3px;padding-left: 3px;">
					<h4>สถานที่ทำงาน</h4> </div>
				<div class="col-sm-2" style="padding-right: 5px;padding-left: 5px;">
					<input type="text" class="form-control" name="input44" id="input44" maxlength="40"></div>
			</div>
			<div class="row">
				<div class="col-md-8">
					<h4>ที่อยู่</h4>
					<input type="text" class="form-control" name="input45" id="input45" maxlength="76">
				</div>			
			</div>
			<h4></h4>
			<div class="row">
				<div class="col-sm-2" style="width: 89px;padding-right: 1px;padding-left: 15px;">
					<h4>โทรศัพท์</h4> </div>
				<div class="col-sm-2" style="width: 150px;padding-right: 5px;padding-left: 5px;">
					<input type="text" class="form-control" name="input46" id="input46" maxlength="15"></div>
				<div class="col-sm-2" style="width: 135px;padding-right: 1px;padding-left: 1px;">
					<h4>โทรศัพท์เคลื่อนที่</h4> </div>
				<div class="col-sm-1" style="width: 150px;">
					<input type="text" class="form-control" name="input47" id="input47" maxlength="15"></div>
				<div class="col-sm-2" style="width: 89px;padding-right: 2px;padding-left: 5px;">
					<h4>โทรสาร</h4> </div>
				<div class="col-sm-2" style="width: 158px;padding-right: 5px;padding-left: 5px;">
					<input type="text" class="form-control" name="input48" id="input48" maxlength="15"></div>
				
			</div>

			</div>
			<!--บุคคลที่ติดต่อได้ในกรณีฉุกเฉิน (Emergency case contact to) --->
			<h4>บุคคลที่ติดต่อได้ในกรณีฉุกเฉิน (Emergency case contact to)</h4>	
			<div class="container">	
			<h4></h4>
			<div class="row">
				<div class="col-sm-2" style="width: 70px;padding-right: 1px;padding-left: 15px;">
					<h4>ชื่อบิดา</h4> </div>
				<div class="col-sm-3" style="padding-right: 5px;padding-left: 1px;">
					<input type="text" class="form-control" name="input49" id="input49" maxlength="37"></div>
				<div class="col-sm-1" style="width: 25px; padding-right: 1px;padding-left: 1px;">
					<h4>อายุ</h4> </div>
				<div class="col-sm-1" style="width: 150px;">
					<input type="text" class="form-control" name="input50" id="input50" maxlength="4"></div>
				<div class="col-sm-2" style="width: 70px;padding-right: 1px;padding-left: 1px;">
					<h4>ปี  อาชีพ</h4> </div>
				<div class="col-sm-2" style="width: 158px;padding-right: 5px;padding-left: 5px;">
					<input type="text" class="form-control" name="input51" id="input51" maxlength="20"></div>
				
			</div>
			<div class="row">
				<div class="col-sm-2" style="width: 70px;padding-right: 1px;padding-left: 15px;">
					<h4>ชื่อมารดา</h4> </div>
				<div class="col-sm-3" style="padding-right: 5px;padding-left: 1px;">
					<input type="text" class="form-control" name="input52" id="input52" maxlength="37"></div>
				<div class="col-sm-1" style="width: 25px; padding-right: 1px;padding-left: 1px;">
					<h4>อายุ</h4> </div>
				<div class="col-sm-1" style="width: 150px;">
					<input type="text" class="form-control" name="input53" id="input53" maxlength="4"></div>
				<div class="col-sm-2" style="width: 70px;padding-right: 1px;padding-left: 1px;">
					<h4>ปี  อาชีพ</h4> </div>
				<div class="col-sm-2" style="width: 158px;padding-right: 5px;padding-left: 5px;">
					<input type="text" class="form-control" name="input54" id="input54" maxlength="20"></div>
				
			</div>
			<div class="row">
				<div class="col-md-3">
					<h4>โทรศัพท์</h4>
					<input type="text" class="form-control" name="input55" id="input55" maxlength="15">
				</div>			
			</div>
			<div class="row">
				<div class="col-md-8">
					<h4>ที่อยู่</h4>
					<input type="text" class="form-control" name="input56" id="input56" maxlength="76">
				</div>			
			</div>
			<h4></h4>
			<div class="row">
				<div class="col-sm-2" style="width: 120px;padding-right: 1px;padding-left: 15px;">
					<h4>จำนวนพี่น้อง</h4> </div>
				<div class="col-sm-2" style="width: 155px;padding-right: 5px;padding-left: 1px;">
					 <select class="form-control" id="select_opt1" name="select_opt1">
						<option value="">เลือกจำนวนพี่น้อง</option>
						<option value="1">1</option>
						<option value="2">2</option>		
						<option value="3">3</option>
						<option value="4">4</option>
					</select>		
				</div>
				<div class="col-sm-2" style="width: 130px; padding-right: 1px;padding-left: 1px;">
					<h4>คน เป็นบุตรคนที่</h4> </div>
				<div class="col-sm-1" style="width: 100px;">
					<input type="text" class="form-control" name="input57" id="input57" maxlength="1"></div>
				<div class="col-sm-3" style="padding-right: 1px;padding-left: 1px;">
					<h4>ตามรายละเอียดข้างล่างนี้</h4> </div>
				
			</div>
			<h4></h4>
		<div class="div-1"><!--ลำดับที่ 1--->
			<div class="row">
			  	<div class="col-sm-2" style="width: 100px;padding-right: 1px;padding-left: 15px;">
					<h4>ลำดับที่ 1</h4> </div>
				<div class="col-sm-1" style="padding-right: 5px;padding-left: 1px;">
					<h4> ชื่อ-นามสกุล</h4></div>
				<div class="col-sm-3">
					<input type="text" class="form-control" name="input58" id="input58" maxlength="38"></div>
				<div class="col-sm-1" style="width: 45px; padding-right: 1px;padding-left: 1px;">
					<h4>อายุ</h4> </div>
				<div class="col-sm-2" style="width: 170px;padding-right: 5px;padding-left: 5px;">
					<input type="text" class="form-control" name="input59" id="input59" maxlength="4"></div>
		    </div>
			<div class="row">
				<div class="col-sm-1" style="width: 70px;padding-right: 1px;padding-left: 15px;">
					<h4>อาชีพ</h4> </div>
				<div class="col-sm-3" style="padding-right: 5px;padding-left: 1px;">
					<input type="text" class="form-control" name="input60" id="input60" maxlength="20"></div>
				<div class="col-sm-1">
					<h4>ตำแหน่ง</h4></div>
				<div class="col-sm-3" style="padding-right: 1px;padding-left: 1px;">
					<input type="text" class="form-control" name="input61" id="input61" maxlength="17"></div>
		    </div>
			<div class="row">
				<div class="col-md-8">
					<h4>ที่อยู่</h4>
					<input type="text" class="form-control" name="input62" id="input62" maxlength="50">
				</div>
              </div>				
		</div>
			<!--ลำดับที่ 1---> 
			<!--ลำดับที่ 2--->
        <div class="div-2">			
			<div class="row">
				<div class="col-sm-2" style="width: 100px;padding-right: 1px;padding-left: 15px;">
					<h4>ลำดับที่ 2</h4> </div>
				<div class="col-sm-1" style="padding-right: 5px;padding-left: 1px;">
					<h4> ชื่อ-นามสกุล</h4></div>
				<div class="col-sm-3">
					<input type="text" class="form-control" name="input63" id="input63" maxlength="38"></div>
				<div class="col-sm-1" style="width: 45px; padding-right: 1px;padding-left: 1px;">
					<h4>อายุ</h4> </div>
				<div class="col-sm-2" style="width: 170px;padding-right: 5px;padding-left: 5px;">
					<input type="text" class="form-control" name="input64" id="input64" maxlength="4"></div>
		    </div>
			<div class="row">
				<div class="col-sm-1" style="width: 70px;padding-right: 1px;padding-left: 15px;">
					<h4>อาชีพ</h4> </div>
				<div class="col-sm-3" style="padding-right: 5px;padding-left: 1px;">
					<input type="text" class="form-control" name="input65" id="input65" maxlength="20"></div>
				<div class="col-sm-1">
					<h4>ตำแหน่ง</h4></div>
				<div class="col-sm-3" style="padding-right: 1px;padding-left: 1px;">
					<input type="text" class="form-control" name="input66" id="input66" maxlength="17"></div>
		    </div>
			<div class="row">
				<div class="col-md-8">
					<h4>ที่อยู่</h4>
					<input type="text" class="form-control" name="input67" id="input67" maxlength="50">
				</div>			
			</div> 
		</div>
		<!--ลำดับที่ 3--->
		<div class="div-3">	
			<div class="row">
				<div class="col-sm-2" style="width: 100px;padding-right: 1px;padding-left: 15px;">
					<h4>ลำดับที่ 3</h4> </div>
				<div class="col-sm-1" style="padding-right: 5px;padding-left: 1px;">
					<h4> ชื่อ-นามสกุล</h4></div>
				<div class="col-sm-3">
					<input type="text" class="form-control" name="input68" id="input68" maxlength="38"></div>
				<div class="col-sm-1" style="width: 45px; padding-right: 1px;padding-left: 1px;">
					<h4>อายุ</h4> </div>
				<div class="col-sm-2" style="width: 170px;padding-right: 5px;padding-left: 5px;">
					<input type="text" class="form-control" name="input69" id="input69" maxlength="4"></div>
		    </div>
			<div class="row">
				<div class="col-sm-1" style="width: 70px;padding-right: 1px;padding-left: 15px;">
					<h4>อาชีพ</h4> </div>
				<div class="col-sm-3" style="padding-right: 5px;padding-left: 1px;">
					<input type="text" class="form-control" name="input70" id="input70" maxlength="20"></div>
				<div class="col-sm-1">
					<h4>ตำแหน่ง</h4></div>
				<div class="col-sm-3" style="padding-right: 1px;padding-left: 1px;">
					<input type="text" class="form-control" name="input71" id="input71" maxlength="17"></div>
		    </div>
			<div class="row">
				<div class="col-md-8">
					<h4>ที่อยู่</h4>
					<input type="text" class="form-control" name="input72" id="input72" maxlength="50">
				</div>			
			</div>
        </div>
		<!--ลำดับที่ 4--->
        <div class="div-4">		
			<div class="row">
				<div class="col-sm-2" style="width: 100px;padding-right: 1px;padding-left: 15px;">
					<h4>ลำดับที่ 4</h4> </div>
				<div class="col-sm-1" style="padding-right: 5px;padding-left: 1px;">
					<h4> ชื่อ-นามสกุล</h4></div>
				<div class="col-sm-3">
					<input type="text" class="form-control" name="input73" id="input73" maxlength="38"></div>
				<div class="col-sm-1" style="width: 45px; padding-right: 1px;padding-left: 1px;">
					<h4>อายุ</h4> </div>
				<div class="col-sm-2" style="width: 170px;padding-right: 5px;padding-left: 5px;">
					<input type="text" class="form-control" name="input74" id="input74" maxlength="4"></div>
		    </div>
			<div class="row">
				<div class="col-sm-1" style="width: 70px;padding-right: 1px;padding-left: 15px;">
					<h4>อาชีพ</h4> </div>
				<div class="col-sm-3" style="padding-right: 5px;padding-left: 1px;">
					<input type="text" class="form-control" name="input75" id="input75" maxlength="20"></div>
				<div class="col-sm-1">
					<h4>ตำแหน่ง</h4></div>
				<div class="col-sm-3" style="padding-right: 1px;padding-left: 1px;">
					<input type="text" class="form-control" name="input76" id="input76" maxlength="17"></div>
		    </div>
			<div class="row">
				<div class="col-md-8">
					<h4>ที่อยู่</h4>
					<input type="text" class="form-control" name="input77" id="input77" maxlength="50">
				</div>			
			</div> 			
			
        </div>			
				
			
			
			
			
			
			
			
			</div>	
				
				
			
				<br>
			<div class="form-group">
              <div class="col-lg-12 col-lg-offset-3">
			  <button class="btn btn-warning back1" type="button"><span class="fa fa-arrow-left"style="padding: 0;width: 20; height: 20;"></span>ย้อนกลับ</button> 
                <button class="btn btn-primary open2" type="button">ไปหน้า 3 <span class="fa fa-arrow-right"style="padding: 0;width: 20; height: 20;"></span></button> 
              </div>
            </div>
			</div>
		</div>
	</div>
			<!-- end-page-2--->
		<!---page-3--->	
	<div id="sf3" class="frm" style="display: none;">
		<div class="resgister-page2/4-sheet3" style="font-size: 17px;">
			     <h4>หน้าที่ 3/4 </h4>
			<div class="container">
				<h4>ประวัติการศึกษา (Education Background)</h4>
				<div class="container">
					<h4>ระดับ ประถม (Primary)</h4>
			<div class="row">
				<div class="col-sm-2" style="width: 110px;padding-right: 1px;padding-left: 15px;">
					<h4>สถานศึกษา </h4> </div>
				<div class="col-sm-2" style="padding-right: 5px;padding-left: 1px;">
					<input type="text" class="form-control" name="input78" id="input78" maxlength="24"></div>
				<div class="col-sm-1" style="width: 65px; padding-right: 1px;padding-left: 1px;">
					<h4>ปีที่เริ่ม</h4> </div>
				<div class="col-sm-2" style="padding-right: 1px;padding-left: 1px;">
					<input type="text" class="form-control" name="input79" id="input79" maxlength="10"></div>
				<div class="col-sm-1" style="width: 50px;padding-right: 1px;padding-left: 1px;">
					<h4>ปีที่จบ</h4> </div>
				<div class="col-sm-2" style="padding-right: 1px;padding-left: 1px;">
					<input type="text" class="form-control" name="input80" id="input80" maxlength="10"></div>
		    </div>
			<h4></h4>
			<div class="row">
				<div class="col-sm-2" style="width: 130px;padding-right: 1px;padding-left: 15px;">
					<h4>วุฒิการศึกษา </h4> </div>
				<div class="col-sm-2" style="padding-right: 5px;padding-left: 1px;">
					<input type="text" class="form-control" name="input81" id="input81" maxlength="24"></div>
				<div class="col-sm-1" style="width: 45px; padding-right: 1px;padding-left: 1px;">
					<h4>วิชา</h4> </div>
				<div class="col-sm-2" style="padding-right: 5px;padding-left: 1px;">
					<input type="text" class="form-control" name="input82" id="input82" maxlength="30"></div>			
			</div>
			<div class="row">
				<div class="col-sm-8">
					<hr style="border: 1px solid #c3c3c3;">
				</div>			
			</div>			
            		<h4>ระดับ มัธยมต้น (Secondary)</h4>
			<div class="row">
				<div class="col-sm-2" style="width: 110px;padding-right: 1px;padding-left: 15px;">
					<h4>สถานศึกษา </h4> </div>
				<div class="col-sm-2" style="padding-right: 5px;padding-left: 1px;">
					<input type="text" class="form-control" name="input83" id="input83" maxlength="24"></div>
				<div class="col-sm-1" style="width: 65px; padding-right: 1px;padding-left: 1px;">
					<h4>ปีที่เริ่ม</h4> </div>
				<div class="col-sm-2" style="padding-right: 1px;padding-left: 1px;">
					<input type="text" class="form-control" name="input84" id="input84" maxlength="10"></div>
				<div class="col-sm-1" style="width: 50px;padding-right: 1px;padding-left: 1px;">
					<h4>ปีที่จบ</h4> </div>
				<div class="col-sm-2" style="padding-right: 1px;padding-left: 1px;">
					<input type="text" class="form-control" name="input85" id="input85" maxlength="10"></div>
		    </div>
			<h4></h4>
			<div class="row">
				<div class="col-sm-2" style="width: 130px;padding-right: 1px;padding-left: 15px;">
					<h4>วุฒิการศึกษา </h4> </div>
				<div class="col-sm-2" style="padding-right: 5px;padding-left: 1px;">
					<input type="text" class="form-control" name="input86" id="input86" maxlength="24"></div>
				<div class="col-sm-1" style="width: 45px; padding-right: 1px;padding-left: 1px;">
					<h4>วิชา</h4> </div>
				<div class="col-sm-2" style="padding-right: 5px;padding-left: 1px;">
					<input type="text" class="form-control" name="input87" id="input87" maxlength="30"></div>			
			</div>				
			<div class="row">
				<div class="col-sm-8">
					<hr style="border: 1px solid #c3c3c3;">
				</div>			
			</div>
            		<h4>ระดับ มัธยมปลาย (High School)</h4>
			<div class="row">
				<div class="col-sm-2" style="width: 110px;padding-right: 1px;padding-left: 15px;">
					<h4>สถานศึกษา </h4> </div>
				<div class="col-sm-2" style="padding-right: 5px;padding-left: 1px;">
					<input type="text" class="form-control" name="input88" id="input88" maxlength="24"></div>
				<div class="col-sm-1" style="width: 65px; padding-right: 1px;padding-left: 1px;">
					<h4>ปีที่เริ่ม</h4> </div>
				<div class="col-sm-2" style="padding-right: 1px;padding-left: 1px;">
					<input type="text" class="form-control" name="input89" id="input89" maxlength="10"></div>
				<div class="col-sm-1" style="width: 50px;padding-right: 1px;padding-left: 1px;">
					<h4>ปีที่จบ</h4> </div>
				<div class="col-sm-2" style="padding-right: 1px;padding-left: 1px;">
					<input type="text" class="form-control" name="input90" id="input90" maxlength="10"></div>
		    </div>
			<h4></h4>
			<div class="row">
				<div class="col-sm-2" style="width: 130px;padding-right: 1px;padding-left: 15px;">
					<h4>วุฒิการศึกษา </h4> </div>
				<div class="col-sm-2" style="padding-right: 5px;padding-left: 1px;">
					<input type="text" class="form-control" name="input91" id="input91" maxlength="24"></div>
				<div class="col-sm-1" style="width: 45px; padding-right: 1px;padding-left: 1px;">
					<h4>วิชา</h4> </div>
				<div class="col-sm-2" style="padding-right: 5px;padding-left: 1px;">
					<input type="text" class="form-control" name="input92" id="input92" maxlength="30"></div>			
			</div>	
			
			<div class="row">
				<div class="col-sm-8">
					<hr style="border: 1px solid #c3c3c3;">
				</div>			
			</div>
			<h4>ระดับ ต่ำกว่าอนุปริญญา (Vocational)</h4>
			<div class="row">
				<div class="col-sm-2" style="width: 110px;padding-right: 1px;padding-left: 15px;">
					<h4>สถานศึกษา </h4> </div>
				<div class="col-sm-2" style="padding-right: 5px;padding-left: 1px;">
					<input type="text" class="form-control" name="input93" id="input93" maxlength="24"></div>
				<div class="col-sm-1" style="width: 65px; padding-right: 1px;padding-left: 1px;">
					<h4>ปีที่เริ่ม</h4> </div>
				<div class="col-sm-2" style="padding-right: 1px;padding-left: 1px;">
					<input type="text" class="form-control" name="input94" id="input94" maxlength="10"></div>
				<div class="col-sm-1" style="width: 50px;padding-right: 1px;padding-left: 1px;">
					<h4>ปีที่จบ</h4> </div>
				<div class="col-sm-2" style="padding-right: 1px;padding-left: 1px;">
					<input type="text" class="form-control" name="input95" id="input95" maxlength="10"></div>
		    </div>
			<h4></h4>
			<div class="row">
				<div class="col-sm-2" style="width: 130px;padding-right: 1px;padding-left: 15px;">
					<h4>วุฒิการศึกษา </h4> </div>
				<div class="col-sm-2" style="padding-right: 5px;padding-left: 1px;">
					<input type="text" class="form-control" name="input96" id="input96" maxlength="24"></div>
				<div class="col-sm-1" style="width: 45px; padding-right: 1px;padding-left: 1px;">
					<h4>วิชา</h4> </div>
				<div class="col-sm-2" style="padding-right: 5px;padding-left: 1px;">
					<input type="text" class="form-control" name="input97" id="input97" maxlength="30"></div>			
			</div>	
			<div class="row">
				<div class="col-sm-8">
					<hr style="border: 1px solid #c3c3c3;">
				</div>			
			</div>
			<h4>ระดับ อนุปริญญา (HighVocational)</h4>
			<div class="row">
				<div class="col-sm-2" style="width: 110px;padding-right: 1px;padding-left: 15px;">
					<h4>สถานศึกษา </h4> </div>
				<div class="col-sm-2" style="padding-right: 5px;padding-left: 1px;">
					<input type="text" class="form-control" name="input98" id="input98" maxlength="24"></div>
				<div class="col-sm-1" style="width: 65px; padding-right: 1px;padding-left: 1px;">
					<h4>ปีที่เริ่ม</h4> </div>
				<div class="col-sm-2" style="padding-right: 1px;padding-left: 1px;">
					<input type="text" class="form-control" name="input99" id="input99" maxlength="10"></div>
				<div class="col-sm-1" style="width: 50px;padding-right: 1px;padding-left: 1px;">
					<h4>ปีที่จบ</h4> </div>
				<div class="col-sm-2" style="padding-right: 1px;padding-left: 1px;">
					<input type="text" class="form-control" name="input100" id="input100" maxlength="10"></div>
		    </div>
			<h4></h4>
			<div class="row">
				<div class="col-sm-2" style="width: 130px;padding-right: 1px;padding-left: 15px;">
					<h4>วุฒิการศึกษา </h4> </div>
				<div class="col-sm-2" style="padding-right: 5px;padding-left: 1px;">
					<input type="text" class="form-control" name="input101" id="input101" maxlength="24"></div>
				<div class="col-sm-1" style="width: 45px; padding-right: 1px;padding-left: 1px;">
					<h4>วิชา</h4> </div>
				<div class="col-sm-2" style="padding-right: 5px;padding-left: 1px;">
					<input type="text" class="form-control" name="input102" id="input102" maxlength="30"></div>			
			</div>				
			<div class="row">
				<div class="col-sm-8">
					<hr style="border: 1px solid #c3c3c3;">
				</div>			
			</div>					
			<h4>ระดับ มหาวิทยาลัย (University)</h4>
			<div class="row">
				<div class="col-sm-2" style="width: 110px;padding-right: 1px;padding-left: 15px;">
					<h4>สถานศึกษา </h4> </div>
				<div class="col-sm-2" style="padding-right: 5px;padding-left: 1px;">
					<input type="text" class="form-control" name="input103" id="input103" maxlength="24"></div>
				<div class="col-sm-1" style="width: 65px; padding-right: 1px;padding-left: 1px;">
					<h4>ปีที่เริ่ม</h4> </div>
				<div class="col-sm-2" style="padding-right: 1px;padding-left: 1px;">
					<input type="text" class="form-control" name="input104" id="input104" maxlength="10"></div>
				<div class="col-sm-1" style="width: 50px;padding-right: 1px;padding-left: 1px;">
					<h4>ปีที่จบ</h4> </div>
				<div class="col-sm-2" style="padding-right: 1px;padding-left: 1px;">
					<input type="text" class="form-control" name="input105" id="input105" maxlength="10"></div>
		    </div>
			<h4></h4>
			<div class="row">
				<div class="col-sm-2" style="width: 130px;padding-right: 1px;padding-left: 15px;">
					<h4>วุฒิการศึกษา </h4> </div>
				<div class="col-sm-2" style="padding-right: 5px;padding-left: 1px;">
					<input type="text" class="form-control" name="input106" id="input106" maxlength="24"></div>
				<div class="col-sm-1" style="width: 45px; padding-right: 1px;padding-left: 1px;">
					<h4>วิชา</h4> </div>
				<div class="col-sm-2" style="padding-right: 5px;padding-left: 1px;">
					<input type="text" class="form-control" name="input107" id="input107" maxlength="30"></div>			
			</div>				
										
				</div>
				 <br>
			<div class="form-group">
              <div class="col-lg-12 col-lg-offset-3">
			  <button class="btn btn-warning back2" type="button"><span class="fa fa-arrow-left"style="padding: 0;width: 20; height: 20;"></span>ย้อนกลับ</button> 
                <button class="btn btn-primary open3" type="button">ไปหน้า 4 <span class="fa fa-arrow-right"style="padding: 0;width: 20; height: 20;"></span></button> 
              </div>
            </div>
			</div>
		</div>
	</div>
		    <!-- end-page-3--->
		<!---page-4--->	
	<div id="sf4" class="frm" style="display: none;">
		<div class="resgister-page2/4-sheet3" style="font-size: 17px;">
			     <h4>หน้าที่ 4/4 </h4>
			<div class="container">
				<h4>จุดมุ่งหมายอาชีพ (Career objectives)</h4>
				<h4>ระบุสายงานและลักษณะงานที่นักศึกษาสนใจ Indicate your objectives, files of interest and job preference</h4>
			<div class="container">	
			<div class="row">
				<div class="col-sm-1" style="width: 40px;padding-right: 1px;padding-left: 15px;">
					<h4>1.</h4> </div>
				<div class="col-sm-7" style="padding-right: 5px;padding-left: 1px;">
					<input type="text" class="form-control" name="input108" id="input108" maxlength="79"></div>		
			</div>
			<div class="row">
				<div class="col-sm-1" style="width: 40px;padding-right: 1px;padding-left: 15px;">
					<h4>2.</h4> </div>
				<div class="col-sm-7" style="padding-right: 5px;padding-left: 1px;">
					<input type="text" class="form-control" name="input109" id="input109" maxlength="79"></div>		
			</div>	
			<div class="row">
				<div class="col-sm-1" style="width: 40px;padding-right: 1px;padding-left: 15px;">
					<h4>3.</h4> </div>
				<div class="col-sm-7" style="padding-right: 5px;padding-left: 1px;">
					<input type="text" class="form-control" name="input110" id="input110" maxlength="79"></div>		
			</div>	
			<div class="row">
				<div class="col-sm-1" style="width: 40px;padding-right: 1px;padding-left: 15px;">
					<h4>4.</h4> </div>
				<div class="col-sm-7" style="padding-right: 5px;padding-left: 1px;">
					<input type="text" class="form-control" name="input111" id="input111" maxlength="79"></div>		
			</div>				
			</div>
			<div class="row">
				<div class="col-sm-8">
					<hr style="border: 1px solid #c3c3c3;">
				</div>			
			</div>
			<h4>กิจกรรมนอกหลักสูตร (Student activities)</h4>
		<div class="container">
						
			<div class="container">		
			<div class="row">
				<div class="col-sm-2" style="width: 155px; padding-right: 1px;padding-left: 1px;">
					<h4>1.ตำแหน่งและหน้าที่</h4></div>
				<div class="col-sm-4" style="padding-right: 5px;padding-left: 1px;">
					<input type="text" class="form-control" name="input112" id="input112" maxlength="30"></div>
			</div>		
			<div class="row">
				<div class="col-sm-2" style="width: 100px;padding-right: 1px;padding-left: 15px;">
					<h4>ระยะเวลา</h4> </div>
				<div class="col-sm-3" style="padding-right: 5px;padding-left: 1px;">
					<input type="text" class="form-control" name="input113" id="input113" maxlength="40"></div>	
			</div>		
			<div class="row">
				<div class="col-sm-2" style="width: 155px; padding-right: 1px;padding-left: 1px;">
					<h4>2.ตำแหน่งและหน้าที่</h4></div>
				<div class="col-sm-4" style="padding-right: 5px;padding-left: 1px;">
					<input type="text" class="form-control" name="input114" id="input114" maxlength="30"></div>
			</div>		
			<div class="row">
				<div class="col-sm-2" style="width: 100px;padding-right: 1px;padding-left: 15px;">
					<h4>ระยะเวลา</h4> </div>
				<div class="col-sm-3" style="padding-right: 5px;padding-left: 1px;">
					<input type="text" class="form-control" name="input115" id="input115" maxlength="40"></div>	
			</div>	
			<div class="row">
				<div class="col-sm-2" style="width: 155px; padding-right: 1px;padding-left: 1px;">
					<h4>3.ตำแหน่งและหน้าที่</h4></div>
				<div class="col-sm-4" style="padding-right: 5px;padding-left: 1px;">
					<input type="text" class="form-control" name="input116" id="input116" maxlength="30"></div>
			</div>		
			<div class="row">
				<div class="col-sm-2" style="width: 100px;padding-right: 1px;padding-left: 15px;">
					<h4>ระยะเวลา</h4> </div>
				<div class="col-sm-3" style="padding-right: 5px;padding-left: 1px;">
					<input type="text" class="form-control" name="input117" id="input117" maxlength="40"></div>	
			</div>	
			<div class="row">
				<div class="col-sm-2" style="width: 155px; padding-right: 1px;padding-left: 1px;">
					<h4>4.ตำแหน่งและหน้าที่</h4></div>
				<div class="col-sm-4" style="padding-right: 5px;padding-left: 1px;">
					<input type="text" class="form-control" name="input118" id="input118" maxlength="30"></div>
			</div>		
			<div class="row">
				<div class="col-sm-2" style="width: 100px;padding-right: 1px;padding-left: 15px;">
					<h4>ระยะเวลา</h4> </div>
				<div class="col-sm-3" style="padding-right: 5px;padding-left: 1px;">
					<input type="text" class="form-control" name="input119" id="input119 " maxlength="40"></div>	
			</div>
				
			</div>	
		</div>	
			<div class="row">
				<div class="col-sm-8">
					<hr style="border: 1px solid #c3c3c3;">
				</div>			
			</div>
		<h4>ความสามารถทางภาษา Language Ability</h4>
		<div class="container">	
		<h4>ภาษาอังกฤษ (English)</h4>
		  <div class="container">	
			<div class="row">
				<div class="col-sm-2" style="width: 140px;padding-right: 1px;padding-left: 15px;">
					<h4>ฟัง/Listen</h4> </div>
				<div class="col-sm-2" style="width: 130px; padding-right: 5px;padding-left: 1px;">
					<h4>กรุณาเลือกระดับ</h4></div>
				<div class="col-sm-2" style="padding-right: 5px;padding-left: 1px;">
						  <select class="form-control" id="select_opt2" name="select_opteng1" >
						  <option value="ดี">ดี</option>
						  <option value="พอใช้">พอใช้</option>
						  <option value="แย่">แย่</option>			              
					    </select>
                </div>	
			</div>
		  </div>
		  <div class="container">	
			<div class="row">
				<div class="col-sm-2" style="width: 140px;padding-right: 1px;padding-left: 15px;">
					<h4>พูด/Speaking</h4> </div>
				<div class="col-sm-2" style="width: 130px; padding-right: 5px;padding-left: 1px;">
					<h4>กรุณาเลือกระดับ</h4></div>
				<div class="col-sm-2" style="padding-right: 5px;padding-left: 1px;">
						  <select class="form-control" id="select_opteng2" name="select_opteng2" >
						  <option value="ดี">ดี</option>
						  <option value="พอใช้">พอใช้</option>
						  <option value="แย่">แย่</option>			              
					    </select>
                </div>	
			</div>
		  </div>
		  <div class="container">	
			<div class="row">
				<div class="col-sm-2" style="width: 140px;padding-right: 1px;padding-left: 15px;">
					<h4>เขียน/Writting</h4> </div>
				<div class="col-sm-2" style="width: 130px; padding-right: 5px;padding-left: 1px;">
					<h4>กรุณาเลือกระดับ</h4></div>
				<div class="col-sm-2" style="padding-right: 5px;padding-left: 1px;">
						  <select class="form-control" id="select_opteng3" name="select_opteng3" >
						  <option value="ดี">ดี</option>
						  <option value="พอใช้">พอใช้</option>
						  <option value="แย่">แย่</option>			              
					    </select>
                </div>	
			</div>
		  </div>
		</div>

		
		
		<div class="container">	
		<h4>ภาษาจีน (Chinese)</h4>
		  <div class="container">	
			<div class="row">
				<div class="col-sm-2" style="width: 140px;padding-right: 1px;padding-left: 15px;">
					<h4>ฟัง/Listen</h4> </div>
				<div class="col-sm-2" style="width: 130px; padding-right: 5px;padding-left: 1px;">
					<h4>กรุณาเลือกระดับ</h4></div>
				<div class="col-sm-2" style="padding-right: 5px;padding-left: 1px;">
						  <select class="form-control" id="select_optchina1" name="select_optchina1" >
						  <option value="ดี">ดี</option>
						  <option value="พอใช้">พอใช้</option>
						  <option value="แย่">แย่</option>			              
					    </select>
                </div>	
			</div>
		  </div>
		  <div class="container">	
			<div class="row">
				<div class="col-sm-2" style="width: 140px;padding-right: 1px;padding-left: 15px;">
					<h4>พูด/Speaking</h4> </div>
				<div class="col-sm-2" style="width: 130px; padding-right: 5px;padding-left: 1px;">
					<h4>กรุณาเลือกระดับ</h4></div>
				<div class="col-sm-2" style="padding-right: 5px;padding-left: 1px;">
						  <select class="form-control" id="select_optchina2" name="select_optchina2" >
						  <option value="ดี">ดี</option>
						  <option value="พอใช้">พอใช้</option>
						  <option value="แย่">แย่</option>			              
					    </select>
                </div>	
			</div>
		  </div>
		  <div class="container">	
			<div class="row">
				<div class="col-sm-2" style="width: 140px;padding-right: 1px;padding-left: 15px;">
					<h4>เขียน/Writting</h4> </div>
				<div class="col-sm-2" style="width: 130px; padding-right: 5px;padding-left: 1px;">
					<h4>กรุณาเลือกระดับ</h4></div>
				<div class="col-sm-2" style="padding-right: 5px;padding-left: 1px;">
						  <select class="form-control" id="select_optchina3" name="select_optchina3" >
						  <option value="ดี">ดี</option>
						  <option value="พอใช้">พอใช้</option>
						  <option value="แย่">แย่</option>			              
					    </select>
                </div>	
			</div>
		  </div>
		</div>
		
		<div class="container">	
			<div class="row">
			  <div class="col-sm-3" style="width: 190px;padding-right: 1px;padding-left: 15px;">
		          <h4>ภาษาอื่นๆ (Other) ระบุ</h4></div>	
			  <div class="col-sm-3" style="width: 210px;padding-right: 1px;padding-left: 15px;">
			      <input type="text" class="form-control" name="inputother" id="input1" maxlength="25" placeholder="ไม่มีไม่ต้องใส่"></div>
		    </div>	
		  <div class="container">	
			<div class="row">
				<div class="col-sm-2" style="width: 140px;padding-right: 1px;padding-left: 15px;">
					<h4>ฟัง/Listen</h4> </div>
				<div class="col-sm-2" style="width: 130px; padding-right: 5px;padding-left: 1px;">
					<h4>กรุณาเลือกระดับ</h4></div>
				<div class="col-sm-2" style="padding-right: 5px;padding-left: 1px;">
						  <select class="form-control" id="select_optother1" name="select_optother1" >
						  <option value="ดี">ดี</option>
						  <option value="พอใช้">พอใช้</option>
						  <option value="แย่">แย่</option>			              
					    </select>
                </div>	
			</div>
		  </div>
		  <div class="container">	
			<div class="row">
				<div class="col-sm-2" style="width: 140px;padding-right: 1px;padding-left: 15px;">
					<h4>พูด/Speaking</h4> </div>
				<div class="col-sm-2" style="width: 130px; padding-right: 5px;padding-left: 1px;">
					<h4>กรุณาเลือกระดับ</h4></div>
				<div class="col-sm-2" style="padding-right: 5px;padding-left: 1px;">
						  <select class="form-control" id="select_optother2" name="select_optother2" >
						  <option value="ดี">ดี</option>
						  <option value="พอใช้">พอใช้</option>
						  <option value="แย่">แย่</option>			              
					    </select>
                </div>	
			</div>
		  </div>
		  <div class="container">	
			<div class="row">
				<div class="col-sm-2" style="width: 140px;padding-right: 1px;padding-left: 15px;">
					<h4>เขียน/Writting</h4> </div>
				<div class="col-sm-2" style="width: 130px; padding-right: 5px;padding-left: 1px;">
					<h4>กรุณาเลือกระดับ</h4></div>
				<div class="col-sm-2" style="padding-right: 5px;padding-left: 1px;">
						  <select class="form-control" id="select_optother3" name="select_optother3" >
						  <option value="ดี">ดี</option>
						  <option value="พอใช้">พอใช้</option>
						  <option value="แย่">แย่</option>			              
					    </select>
                </div>	
			</div>
		  </div>
		</div>
			<br>
			<div class="form-group">
              <div class="col-lg-12 col-lg-offset-3">
				<button class="btn btn-warning back3" type="button"><span class="fa fa-arrow-left" style="padding: 0;width: 20; height: 20;"></span>ย้อนกลับ</button> 
                <button class="btn btn-primary" type="submit">กรอกข้อมูลเสร็จสิ้น</button> 
              </div>
            </div>
			</div>
		</div>
	</div>
		    <!-- end-page-4--->				
			    
				 
				 
				 
				 
				 
				 
	</form>	
            </div>
			</div>
            <!-- /.col-md-4 -->
            <div class="col-md-3">
                
				
            </div>
            <!-- /.col-md-4 -->
        </div>
        <!-- /.row -->
	  </div>
    </div>
        <!-- Footer -->
			<?php  
  require('/footer.php');
    
  ?>

    </div>
    <!-- /.container -->
 
    <!-- jQuery -->
	
    <script src="js/jquery.js"></script>
    <script type="text/javascript" src="NotificationAjax.js"></script> 
    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
    <script>
	$(".open1").click(function() {
     
        $(".frm").hide("fast");
        $("#sf2").show("slow");
    
    });

    $(".open2").click(function() {
      
        $(".frm").hide("fast");
        $("#sf3").show("slow");
      
    });
    $(".open3").click(function() {
      
        $(".frm").hide("fast");
        $("#sf4").show("slow");
      
    }); 
	$(".back1").click(function() {
      $(".frm").hide("fast");
      $("#sf1").show("slow");
    });
	$(".back2").click(function() {
      $(".frm").hide("fast");
      $("#sf2").show("slow");
    });

    $(".back3").click(function() {
      $(".frm").hide("fast");
      $("#sf3").show("slow");
    });
	
	$('#select_opt1').on('change', function () {
    if(this.value == "1"){
        $('.div-1').show();
		$('.div-2').hide();
		$('.div-3').hide();
		$('.div-4').hide();
    } else if (this.value == "2") {
		$('.div-1').show();
        $('.div-2').show();
		$('.div-3').hide();
		$('.div-4').hide();
    } else if (this.value == "3") {
		$('.div-1').show();
        $('.div-2').show();
		$('.div-3').show();
		$('.div-4').hide();
    } else if (this.value == "4"){
		$('.div-1').show();
        $('.div-2').show();
		$('.div-3').show();
		$('.div-4').show();
	} else{
		$('.div-1').hide();
        $('.div-2').hide();
		$('.div-3').hide();
		$('.div-4').hide();
		
		
	}
	});
		$('.div-1').hide();
        $('.div-2').hide();
		$('.div-3').hide();
		$('.div-4').hide();


</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></style>
</body>


</html>