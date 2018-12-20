<!DOCTYPE html>
<?php
require('/header/header.php');
require('/sidebar/sidebar.php');
require('/connect/conn.php');

$result="select * from data_db order by ID desc";
$result = mysqli_query($dbcon,$result);
?>
<html lang="en">

<body>

     <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">แสดงโพสข้อมูลสถานประกอบการทั้งหมด</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        
                        <div class="panel-body">
						<div class="head-title">
							<div class="col-lg-9">
								<h4>จำนวนโพสทั้งหมด <?php echo mysqli_num_rows($result); ?> โพสอัพเดทจากล่าสุด</h4>
							</div>
							<div class="col-lg-3">
								<a href="AddPost.php" class="btn btn-outline btn-primary" role="button" 
								style="color: #ffffff;background-color: rgba(239, 45, 36, 0.91);border-color: rgb(255, 255, 255);"><i class="fa fa-plus fa-fw"></i>เพิ่มข้อมูลสถานประกอบการ </a>
							</div>
						</div>
						<br>
						<hr style="border: 1px solid #0c0909;">
						
<?php
$i = 1;
if (mysqli_num_rows($result) > 0) {
	
	while($row = mysqli_fetch_assoc($result)) {
		
	    echo'<div class="Post-data">';
		echo'<div class="panel-body" style="padding: 5px;">';
		echo'<div class="loop-data-ad" style="font-size: 17px;">';
			echo'<div class="col-lg-9">';
				echo "โพสที่  :  $i."; 		
				echo "ชื่อ บริษัท  :"; 		
				echo '<a href="http://localhost/theam2+admin/Admin/pages/edit.php?page='.$row["ID"].'" title="'.$row["title"].'" >'.$row["title"].'</a>';
	        echo'</div>';
		    echo'<div class="col-lg-3">';
		        echo "ภาคเรียนที่   ".$row["Term"]."  ปีการศึกษา  ".$row["Years"];
		    echo'</div>';
		echo "<br>";
		echo '</div>';
		//echo '<a class = "btn btn-primary" href="http://localhost/kwin/edit.php?page='.$row["ID"].'" title="'.$row["title"].'" > Edit </a>';
			
		echo '<div class="btn-group">
		<a role="button" class = "btn btn-success" href="http://localhost/theam2+admin/page.php?page='.$row["ID"].'" title="view" ><i class="fa fa-eye fa-fw"></i>ดูหน้าโพสนี้</a>
		<a role="button" class = "btn btn-warning" href="http://localhost/theam2+admin/Admin/pages/edit.php?page='.$row["ID"].'" title="Edit" ><i class="fa fa-edit fa-fw"></i>แก้ไขข้อมูล</a>
		<a role="button" class = "btn btn-danger" href="http://localhost/theam2+admin/Admin/pages/dalete-data.php?page='.$row["ID"].'" title="delete" ><i class="fa fa-minus fa-fw"></i>ลบโพสนี้</a>
		</div>';

        echo '</div>';		
		echo '</div>';	
		echo '<hr style="border: 1px solid rgba(12, 9, 9, 0.32);">';
		$i=$i+1;
	}
	
	
}		
						
						?>
						
						
						
						
						
						
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
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
