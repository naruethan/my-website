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
						    <li><a href="adduser.php">เพิ่มสมาชิกเว็บไซต์</a></li>						   
						    <li class="active"><a href="#">เพิ่มผู้ดูแลเว็บไซต์</a></li>
					     </ul>
						</div>
					</div>
        <div class="well well-sm" style="background-color: rgba(234, 236, 236, 0.3);">              
		<h3>สำหรับ เพิ่มผู้ดูแลเว็บไซต์</h3>
			<div class="row">						
						<div class="col-md-5">
						<form class="form-horizontal" action='' method="POST">
  <fieldset> 
    <div class="control-group">
      <!-- Username -->
      <label class="control-label"  for="username">Username</label>
      <div class="controls">
        <input type="text" id="username" name="username" placeholder="รหัสใช้งาน" class="input-xlarge">
        <p class="help-block">Username can contain any letters or numbers, without spaces</p>
      </div>
    </div> 
    <div class="control-group">
      <!-- Password-->
      <label class="control-label" for="password">Password</label>
      <div class="controls">
        <input type="password" id="password" name="password" placeholder="รหัสผ่าน" class="input-xlarge">
        <p class="help-block">Password should be at least 4 characters</p>
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
        <input type="password" id="password" name="password" placeholder="" class="input-xlarge">
        <p class="help-block">Password should be at least 4 characters</p>
      </div>
    </div>
	
	
	
	
      <!-- Password-->
      <label class="control-label" for="password">สถานะผู้ใช้งาน</label>&nbsp;
           
		<select id="select_opt3" name="select_opt3" >
		   	<option value="อาจารย์">อาจารย์</option>
			<option value="ผู้ดูแลเว็บไซต์">ผู้ดูแลเว็บไซต์</option>
			<option value="เจ้าหน้าที่สำนักงาน">เจ้าหน้าที่สำนักงาน</option>
			<option value="หัวหน้าสำหนักงาน">หัวหน้าสำหนักงาน</option>			
		</select>		
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
