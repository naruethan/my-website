<?php
require('/header/header.php');
require('/sidebar/sidebar.php');
require('/connect/conn.php');

$result="select * from member_login_db";
$result = mysqli_query($dbcon,$result);

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
					     
						 <h3 class="page-header">จัดการสถานะของนักศึกษาที่สมัครเข้าร่วมโครงการสหกิจศึกษา</h3>
                                      
             
						<div class="panel panel-yellow">
							<div class="panel-heading"> เกี่ยวกับสถานะ </div>
							<div class="panel-body">
								<p>สถานะ "รอตรวจสอบเอกสาร" คือ สถานะที่นักศึกษากรอกข้อมููลในเอกสารที่ 1 และ 3 เรียบร้อย และเจ้าหน้าที่สำนักงานสหกิจศึกษาได้รับใบสมัครแล้ว</p>                  
								<p>สถานะ "ยืนยันเอกสาร/รอแบบตอบรับ" คือ มีการตรวจสอบความถูกต้องของเอกสารที่ 1 และ 3 จากเจ้าหน้าที่สำนักงานสหกิจศึกษาแล้ว</p>                             
								<p>สถานะ "แบบตอบรับส่งมาแล้ว" คือ สถานะมื่อมีการส่งแบบตอบรับกลับมาจากสถานประกอบการนั้นๆ และจะมีการแจ้งเตือนส่งไปยังสมาชิก</p>                      
							</div>
                        </div>             
                        
                         <div class="well" style="background-color: rgba(243, 243, 243, 0);">
							<div class="panel-body">
								<h4>สถานะนักศึกษาที่สมัครเข้าร่วมโครงการล่าสุด</h4>
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>ID</th>
										<th>รหัสนักศึกษา</th>
                                        <th>ชื่อ - นามสกุล</th>
										<th>หลักสูตร</th>
										<th>ชั้นปีที่</th>										
										<th>สถานะดำเนินการ</th>	
                                        <th>แก้ไข</th>									
                                    </tr>
                                </thead>							
                                <?php
							if (mysqli_num_rows($result) > 0) {	
								while($row = mysqli_fetch_assoc($result)) {?>
								<tbody>
                                    <tr class="odd gradeX">
                                        <td td class="center"><?php echo $row["ID"];?></td>
                                        <td><?php echo $row["username"];?></td>										
                                        <td><?php echo $row["name"];?></td>                                                                     
										<td><?php echo $row["major"];?></td>
										<td><?php echo $row["years"];?></td>										
										<td><?php echo $row["Status"];?></td>
										<td>
                                        <?php echo'<a role="button" class = "btn btn-default" href="http://localhost/theam2+admin/Admin/pages/Edite-status.php?page='.$row["ID"].'" title="คลิกเพื่อแก้ไขสถานะ" ><span class="glyphicon glyphicon-edit"></span></i>แก้ไขสถานะ</a>';?>	
										</td>
                                    </tr>							
                                    
                                </tbody>	
	    						<?php	}	
							}	?>					
									
                            <!-- /.table-responsive -->                      
                            </table>   
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

    $('.edit-data').click(function(){
        // get data from edit btn
        var name = $(this).attr('data-name');
        // set value to modal
        $("#name").val(name);
        });






    </script>

</body>

</html>