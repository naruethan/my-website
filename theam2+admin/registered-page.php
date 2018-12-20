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



?>
<!DOCTYPE html>
<html lang="en">  
<body>
<div class="container-main">	
<!--body -->	
<div class="body-main">
   <div class="row">
	 <div class="container-fluid">
	 <div class="col-md-12"><!--col-md-12--> 	
	
		<div class="row"> <!--row--> 
		 <div class="container"> 
			<div class="col-md-10"><!--col-md-8--> 
				
					<br>
					<h4>วิธีการสมัครเข้าร่วมโครงการสหกิจศึกษาผ่านเว็บไซต์</h4>
					<h4>1. นักศึกษาจะต้องกรอกเอกสารการดังต่อไปนี้ (โดยสามารถกรอกผ่านเว็บไซต์ได้)</h4>
					<h4 style="color: #1823b7;">- กรอกแบบฟอร์มเอกสารที่ 1  แบบแจ้งรายละเอียดการเข้าร่วมโครงการสหกิจศึกษา <a href="http://localhost/theam2+admin/register-sheet1.php">สมัครคลิกที่นี้</a></h4>
					<p style="font-size: 16;"> เนื่องจากเอกสารที่ 1 จะต้องประทับลายเซ็น เมื่อกรอกข้อมูลเรียบร้อยแล้วจะต้องนำไปให้เจ้าหน้าที่ที่สำนักงานสหกิจศึกษา ด้วยตนเองเท่านั้น</p>
					<br>
					<h4 style="color: #1823b7;">- กรอกแบบฟอร์มเอกสารที่ 3  แบบฟอร์มกรอกข้อมูลใบสมัครงานโครงการสหกิจศึกษา <a href="http://localhost/theam2+admin/register-sheet3.php">สมัครคลิกที่นี้</a></h4>
					<p style="font-size: 16;"> สำหรับเอกสารที่ 3 เมื่อกรอกข้อมูลเรียบร้อยแล้วสามารถอัพโหลดไฟล์ผ่านทางเว็บไซต์ให้เจ้าหน้าที่ที่สำนักงานสหกิจศึกษา เพื่อตรวจสอบความถูกต้องได้</p>
					<p style="font-size: 16;">เอกสารที่ 3 อัพโหลดผ่านทางเว็บไซต์ได้ที่นี้  <a href="http://localhost/theam2+admin/uploadfile.php">อัพโหลดเอกสารที่นี้</a> </p>
					<br>
				                      

					<br>
					<h4>2. นักศึกษาจะต้องนำส่ง เอกสารที่ 1 และ เอกสารที่ 3 ไม่ว่าจะผ่านทางเว็บไซต์ หรือนำไปให้เจ้าหน้าที่ที่สำนักงานสหกิจศึกษาด้วยตนเอง เพื่อตรวจสอบความเรียบร้อยและยืนยันการสมัครเข้าร่วมโครงการสหกิจศึกษา </h4>
					<h4 style="color: red;">- เอกสารที่ 1 ควรจะนำไปให้เจ้าหน้าที่ด้วยตนเอง เพื่อป้องกันข้อผิดพลาดในการสมัครเข้าร่วมโครงการสหกิจศึกษา </h4>
				
					<br>
					<h4>3. เมื่อนำส่งเอกสารที่ 1 และ เอกสารที่ 3 ให้กับทางสำนักงานสหกิจศึกษา เรียบร้อยแล้ว นักศึกษาจะต้องรอติดตามผล ว่าบริษัทนั้นๆส่งเรื่องกลับมาหรือไม่ โดยจะต้องไปติดต่อด้วยตนเอง </h4>
					<p style="font-size: 16;"> หรือสามารถติดตามผลได้จากข้อความแจ้งเตือนที่เจ้าหน้าที่ได้ส่งข้อความติดต่อมาได้</p>
                    <br>

					
				<div class="panel panel-info">
				<div class="panel-heading" style="font-size: 16;background-color: #2b81cb;color: white;"> เกี่ยวกับสถานะของสมาชิกเว็บไซต์ </div>
				<div class="panel-body">	
						<p style="font-size: 16;">สถานะ "รอตรวจสอบเอกสาร" คือ สถานะที่นักศึกษากรอกข้อมููลในเอกสารที่ 1 และ 3 เรียบร้อย และเจ้าหน้าที่สำนักงานสหกิจศึกษาได้รับใบสมัครแล้ว</p>                  
						<p style="font-size: 16;">สถานะ "ยืนยันเอกสาร/รอแบบตอบรับ" คือ มีการตรวจสอบความถูกต้องของเอกสารที่ 1 และ 3 จากเจ้าหน้าที่สำนักงานสหกิจศึกษาแล้ว</p>                             
						<p style="font-size: 16;">สถานะ "แบบตอบรับส่งมาแล้ว" คือ สถานะมื่อมีการส่งแบบตอบรับกลับมาจากสถานประกอบการนั้นๆ และจะมีการแจ้งเตือนส่งไปยังสมาชิก</p>  </div>
				</div>					
				 
		    </div><!--col-md-8--> 

	    </div>
		</div><!--row -->
    </div><!--col-md-12--> 
	</div><!--container-fluid -->
    </div><!--row -->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.js"></script>
    <script type="text/javascript" src="NotificationAjax.js"></script> 

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
	
  
  </body>
  <?php
  
  require('/footer.php');
  
  
  ?>
</html>