<?php
require('/header/header.php');
require('/sidebar/sidebar.php');
require('/connect/conn.php');
$data_qurry = $_GET["page"];
$data_result="select * from member_login_db where ID='$data_qurry'";

$data_result = mysqli_query($dbcon,$data_result);

$data_edit_status_fetch = mysqli_fetch_assoc($data_result);

//echo "id: " . $data_edit_status_fetch["ID"]. " - Status: " . $data_edit_status_fetch["Status"]; 
    // "description => ".$data_result_fetch["desp"]. "<br>". "Contact => ".$data_result_fetch["tel"]."<br>";
?>
<html lang="en">

<body>
    <div id="wrapper">
        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">							
                      <div class="col-lg-12">
					  <h3 class="page-header">แก้ไขสถานะของนักศึกษาที่สมัครเข้าร่วมโครงการสหกิจศึกษา</h3>
					  <div class="panel panel-yellow">
							<div class="panel-heading"> เกี่ยวกับสถานะ </div>
							<div class="panel-body">
								<p>สถานะ "รอตรวจสอบเอกสาร" คือ สถานะที่นักศึกษากรอกข้อมููลในเอกสารที่ 1 และ 3 เรียบร้อย และเจ้าหน้าที่สำนักงานสหกิจศึกษาได้รับใบสมัครแล้ว</p>                  
								<p>สถานะ "ยืนยันเอกสาร/รอแบบตอบรับ" คือ มีการตรวจสอบความถูกต้องของเอกสารที่ 1 และ 3 จากเจ้าหน้าที่สำนักงานสหกิจศึกษาแล้ว</p>                             
								<p>สถานะ "แบบตอบรับส่งมาแล้ว" คือ สถานะมื่อมีการส่งแบบตอบรับกลับมาจากสถานประกอบการนั้นๆ และจะมีการแจ้งเตือนส่งไปยังสมาชิก</p>                      
							</div>
                      </div> 
					  <form method="post" action="save-edit-status.php" id="form-edit-satatus">
					  <div class="well" style="background-color: rgb(241, 241, 241);">
					  <h4>สถานะดำเนินการปัจจุบัน</h4>
						<div class="panel panel-default">
							<div class="panel-heading"><?php echo $data_edit_status_fetch["Status"];?></div>
						</div>
					  <h4>สถานะที่ต้องการเปลี่ยน</h4>
					  <select class="form-control" id="select_opt" name="select_opt">
						<option value="">เลือกสถานะที่ต้องการ</option>
						<option value="รอตรวจสอบเอกสาร">รอตรวจสอบเอกสาร</option>		
						<option value="ยืนยันเอกสาร/รอแบบตอบรับ">ยืนยันเอกสาร/รอแบบตอบรับ</option>
						<option value="แบบตอบรับส่งมาแล้ว">แบบตอบรับส่งมาแล้ว</option>
					  </select>
					  <input type="hidden" class="form-control" name="ID" value="<?php echo $data_edit_status_fetch["ID"];?>">
					  </div>
					  <input type="submit" class="btn btn-success" value="อัพเดทสถานะ">
					  <input type="button" class="btn" value="ยกเลิก" onclick="window.location.href='/theam2+admin/Admin/pages/satatus.php'">
					  </form>
					  <br>
					  <form method="post" action="notification/insert.php" id="comment_form">					  
					  <div class="form-comment" style="padding: 10px;background-color: #eaeaeaa6;border-radius: 5px;">
						<div class="form-group">
							<label>กรุณาส่งข้อความแจ้งเตือนถึงสมาชิกเว็บไซต์ เมื่อแบบตอบรับมาถึง หรือส่งข้อความสำคัญต่างๆ ถึงนักศึกษา</label>
							<br>
							<div class="row">
								<div class="col-md-1">	
									<label>ชื่อผู้ส่ง :</label>
								</div>
								<div class="col-md-3" style="padding-right: 1px;padding-left: 1px;">	
									<input type="text" name="nameAdmin" id="nameAdmin" class="form-control">
								</div>
							</div>
							<br>
								<label>ข้อความที่ต้องการส่ง</label>
								<input type="text" name="subject" id="subject" class="form-control">
								<p class="help-block">ตัวอย่าง. สำนักงานสหกิจได้รับแบบตอบรับคืนจากทางบริษัทแล้ว กรุณามาติดต่อได้ที่สำนักงานสหกิจศึกษา</p>
														
								<button type="submit" class="btn btn-info btn-block"  title="คลิกเพื่อส่งข้อความ" ><span class="glyphicon glyphicon-envelope"></span></i>   ส่งข้อความ</button>
								<input type="hidden" class="form-control" name="ID" value="<?php echo $data_edit_status_fetch["ID"];?>"> 
								<input type="hidden" class="form-control" name="UserToken" value="<?php echo $data_edit_status_fetch["username"];?>"> 
								
						</div>    
						<div class="form-group">						
						</div>
					  </div>
					 </form>
					  
					  
					  <hr style="border-top: 2px solid #3e2121;">
					  
					  <h4>รหัสนักศึกษา</h4>
						<div class="panel panel-default">
							<div class="panel-heading"><?php echo $data_edit_status_fetch["username"];?></div>
						</div>
					  <h4>ชื่อนักศึกษา</h4>
						<div class="panel panel-default">
							<div class="panel-heading"><?php echo $data_edit_status_fetch["name"];?></div>
						</div>
					  <h4>หลักสูตร</h4>
						<div class="panel panel-default">
							<div class="panel-heading"><?php echo $data_edit_status_fetch["major"];?></div>
						</div>
					  <h4>ชั้นปีที่</h4>
						<div class="panel panel-default">
							<div class="panel-heading"><?php echo $data_edit_status_fetch["years"];?></div>
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

    <!-- DataTables JavaScript -->
    <script src="../vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="../vendor/datatables-plugins/dataTables.bootstrap.min.js"></script>
    <script src="../vendor/datatables-responsive/dataTables.responsive.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
            responsive: true
        });
    });

    





    </script>

</body>

</html>