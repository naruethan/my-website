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
    <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">ตารางข้อมูลทั้งหมดของสมาชิกเว็บไซต์</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">                        
                
                        <div class="panel-body">
						
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Username</th>
                                        <th>Password</th>
                                        <th>ชื่อ - นามสกุล</th>
									    <th>E-mail</th>
										<th>เบอร์โทรศัพท์</th>
										<th>หลักสูตร</th>
										<th>ชั้นปีที่</th>
										<th>ตำแหน่ง</th>
										<th>สถานะดำเนินการ</th>									
                                    </tr>
                                </thead>
						<?php
							if (mysqli_num_rows($result) > 0) {	
								while($row = mysqli_fetch_assoc($result)) {?>
								<tbody>
                                    <tr class="odd gradeX">
                                        <td td class="center"><?php echo $row["ID"];?></td>
                                        <td><?php echo $row["username"];?></td>
										<td><?php echo $row["password"];?></td>
                                        <td><?php echo $row["name"];?></td>
                                        <td><?php echo $row["emailuser"];?></td>                                
										<td><?php echo $row["tel"];?></td>
										<td><?php echo $row["major"];?></td>
										<td><?php echo $row["years"];?></td>
										<td><?php echo $row["Position"];?></td>	
										<td><?php echo $row["Status"];?></td>												
                                    </tr>							
                                    
                                </tbody>	
	    						<?php	}	
							}	?>						
						
                               
                            </table>
                            <!-- /.table-responsive -->                            
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            
                           

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
