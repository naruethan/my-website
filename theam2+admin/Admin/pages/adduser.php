<?php
require('/header/header.php');
require('/sidebar/sidebar.php');
?>
<!DOCTYPE html>
<html lang="en">

<body>

    <div id="wrapper">
        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
					
					<div class="row">
                      <div class="col-lg-12">
					     <ul class="nav nav-pills nav-justified">
						 <h3>เพิ่มสมาชิกเว็บไซต์ (ใช้ได้เฉพาะผู้ดูแลเว็บไซต์เท่านั้น)</h3>
						 <br>
						    <li class="active"><a href="adduser.php">เพิ่มสมาชิกเว็บไซต์</a></li>						   
						    <li><a href="addAdmin.php">เพิ่มผู้ดูแลเว็บไซต์</a></li>
					     </ul>
						</div>
					</div>
        <div class="well well-sm" style="background-color: rgba(234, 236, 236, 0.3);">              
		<h3>เพิ่มสมาชิกเว็บไซต์ </h3>
			<div class="row">						
						<div class="col-md-5">
<form class="form-horizontal" action="Add-adduser.php" method="POST">
  <fieldset> 
    <div class="control-group">
      <!-- Username -->
      <label class="control-label"  for="username">Username</label>
      <div class="controls">
        <input class="form-control" type="text" id="username" name="username" placeholder="รหัสนักศึกษา" class="input-xlarge">
        <p class="help-block">ตัวอย่าง. 56243206006-8 (สามารถป้อนได้ไม่เกิน 14 หลัก) </p>
      </div>
    </div> 
    <div class="control-group">
      <!-- Password-->
      <label class="control-label" for="password">Password</label>
      <div class="controls">
        <input class="form-control" type="password" id="password" name="password" placeholder="รหัสผ่าน" class="input-xlarge">
        <p class="help-block">ตัวอย่าง .1234567891011 (สามารถป้อนได้ไม่เกิน 13 หลัก) </p>
      </div>
    </div>
    <div class="control-group">
      <!-- E-mail -->
      <label class="control-label" for="email">E-mail</label>
      <div class="controls">
        <input class="form-control" type="email" id="email" name="email" placeholder="อีเมล" class="input-xlarge">
        <p class="help-block">ตัวอย่าง. naruethan@hotmail.com</p>
      </div>
    </div>
 <div class="control-group">
      <!-- Button -->
      <div class="controls">
        <button class="btn btn-success">ตกลง</button>
      </div>
    </div>			
  </div>	
 
 
  <div class="row">
	<div class="col-md-6">
     <div class="control-group">
      <!-- Password-->
      <label class="control-label" for="password">ชื่อ - นามสกุล</label>
      <div class="controls">
        <input class="form-control" type="text" id="name" name="name" placeholder="" class="input-xlarge">
        <p class="help-block">ตัวอย่าง. นายนฤธรรม์  เถินบุรินทร์ </p>
      </div>
    </div>
	
	<div class="control-group">
      <!-- Password-->
      <label class="control-label" for="password">คณะ/หลักสูตร</label>
      <div class="controls">
        <input class="form-control" type="text" id="major" name="major" placeholder="" class="input-xlarge">
        <p class="help-block">ตัวอย่าง. วิศวกรรมคอมพิวเตอร์</p>
      </div>
    </div>
	<div class="control-group">
      <!-- Password-->
      <label class="control-label" for="password">ชั้นปีที่ </label>
      <div class="controls"> 
        <input class="form-control" type="text" id="year" name="year" class="input-xlarge">

      </div>
    </div>
	
      

	<div class="control-group">
      <!-- Password-->
      <label class="control-label" for="password">สถานะผู้ใช้งาน</label>
      <div class="controls"> 
        <input class="form-control" type="text" id="satatus" name="satatus" placeholder="นักศึกษา" value="นักศึกษา" class="input-xlarge" disabled>

      </div>
    </div>
	
	
 </div>    
 
  
    
  </fieldset>
</form>
						

						
					</div>
						

		</div>
                </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="../vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

</body>

</html>
