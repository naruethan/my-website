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

$data_result="select * from member_login_db where username='$qurry_username'";
$data_result = mysqli_query($dbcon,$data_result);
$data_result_fetch = mysqli_fetch_assoc($data_result);


$data_file ="select * from upload_db where NO_usr='$qurry_username' ORDER BY ID DESC";
$data_file_re = mysqli_query($dbcon,$data_file );





?>
<!DOCTYPE html>
<html lang="en">  
<body>
<div class="container-main">	
<!--body -->	
<div class="body-main" style="background-color: rgb(230, 230, 230);">
   <div class="row">
	 <div class="container-fluid">
	 <div class="col-md-12"><!--col-md-9--> 	
		<div class="page-header" style="padding-bottom: 1px;margin: 10px 0 10px;border-bottom: 0px solid #9493ad;">
			<h3>อัพโหลดไฟล์เอกสาร</h3>			
		</div>
		
		
		<div class="panel panel-default">
		  <div class="panel-heading"><strong>อัพโหลดไฟล์เอกสาร สำหรับส่งให้กับเจ้าหน้าที่สหกิจ</strong> <small> </small></div>
			<div class="panel-body">
				<form name="form1" method="post" action="filetosql.php" enctype="multipart/form-data">	
	    
				<input class="form-control" type="file" name="filUpload" ><br>
				
				<div class="row"> 
					<div class="col-md-3">
						<input type="hidden" value="<?php echo $qurry_username;?>" class="form-control" name="UserNO" id="UserNO" maxlength="14">
					</div>	
				</div>	 	  
				<button type="submit" name="btnSubmit" class="btn btn-labeled btn-primary"> <span class="btn-label"><i class="glyphicon glyphicon-upload"></i> </span>อัพโหลด</button>
					
				</form>			
				<div class="panel panel-default">
    <div class="row clearfix">
		<div class="col-md-12 column">
			<table class="table table-bordered table-hover" id="tab_logic">
				<thead>
					<tr>
					<th class="text-center" style="background-color: #e6e6e6;">ลำดับ</th>
					<th class="text-center" style="background-color: #e6e6e6;">รหัสนักศึกษา</th>
					<th class="text-center" style="background-color: #e6e6e6;">
						ไฟล์เอกสารที่อัพโหลดล่าสุด
					</th>
					<th class="text-center" style="background-color: #e6e6e6;">วันที่ - เวลา</th>					
				</thead>
				<tbody>
						<?php
			$i = 1;
			 if (mysqli_num_rows($data_file_re) > 0) {				 
				while($row = mysqli_fetch_assoc($data_file_re)) { ?>
					<tr>
						<td class="text-center"><?php echo $i;?></td>
						<td class="text-center"><?php echo $row["NO_usr"];?></td>
						<td><?php echo $row["File_Db"];?></td>
						<td class="text-center"><?php echo $row["date_time"];?></td>
					</tr>
					
				<?php $i++; }
			 }?>	
					
                    
				</tbody>
			</table>
		</div>
	</div>

</div>
			
			
			
			
			
			
			
			
			</div>
			
						
					
				
						
					    
		</div>
		
     </div><!--col-md-9--> 
	 

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