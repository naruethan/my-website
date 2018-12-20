<?php
session_start();
error_reporting(-1);
require('/header.php');
require('/confic/conn.php');
if(!isset($_SESSION["username"]))   {
	
	header("location: index.php");
	}


$data_qurry = $_GET["page"];
$data_result="select * from data_db where ID='$data_qurry'";
$data_result = mysqli_query($dbcon,$data_result);

$data_result_fetch = mysqli_fetch_assoc($data_result);

//echo "id: " . $data_result_fetch["ID"]. " - Title: " . $data_result_fetch["title"]."<br>". 
    // "description => ".$data_result_fetch["desp"]. "<br>". "Contact => ".$data_result_fetch["tel"]."<br>";
?>	
<style>
.text-center {
    text-align: center !important;
}
</style>
<body>
<div class="container-main" style="background-color: #ffffff;"> 
           

        <!-- Content Row -->
        <div class="row">
            <div class="col-md-9">
			<br>
			<div class="container-fluid">
			  <div class="single-post-breadcrumb">
				<ol class="breadcrumb breadcrumb-arrow">
					<li><a href="http://localhost/theam2+admin/home.php">Home</a></li>
					<li><?php echo $data_result_fetch["title"];?></li>				
					<li class="active"><?php echo "ภาคเรียนที่"." ".$data_result_fetch["Term"]." "."ปีการศึกษา"." ".$data_result_fetch["Years"];?></li>
				</ol>
					<div class="page-header">
						<h3><?php echo $data_result_fetch["title"];?></h3>      
					</div>
			  </div>
		    </div> 
			
			<div class="col-md-12">
			<div class="single-post" style="font-size: 17px;">
			     <h4>ชื่อบริษัทหรือสถานประกอบการ</h4>
				 <div class="panel panel-default">
						<div class="panel-heading"><?php echo $data_result_fetch["title"];?></div>
				</div>
				
			     <h4>นิคมอุตสาหกรรม</h4>
				 <div class="panel panel-default">
						<div class="panel-heading"><?php echo $data_result_fetch["GroupComp"];?></div>
				</div>
				 <h4>ที่อยู่หรือที่ตั้งสถานประกอบการ</h4>
				 <div class="panel panel-default">
						<div class="panel-heading"><?php echo $data_result_fetch["Address"];?></div>
				</div>
				 <div class="row"> 
					<div class="col-md-4">
						<h4>เบอร์โทรศัพท์</h4>
						<div class="panel panel-default">
						<div class="panel-heading"><?php echo $data_result_fetch["tel"];?></div>
				</div>
					</div>
					<div class="col-md-4">
						<h4>หมายเลขแฟกซ์</h4>
						<div class="panel panel-default">
						<div class="panel-heading"><?php echo $data_result_fetch["fax"];?></div>
				</div>
					</div>
				</div>
				</div>
				<br>
			    
				<h4>แผนที่</h4>
        		<?php  if ($data_result_fetch["MapName"] == null){
					echo'<div class="alert alert-danger" role="alert">ยังไม่ได้ระบุตำแหน่งแผนที่ของบริษัทหรือสถานประกอบการนี้</div>';
					
					
				}else{?>
					
					
					
				
					


				<center>		
				<iframe width="100%" height="350"  frameborder="0" style="border:0"
				src="https://www.google.com/maps/embed/v1/place?key=AIzaSyAnfJJKnh6hAKAatoTyBVjRyJcYAwemUUs
				&q=<?php echo $data_result_fetch["MapName"]; ?>" allowfullscreen>
				</iframe></center>
				<?php } ?>
			</div>
				<br>
				
				<div class="row">
			
				<div class="col-md-12">
				<div class="table-studet-Coop" style="margin-left: 15px;">
				<br>
				<h4>ข้อมูลนักศึกษาที่ออกสหกิจกับสถานประกอบการนี้</h4>
				
				
				<div class="table-responsive">          
					<table class="table table-striped" style="background-color: #2c2d3b45;">
					<thead>
						<tr>
							<th>คนที่ </th>
							<th>ชื่อนักศึกษา</th>
							<th>เบอร์โทรศัพท์</th>
							<th class="text-center">ภาคเรียนที่</th>
							<th class="text-center">ปีการศึกษา</th>
						</tr>
					</thead>
					<tbody>
						<tr>
						<td>1</td>
						<td><?php echo $data_result_fetch["Stuname1"];?></td>
						<td><?php echo $data_result_fetch["StuTel1"];?></td>					
						<td class="text-center"><?php echo $data_result_fetch["Term"];?></td>				
						<td class="text-center"><?php echo $data_result_fetch["Years"];?></td>
						</tr>
						<tr>
						<td>2</td>
						<td><?php echo $data_result_fetch["Stuname2"];?></td>
						<td><?php echo $data_result_fetch["StuTel2"];?></td>
						<td class="text-center"><?php echo $data_result_fetch["Term"];?></td>
						<td class="text-center"><?php echo $data_result_fetch["Years"];?></td>
						</tr>
						<tr>
						<td>3</td>
						<td><?php echo $data_result_fetch["Stuname3"];?></td>
						<td><?php echo $data_result_fetch["StuTel3"];?></td>
						<td class="text-center"><?php echo $data_result_fetch["Term"];?></td>
						<td class="text-center"><?php echo $data_result_fetch["Years"];?></td>
						</tr>
						<tr>
						<td>4</td>
						<td><?php echo $data_result_fetch["Stuname4"];?></td>
						<td><?php echo $data_result_fetch["StuTel4"];?></td>
						<td class="text-center"><?php echo $data_result_fetch["Term"];?></td>
						<td class="text-center"><?php echo $data_result_fetch["Years"];?></td>
						</tr>
						
					</tbody>
				  </table>
				</div>
			</div>		
			</div>
            </div>
			</div>
            <!-- /.col-md-4 -->
            <div class="col-md-3">
                
				
            </div>
            <!-- /.col-md-4 -->
        </div>
        <!-- /.row -->
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

</body>


</html>
