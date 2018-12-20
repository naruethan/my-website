<?php

session_start();
error_reporting(-1);
require('/header.php');

require('/confic/conn.php');
if(!isset($_SESSION["username"]))   {
	
	header("location: index.php");
	}





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
        <div class="row"><!-- Content Row -->
            <div class="col-md-9">
			  <div class="single-post-breadcrumb">
				<ol class="breadcrumb">
					<li><a href="http://localhost/theam2+admin/home.php">Home</a></li>
					<li class="active">สมัครเข้าร่วมโครงการสหกิจ</li>				
					<li class="active">เอกสารที่ 3</li>
				</ol>
					<div class="page-header">
						<h3>แบบแจ้งรายละเอียดการเข้าร่วมโครงการสหกิจศึกษา (เอกสารที่ 1) </h3>      
					</div>
			  </div>
			
			
	<div class="col-md-12" style="background-color: rgba(245, 245, 245, 0.95);">
	<form name="basicform" id="basicform" method="post" action="output/pdf.php">
		<div id="sf1" class="frm">
			<div class="resgister-page1/4-sheet3" style="font-size: 17px;">
			     <h4>หน้าที่ 1/2 ส่วนที่ 1 ข้อมูลนักศึกษา</h4>
			<div class="container">
				 <h4>1. ชื่อ-นามสกุล  นาย/นางสาว</h4>
			<div class="row"> 	 
				 <div class="col-md-8">
					<input type="text" class="form-control" name="input1" id="input1" maxlength="32">
				 </div>
			</div>
			<div class="row"> 
				<div class="col-md-8">
				  <h4>ชื่อ-นามสกุล (ภาษาอังกฤษ) Mr./Miss</h4>
				  <input type="text" placeholder="เขียนตัวพิมพ์ใหญ่" class="form-control" name="input2" id="input2" maxlength="34">
				</div>		
			</div>
			<div class="row"> 
				<div class="col-md-4">
				  <h4>รหัสประจำตัวนักศิกษา</h4>
				  <input type="text" class="form-control" name="input3" id="input3" maxlength="13">
				</div>			
				<div class="col-md-4">
						<h4>นักศึกษาชั้นปีที่</h4>
						<input type="text" class="form-control" name="input4" id="input4" maxlength="1">
				</div>
			</div>
			<div class="row"> 
				<div class="col-md-4">
				    <h4>หลักสูตร</h4>
				    <div class="col-sm-3" style="width: 200px; padding-left: 0px;">
					  <select class="form-control" id="select_opt91" name="select_opt91" >		   	
						<option value="ปริญญาตรี">ปริญญาตรี</option>
						<option value="เทียบโอน">ปริญญาตรี เทียบโอน</option>
						<option value="ป.ว.ส.">ป.ว.ส.</option>
					  </select>
				    </div>	
				</div>			
				<div class="col-md-4">
					<h4>สาขาวิชา</h4>
					<input type="text" class="form-control" name="input5" id="input5" maxlength="19" value="วิศวกรรมคอมพิวเตอร์">
				</div>
			 </div>
			 <div class="row"> 
				<div class="col-md-4">
				    <h4>สาขา</h4>
				    <input type="text" class="form-control"  name="input6" id="input6" maxlength="13" value="วิศวกรรมไฟฟ้า">
				</div>			
				<div class="col-md-4">
					<h4>คณะ</h4>
					<input type="text" class="form-control"  name="input7" id="input7" maxlength="15" value="วิศวกรรมศาสตร์">
				</div>
			 </div>		
			 <h4></h4>
			<div class="row">
				<div class="col-sm-3" style="width: 252px;padding-right: 1px;padding-left: 15px;">
					<h4>จำนวนหน่วยกิตที่สอบได้ปัจจุบัน</h4> </div>
				<div class="col-sm-1" style="width: 130px;padding-right: 1px;padding-left: 5px;">
					<input type="text" class="form-control"  name="input8" id="input8" maxlength="4"></div>
				<div class="col-sm-2" style="width: 265px;padding-right: 1px;padding-left: 5px;">
					<h4>หน่วยกิต     ระดับคะแนนเฉลี่ยสะสม</h4></div>
				<div class="col-sm-1" style="width: 120px;padding-right: 1px;padding-left: 1px;">
					<input type="text" class="form-control" name="input9" id="input9" maxlength="4"></div>
			</div>			
			<h4>ภาคการศึกษาที่คาดว่าจะไปปฏิบัติงานสหกิจศึกษา </h4>
			<div class="row">
				<div class="col-sm-2"style="width:150px;padding-right: 1px;">
					<h4>ภาคการศึกษาที่</h4> </div>
				<div class="col-sm-2" >
					<input type="text" class="form-control" name="input10" id="input10" maxlength="4"></div>
				<div class="col-sm-2"style="width:120px;padding-right: 1px;">
					<h4>ปีการศึกษา</h4> </div>
				<div class="col-sm-2" style="width: 235px;">
					<input type="text" class="form-control" name="input11" id="input11" maxlength="4"></div>			
			</div>
			<div class="row">
				<div class="col-md-8">
					<hr style="border: 1px solid #c3c3c3;">
				</div>			
			</div>
			<h4></h4>
			<div class="row">
				<div class="col-sm-2" style="width: 120px;padding-right: 1px;padding-left: 15px;">
					<h4>ที่อยู่ เลขที่</h4> </div>
				<div class="col-sm-1" style="width: 90px;padding-right: 5px;padding-left: 5px;">
					<input type="text" class="form-control"  name="input12" id="input12" maxlength="7"></div>
				<div class="col-sm-1" style="width: 45px;padding-right: 1px;padding-left: 2px;">
					<h4>ถนน</h4></div>
				<div class="col-sm-2" style="width: 200px;padding-right: 5px;padding-left: 5px;">
					<input type="text" placeholder="ไม่มีไม่ต้องใส่" class="form-control"  name="input13" id="input13" maxlength="15"></div>
			    <div class="col-sm-1" style="width: 45px;padding-right: 5px;padding-left: 5px;">
					<h4>ตำบล</h4></div>
				<div class="col-sm-2" style="width: 210px;padding-right: 5px;padding-left: 9px;">
					<input type="text" class="form-control"   name="input14" id="input14" maxlength="14"></div>
			
			</div>
			<h4></h4>
			<div class="row">				
				<div class="col-sm-1" style="width: 65px;padding-right: 1px;padding-left: 15px;">
					<h4>อำเภอ</h4></div>
				<div class="col-sm-2" style="width: 200px;padding-right: 5px;padding-left: 5px;">
					<input type="text" class="form-control"  name="input15" id="input15" maxlength="18"></div>
			    <div class="col-sm-1" style="width: 55px;padding-right: 5px;padding-left: 5px;">
					<h4>จังหวัด</h4></div>
				<div class="col-sm-2" style="width: 210px;padding-right: 5px;padding-left: 9px;">
					<input type="text" class="form-control"  name="input16" id="input16" maxlength="15"></div>
				<div class="col-sm-2" style="width: 120px;padding-right: 1px;padding-left: 15px;">
					<h4>รหัสไปรษณีย์</h4></div>
				<div class="col-sm-2" style="width: 120px;padding-right: 5px;padding-left: 5px;">
					<input type="text" class="form-control"  name="input17" id="input17" maxlength="5"></div>		
			</div>	
			<h4></h4>
			<div class="row">				
				<div class="col-sm-1" style="width: 90px;padding-right: 1px;padding-left: 15px;">
					<h4>โทรศัพท์</h4></div>
				<div class="col-sm-3" style="width: 175px;padding-right: 5px;padding-left: 5px;">
					<input type="text" class="form-control"  name="input18" id="input18" maxlength="12"></div>
			    <div class="col-sm-1" style="width: 65px;padding-right: 5px;padding-left: 5px;">
					<h4>E-mail</h4></div>
				<div class="col-sm-5" style="width: 440px; padding-right: 5px;padding-left: 9px;">
					<input type="text" class="form-control"  name="input19" id="input19" maxlength="28"></div>		
			</div>			
			<div class="row">
				<div class="col-md-8">
					<hr style="border: 1px solid #c3c3c3;">
				</div>			
			</div>
			<h4>3. ที่พักในภาคการศึกษานี้ (สำหรับกรณีเร่งด่วน)</h4>
			<div class="row">
				<div class="col-sm-2" style="width: 120px;padding-right: 1px;padding-left: 15px;">
					<h4>ที่อยู่ เลขที่</h4> </div>
				<div class="col-sm-1" style="width: 90px;padding-right: 5px;padding-left: 5px;">
					<input type="text" class="form-control"  name="input20"id="input20" maxlength="7"></div>
				<div class="col-sm-1" style="width: 45px;padding-right: 1px;padding-left: 2px;">
					<h4>ถนน</h4></div>
				<div class="col-sm-2" style="width: 200px;padding-right: 5px;padding-left: 5px;">
					<input type="text" placeholder="ไม่มีไม่ต้องใส่" class="form-control"  name="input21"id="input21" maxlength="15"></div>
			    <div class="col-sm-1" style="width: 45px;padding-right: 5px;padding-left: 5px;">
					<h4>ตำบล</h4></div>
				<div class="col-sm-2" style="width: 210px;padding-right: 5px;padding-left: 9px;">
					<input type="text" class="form-control" name="input22" id="input22" maxlength="14"></div>
			
			</div>
			<h4></h4>
			<div class="row">				
				<div class="col-sm-1" style="width: 65px;padding-right: 1px;padding-left: 15px;">
					<h4>อำเภอ</h4></div>
				<div class="col-sm-2" style="width: 200px;padding-right: 5px;padding-left: 5px;">
					<input type="text" class="form-control"  name="input23" id="input23" maxlength="18"></div>
			    <div class="col-sm-1" style="width: 55px;padding-right: 5px;padding-left: 5px;">
					<h4>จังหวัด</h4></div>
				<div class="col-sm-2" style="width: 210px;padding-right: 5px;padding-left: 9px;">
					<input type="text" class="form-control"  name="input24" id="input24" maxlength="15"></div>
				<div class="col-sm-2" style="width: 120px;padding-right: 1px;padding-left: 15px;">
					<h4>รหัสไปรษณีย์</h4></div>
				<div class="col-sm-2" style="width: 120px;padding-right: 5px;padding-left: 5px;">
					<input type="text" class="form-control"  name="input25" id="input25" maxlength="5"></div>		
			</div>	
			<h4></h4>
			<div class="row">				
				<div class="col-sm-1" style="width: 90px;padding-right: 1px;padding-left: 15px;">
					<h4>โทรศัพท์</h4></div>
				<div class="col-sm-3" style="width: 175px;padding-right: 5px;padding-left: 5px;">
					<input type="text" class="form-control"  name="input26" id="input26" maxlength="12"></div>
			    <div class="col-sm-1" style="width: 65px;padding-right: 5px;padding-left: 5px;">
					<h4>E-mail</h4></div>
				<div class="col-sm-5" style="width: 440px; padding-right: 5px;padding-left: 9px;">
					<input type="text" class="form-control"  name="input27" id="input27" maxlength="28"></div>		
			</div>	
			<div class="row">
				<div class="col-md-8">
					<hr style="border: 1px solid #c3c3c3;">
				</div>			
			</div>		
			<h4>4. ผู้ปกครองนักศึกษาหรือผู้ที่สามารถติดต่อได้ (กรณีที่ปิดภาคการศึกษา)</h4>
            <h4>ชื่อ-นามสกุล นาย/นางสาว</h4>
			<div class="row"> 	 
				 <div class="col-md-8">
					<input type="text" class="form-control" name="input28" id="input28" maxlength="60">
				 </div>
			</div>
			<h4></h4>
			<div class="row">
				<div class="col-sm-2" style="width: 110px;padding-right: 1px;padding-left: 15px;">
					<h4>ที่อยู่ เลขที่</h4> </div>
				<div class="col-sm-1" style="width: 90px;padding-right: 5px;padding-left: 5px;">
					<input type="text" class="form-control" name="input29" id="input29" maxlength="7"></div>
				<div class="col-sm-1" style="width: 45px;padding-right: 1px;padding-left: 2px;">
					<h4>ถนน</h4></div>
				<div class="col-sm-2" style="width: 200px;padding-right: 5px;padding-left: 5px;">
					<input type="text" placeholder="ไม่มีไม่ต้องใส่" class="form-control"  name="input30" id="input30" maxlength="15"></div>
			    <div class="col-sm-1" style="width: 45px;padding-right: 5px;padding-left: 5px;">
					<h4>ตำบล</h4></div>
				<div class="col-sm-2" style="width: 210px;padding-right: 5px;padding-left: 9px;">
					<input type="text" class="form-control"  name="input31" id="input31" maxlength="14"></div>
			
			</div>
			<h4></h4>
			<div class="row">				
				<div class="col-sm-1" style="width: 65px;padding-right: 1px;padding-left: 15px;">
					<h4>อำเภอ</h4></div>
				<div class="col-sm-2" style="width: 200px;padding-right: 5px;padding-left: 5px;">
					<input type="text" class="form-control" name="input32" id="input32" maxlength="18"></div>
			    <div class="col-sm-1" style="width: 55px;padding-right: 5px;padding-left: 5px;">
					<h4>จังหวัด</h4></div>
				<div class="col-sm-2" style="width: 210px;padding-right: 5px;padding-left: 9px;">
					<input type="text" class="form-control" name="input33" id="input33" maxlength="15"></div>
				<div class="col-sm-2" style="width: 120px;padding-right: 1px;padding-left: 15px;">
					<h4>รหัสไปรษณีย์</h4></div>
				<div class="col-sm-2" style="width: 120px;padding-right: 5px;padding-left: 5px;">
					<input type="text" class="form-control" name="input34" id="input34" maxlength="5"></div>		
			</div>	
			<h4></h4>
			<div class="row">				
				<div class="col-sm-1" style="width: 90px;padding-right: 1px;padding-left: 15px;">
					<h4>โทรศัพท์</h4></div>
				<div class="col-sm-3" style="width: 175px;padding-right: 5px;padding-left: 5px;">
					<input type="text" class="form-control" name="input35" id="input35" maxlength="12"></div>
			    <div class="col-sm-1" style="width: 65px;padding-right: 5px;padding-left: 5px;">
					<h4>E-mail</h4></div>
				<div class="col-sm-5" style="width: 440px; padding-right: 5px;padding-left: 9px;">
					<input type="text" class="form-control" name="input36" id="input36" maxlength="28"></div>		
			</div>			
			<div class="row">
				<div class="col-md-8">
					<hr style="border: 1px solid #c3c3c3;">
				</div>			
			</div>
			<div class="row"> 
				<div class="col-md-8">
				    <h4>5. ความสามารถพิเศษหรือกิจกรรมที่นักศึกษาถนัด</h4>
				    <input type="text" class="form-control"  name="input37" id="input37" maxlength="80">
				</div>			
			 </div>	
			<div class="row">
				<div class="col-md-8">
					<hr style="border: 1px solid #c3c3c3;">
				</div>			
			</div>			 
			<br>
			<div class="form-group">			
              <div class="col-md-12 col-md-offset-4">
                <button class="btn btn-primary open1" type="button" >ไปหน้า 2 <span class="fa fa-arrow-right"style="padding: 0;width: 20; height: 20;"></span></button> 
				
              </div>
            </div>
			
			
			</div>
			 <!-- end-page-1--->
		</div>
	</div>
		<!---page-2--->		
	<div id="sf2" class="frm" style="display: none;">
		<div class="resgister-page2/4-sheet3" style="font-size: 17px;">
			     <h4>หน้าที่ 1/2 ส่วนที่ 1 ข้อมูลนักศึกษา (ต่อ)</h4>
			<div class="container">	
<!--6. ความสามารถทางด้านคอมพิวเตอร์ (โปรดระบุ ดีมาก/ดี/ปานกลาง/พอใช้/หรือ ได้เล็กน้อย) --->			
			<h4>6. ความสามารถทางด้านคอมพิวเตอร์ (โปรดระบุ ดีมาก/ดี/ปานกลาง/พอใช้/หรือ ได้เล็กน้อย)</h4>	
			<div class="container">	
			<h4></h4>
			<div class="row">
				<div class="col-sm-2" style="width: 35px;padding-right: 5px;padding-left: 15px;">
					<input  id="myCheck" name="op1[]" type="checkbox" value="Excel" class="form-control"></div>
				<div class="col-sm-3" style="padding-right: 15px;padding-left: 15px;">
					<h4>Microsoft office Excel </h4></div>
				<div class="col-sm-2" style="width: 125px; padding-right: 1px;padding-left: 1px;">
					<h4>กรุณาเลือกระดับ</h4> </div>
				<div class="col-sm-3" style="width: 200px;">
					<select class="form-control" id="select_opt61" name="select_opt61" >		   	
						<option value="ดีมาก">ดีมาก</option>
						<option value="ดี">ดี</option>
						<option value="พอใช้">พอใช้</option>
						<option value="แย่">แย่</option>
						<option selected="selected" value=""></option>
					</select>
				</div>				
			</div>
			<h4></h4>
			<div class="row">
				<div class="col-sm-2" style="width: 35px;padding-right: 5px;padding-left: 15px;">
					<input  id="myCheck" name="op1[]" type="checkbox" value="word" class="form-control"></div>
				<div class="col-sm-3" style="padding-right: 15px;padding-left: 15px;">
					<h4>Microsoft office Word</h4></div>
				<div class="col-sm-2" style="width: 125px; padding-right: 1px;padding-left: 1px;">
					<h4>กรุณาเลือกระดับ</h4> </div>
				<div class="col-sm-3" style="width: 200px;">
					<select class="form-control" id="select_opt62" name="select_opt62" >		   	
						<option value="ดีมาก">ดีมาก</option>
						<option value="ดี">ดี</option>
						<option value="พอใช้">พอใช้</option>
						<option value="แย่">แย่</option>
						<option selected="selected" value=""></option>
					</select>
				</div>				
			</div>
			<h4></h4>
			<div class="row">
				<div class="col-sm-2" style="width: 35px;padding-right: 5px;padding-left: 15px;">
					<input  id="myCheck" name="op1[]" type="checkbox" value="PPT" class="form-control"></div>
				<div class="col-sm-3" style="padding-right: 15px;padding-left: 15px;">
					<h4>Microsoft PPT </h4></div>
				<div class="col-sm-2" style="width: 125px; padding-right: 1px;padding-left: 1px;">
					<h4>กรุณาเลือกระดับ</h4> </div>
				<div class="col-sm-3" style="width: 200px;">
					<select class="form-control" id="select_opt63" name="select_opt63" >		   	
						<option value="ดีมาก">ดีมาก</option>
						<option value="ดี">ดี</option>
						<option value="พอใช้">พอใช้</option>
						<option value="แย่">แย่</option>
						<option selected="selected" value=""></option>
					</select>
				</div>				
			</div>
			<h4></h4>
			<div class="row">
				<div class="col-sm-2" style="width: 35px;padding-right: 5px;padding-left: 15px;">
					<input  id="myCheck" name="op1[]" type="checkbox" value="other" class="form-control"></div>
				<div class="col-sm-1" style="width: 45px;padding-right: 5px;padding-left: 5px;">
					<h4>อื่นๆ</h4></div>
				<div class="col-sm-2" style="width: 230px;padding-right: 1px;padding-left: 1px;">
					<input type="text" class="form-control" name="input38" id="input38" maxlength="19"></div>
				<div class="col-sm-2" style="width: 145px; padding-right: 1px;padding-left: 15px;">
					<h4>กรุณาเลือกระดับ</h4> </div>
				<div class="col-sm-3" style="width: 200px;">
					<select class="form-control" id="select_opt64" name="select_opt64" >		   	
						<option value="ดีมาก">ดีมาก</option>
						<option value="ดี">ดี</option>
						<option value="พอใช้">พอใช้</option>
						<option value="แย่">แย่</option>
						<option selected="selected" value=""></option>
					</select>
				</div>				
			</div>
		</div>
			<div class="row">
				<div class="col-md-8">
					<hr style="border: 1px solid #c3c3c3;">
				</div>			
			</div>
	<!--7. ความสามารถทางภาษา (โปรดระบุ ดีมาก/ดี/ปานกลาง/พอใช้/หรือ ได้เล็กน้อย)--->	
			<h4>7. ความสามารถทางภาษา (โปรดระบุ ดีมาก/ดี/ปานกลาง/พอใช้/หรือ ได้เล็กน้อย)</h4>	
			<div class="container">	
			<h4></h4>
			<div class="row">
				<div class="col-sm-2" style="width: 35px;padding-right: 5px;padding-left: 15px;">
					<input  id="myCheck" name="op2[]" type="checkbox" value="Eng" class="form-control"></div>
				<div class="col-sm-3" style="padding-right: 15px;padding-left: 15px;">
					<h4>ภาษาอังกฤษ </h4></div>
				<div class="col-sm-2" style="width: 125px; padding-right: 1px;padding-left: 1px;">
					<h4>กรุณาเลือกระดับ</h4> </div>
				<div class="col-sm-3" style="width: 200px;">
					<select class="form-control" id="select_opt" name="select_opt71" >		   	
						<option value="ดีมาก">ดีมาก</option>
						<option value="ดี">ดี</option>
						<option value="พอใช้">พอใช้</option>
						<option value="แย่">แย่</option>
						<option selected="selected" value=""></option>
					</select>
				</div>				
			</div>
			<h4></h4>
			<div class="row">
				<div class="col-sm-2" style="width: 35px;padding-right: 5px;padding-left: 15px;">
					<input  id="myCheck" name="op2[]" type="checkbox" value="Japan" class="form-control"></div>
				<div class="col-sm-3" style="padding-right: 15px;padding-left: 15px;">
					<h4>ภาษาญี่ปุ่น</h4></div>
				<div class="col-sm-2" style="width: 125px; padding-right: 1px;padding-left: 1px;">
					<h4>กรุณาเลือกระดับ</h4> </div>
				<div class="col-sm-3" style="width: 200px;">
					<select class="form-control" id="select_opt" name="select_opt72" >		   	
						<option value="ดีมาก">ดีมาก</option>
						<option value="ดี">ดี</option>
						<option value="พอใช้">พอใช้</option>
						<option value="แย่">แย่</option>
						<option selected="selected" value=""></option>
					</select>
				</div>				
			</div>
			<h4></h4>
			<div class="row">
				<div class="col-sm-2" style="width: 35px;padding-right: 5px;padding-left: 15px;">
					<input  id="myCheck" name="op2[]" type="checkbox" value="china" class="form-control"></div>
				<div class="col-sm-3" style="padding-right: 15px;padding-left: 15px;">
					<h4>ภาษาจีน</h4></div>
				<div class="col-sm-2" style="width: 125px; padding-right: 1px;padding-left: 1px;">
					<h4>กรุณาเลือกระดับ</h4> </div>
				<div class="col-sm-3" style="width: 200px;">
					<select class="form-control" id="select_opt" name="select_opt73" >		   	
						<option value="ดีมาก">ดีมาก</option>
						<option value="ดี">ดี</option>
						<option value="พอใช้">พอใช้</option>
						<option value="แย่">แย่</option>
						<option selected="selected" value=""></option>
					</select>
				</div>				
			</div>
			<h4></h4>
			<div class="row">
				<div class="col-sm-2" style="width: 35px;padding-right: 5px;padding-left: 15px;">
					<input  id="myCheck" name="op2[]" type="checkbox" value="other7" class="form-control"></div>
				<div class="col-sm-1" style="width: 45px;padding-right: 5px;padding-left: 5px;">
					<h4>อื่นๆ</h4></div>
				<div class="col-sm-2" style="width: 230px;padding-right: 1px;padding-left: 1px;">
					<input type="text" class="form-control" name="input39" id="input39" maxlength="19"></div>
				<div class="col-sm-2" style="width: 145px; padding-right: 1px;padding-left: 15px;">
					<h4>กรุณาเลือกระดับ</h4> </div>
				<div class="col-sm-3" style="width: 200px;">
					<select class="form-control" id="select_opt" name="select_opt74" >		   	
						<option value="ดีมาก">ดีมาก</option>
						<option value="ดี">ดี</option>
						<option value="พอใช้">พอใช้</option>
						<option value="แย่">แย่</option>
						<option selected="selected" value=""></option>
					</select>
				</div>				
			</div>			
		</div>
			<div class="row">
				<div class="col-md-8">
					<hr style="border: 1px solid #c3c3c3;">
				</div>			
			</div>
		<!--8. ภูมิภาคที่นักศึกษาสนใจไปปฏิบัตงาน (เลือกเพียง 1 หัวข้อเพื่อประกอบการเลือกสถานประกอบการ)--->		
			<h4>8. ภูมิภาคที่นักศึกษาสนใจไปปฏิบัตงาน (เลือกเพียง 1 หัวข้อเพื่อประกอบการเลือกสถานประกอบการ)</h4>
			<div class="container">	
			<h4></h4>
			<div class="row">
				<div class="col-sm-2" style="width: 35px;padding-right: 5px;padding-left: 15px;">
					<input  id="myCheck" name="op3[]" type="checkbox" value="bangkok" class="form-control"></div>
				<div class="col-sm-3" style="padding-right: 15px;padding-left: 15px;">
					<h4>กทม.และปริมลฑล</h4></div>
				<div class="col-sm-2" style="width: 35px;padding-right: 5px;padding-left: 15px;">
					<input  id="myCheck" name="op3[]" type="checkbox" value="north" class="form-control"></div>
				<div class="col-sm-3" style="padding-right: 15px;padding-left: 15px;">
					<h4>ภาคเหนือ</h4></div>						
			</div>
			<div class="row">
				<div class="col-sm-2" style="width: 35px;padding-right: 5px;padding-left: 15px;">
					<input  id="myCheck" name="op3[]" type="checkbox" value="eastnorth" class="form-control"></div>
				<div class="col-sm-3" style="padding-right: 15px;padding-left: 15px;">
					<h4>ภาคตะวันออกเฉียงเหนือ</h4></div>
				<div class="col-sm-2" style="width: 35px;padding-right: 5px;padding-left: 15px;">
					<input  id="myCheck" name="op3[]" type="checkbox" value="mid" class="form-control"></div>
				<div class="col-sm-3" style="padding-right: 15px;padding-left: 15px;">
					<h4>ภาคกลาง</h4></div>						
			</div>
			<div class="row">
				<div class="col-sm-2" style="width: 35px;padding-right: 5px;padding-left: 15px;">
					<input  id="myCheck" name="op3[]" type="checkbox" value="south" class="form-control"></div>
				<div class="col-sm-3" style="padding-right: 15px;padding-left: 15px;">
					<h4>ภาคใต้</h4></div>
				<div class="col-sm-2" style="width: 35px;padding-right: 5px;padding-left: 15px;">
					<input  id="myCheck" name="op3[]" type="checkbox" value="east" class="form-control"></div>
				<div class="col-sm-3" style="padding-right: 15px;padding-left: 15px;">
					<h4>ภาคตะวันออก</h4></div>						
			</div>			
			
		</div>			
			<div class="row">
				<div class="col-md-8">
					<hr style="border: 1px solid #c3c3c3;">
				</div>			
			</div>			
		<!--9. ลักษณะงานที่สนใจและต้องการไปปฏิบัติงานสหกิจศึกษา--->	
			<h4>9. ลักษณะงานที่สนใจและต้องการไปปฏิบัติงานสหกิจศึกษา</h4>
			<div class="container">	
			<h4></h4>
			<div class="row">
				<div class="col-sm-2" style="width: 35px;padding-right: 5px;padding-left: 15px;">
					<input  id="myCheck" name="op4[]" type="checkbox" value="workout" class="form-control"></div>
				<div class="col-sm-3" style="padding-right: 15px;padding-left: 15px;">
					<h4>งานภาคสนาม</h4></div>
				<div class="col-sm-2" style="width: 35px;padding-right: 5px;padding-left: 15px;">
					<input  id="myCheck" name="op4[]" type="checkbox" value="pro" class="form-control"></div>
				<div class="col-sm-3" style="padding-right: 15px;padding-left: 15px;">
					<h4>งานวิจัย </h4></div>						
			</div>
			<div class="row">
				<div class="col-sm-2" style="width: 35px;padding-right: 5px;padding-left: 15px;">
					<input  id="myCheck" name="op4[]" type="checkbox" value="marketting" class="form-control"></div>
				<div class="col-sm-3" style="padding-right: 15px;padding-left: 15px;">
					<h4>งานการตลาด</h4></div>
				<div class="col-sm-2" style="width: 35px;padding-right: 5px;padding-left: 15px;">
					<input  id="myCheck" name="op4[]" type="checkbox" value="produce" class="form-control"></div>
				<div class="col-sm-3" style="padding-right: 15px;padding-left: 15px;">
					<h4>งานสายการผลิต </h4></div>						
			</div>
			<div class="row">
				<div class="col-sm-2" style="width: 35px;padding-right: 5px;padding-left: 15px;">
					<input  id="myCheck" name="op4[]" type="checkbox" value="room" class="form-control"></div>
				<div class="col-sm-3" style="padding-right: 15px;padding-left: 15px;">
					<h4>งานห้องปฏิยัติการ</h4></div>
				<div class="col-sm-2" style="width: 35px;padding-right: 5px;padding-left: 15px;">
					<input  id="myCheck" name="op4[]" type="checkbox" value="other9" class="form-control"></div>
				<div class="col-sm-2" style="width: 140px; padding-right: 15px;padding-left: 15px;">
					<h4>อื่นๆ โปรดระบุ</h4></div>	
             	<div class="col-sm-2" style="width: 230px;padding-right: 1px;padding-left: 1px;">
					<input type="text" class="form-control" name="input40" id="input40" maxlength="17"></div>				
			</div>			
			
		</div>				
			<div class="row">
				<div class="col-md-8">
					<hr style="border: 1px solid #c3c3c3;">
				</div>			
			</div>	
		<!--10. ความสนใจทางด้านวิชาการเฉพาะ--->	
			<h4>10. ความสนใจทางด้านวิชาการเฉพาะ</h4>		
		<div class="container">	
		  <div class="row">
			<div class="col-sm-8">
			<input type="text" class="form-control"  name="input41" id="input41" maxlength="80"></div>
		  </div>	
		</div>
			<div class="row">
				<div class="col-md-8">
					<hr style="border: 1px solid #c3c3c3;">
				</div>			
			</div>		
				<br>
			<div class="form-group">
              <div class="col-lg-12 col-lg-offset-3">
			  <button class="btn btn-warning back1" type="button"><span class="fa fa-arrow-left" style="padding: 0;width: 20; height: 20;"></span>ย้อนกลับ</button> 
                <button class="btn btn-primary " type="submit">กรอกข้อมูลเสร็จสิ้น <span class="fa fa-arrow-right" style="padding: 0;width: 20; height: 20;"></span></button> 
              </div>
            </div>
			</div>
		</div>
	</div>
			<!-- end-page-2--->
				 
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
	$(".back1").click(function() {
      $(".frm").hide("fast");
      $("#sf1").show("slow");
    });	
	
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></style>
</body>


</html>
