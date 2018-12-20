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

$data_non ="select * from notification_db where token='$qurry_username' ORDER BY msg_id DESC";
$data_non_re = mysqli_query($dbcon,$data_non);




?>
<!DOCTYPE html>
<html lang="en">  
<body>
<div class="container-main">	
<!--body -->	
<div class="body-main" style="background-color: rgb(230, 230, 230);">
   <div class="row">
	 <div class="container-fluid">
	 <div class="col-md-9"><!--col-md-9--> 	
		<div class="page-header" style="padding-bottom: 1px;margin: 10px 0 10px;border-bottom: 0px solid #9493ad;">
			<h3>จัดการข้อมูลส่วนตัว</h3>			
		</div>
		
		<div class="panel panel-default">
			<div class="panel-heading" style="background-color: #011e42;font-size: 19;">ข้อมูลสมาชิก</div>
			<div class="panel-body">
			
			<table class="table table-user-information">
                    <tbody>
                      <tr>
                        <td style="background-color: #1d7bdc;color:  white;">Username</td>						
                        <td><?php echo $data_result_fetch["username"]; ?></td>					
                      </tr>
                      <tr>
                        <td style="background-color: #1d7bdc;color:  white;">Password</td>
                        <td><?php echo $data_result_fetch["password"]; ?></td>
                      </tr>
                      <tr>
                        <td style="background-color: #1d7bdc;color:  white;">ชื่อ - นามสกุล</td>
                        <td><?php echo $data_result_fetch["name"]; ?></td>
                      </tr>
                      <tr>
                        <td style="background-color: #1d7bdc;color:  white;">รหัสนักศึกษา</td>
                        <td><?php echo $data_result_fetch["username"]; ?></td>
                      </tr>
                        
                      <tr>
                        <td style="background-color: #1d7bdc;color:  white;">หลักสูตร</td>
                        <td><?php echo $data_result_fetch["major"]; ?></td>
                      </tr>
                        <tr>
                        <td style="background-color: #1d7bdc;color:  white;">ชั้นปีที่</td>
                        <td><?php echo $data_result_fetch["years"]; ?></td>
                      </tr>
                      <tr>
                        <td style="background-color: #1d7bdc;color:  white;">อีเมล</td>
                        <td><?php echo $data_result_fetch["emailuser"]; ?></a></td>
                      </tr>
                        <td style="background-color: #1d7bdc;color:  white;">เบอร์โทรศัพท์</td>
                        <td><?php echo $data_result_fetch["tel"]; ?></td>                           
                      </tr>
					  <tr>
                        <td style="background-color: #1d7bdc;color:  white;">ตำแหน่งในเว็บไซต์</td>
                        <td><?php echo $data_result_fetch["Position"]; ?></td>
                      </tr>
					  <tr>
                        <td style="background-color: #1d7bdc;color:  white;">สถานะดำเนินการ</td>
                        <td><?php echo $data_result_fetch["Status"]; ?></td>
                      </tr>                     
                    </tbody>
             </table>
			 <div class="row">
				<div class="col-md-5"></div>
				<div class="col-md-2" style="padding: 0;">			 
					<button type="button" class="btn btn-md btn-warning btn-block" data-toggle="modal" data-target="#myModal">แก้ไขข้อมูล</button>
				</div>
			  </div>
			</div>
		</div>
		
<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header" style="background-color: #07063c; color: white;">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">แก้ไขข้อมูลส่วนตัว</h4>
        </div>
        <div class="modal-body">
          <div id="registration-form">
                <form method="post" action="save-edit-user.php">
                   <div class="form-group">
                     <label for="name">Username</label>
                     <input type="text" class="form-control" id="username" name="username" value="<?php echo $data_result_fetch["username"]; ?>">
					 <input type="hidden" class="form-control" id="iduser" name="iduser" value="<?php echo $data_result_fetch["ID"]; ?>">
                    </div>
                <div class="form-group">
                     <label for="newpwd">Password:</label>
                     <input type="text" class="form-control" id="newpwd" name="newpwd" value="<?php echo $data_result_fetch["password"];?>" >
                     </div>
                <div class="form-group">
                  <label for="newemail">ชื่อ - นามสกุล</label>
                  <input type="text" class="form-control" id="newname" name="newname" value="<?php echo $data_result_fetch["name"];?>" >
                </div>				
                <div class="form-group">
                  <label for="newemail">Email:</label>
                  <input type="email" class="form-control" id="newemail" name="newemail" value="<?php echo $data_result_fetch["emailuser"];?>" >
                </div>
				<div class="col-sm-7" style="padding-left: 0px;">
                  <div class="form-group">
                     <label for="name">หลักสูตร</label>
                     <input type="text" class="form-control" id="name" placeholder="วิศวกรรมคอมพิวเตอร์" name="newmajor" value="<?php echo $data_result_fetch["major"];?>" >
                  </div>	
				</div>	
				<div class="col-sm-5">
				   <div class="form-group">
                     <label for="name">ชั้นปีที่</label>
                     <input type="text" class="form-control" id="name" name="newyear" value="<?php echo $data_result_fetch["years"];?>" >
                  </div>				
				</div>
                  <div class="form-group">
                     <label for="name">เบอร์โทรศัพท์</label>
                     <input type="text" class="form-control" id="name" name="newtel" value="<?php echo $data_result_fetch["tel"];?>" >
                  </div>
				  <button type="submit" class="btn btn-success">ตกลง</button>
				  <button type="button" class="btn btn-danger" data-dismiss="modal">ยกเลิก</button>     
                </form>
          </div>
        </div>
        <div class="modal-footer"style="background-color: #07063c;">
		   
          
        </div>
      </div>
      
    </div>
 </div>		 
       	<div class="page-header" style="padding-bottom: 1px;margin: 10px 0 10px;border-bottom: 0px solid #9493ad;">
					
		</div>          
		<div class="panel panel-default">
			<div class="panel-heading" style="background-color: #011e42;font-size: 19;">ข้อความแจ้งเตือนถึงนักศึกษาล่าสุด</div>
			<div class="panel-body">
            
			<?php
			$i = 1;
			 if (mysqli_num_rows($data_non_re) > 0) {				 
				while($row = mysqli_fetch_assoc($data_non_re)) { ?>			
			
				<div class="alert-message alert-message-warning" style="    background-color: #222222;margin: 20px 0;color: white;padding: 10px;border-radius: 10px;border-left: 5px solid #1b86e2;">
					<h4 style="font-size: 16;">ข้อความจาก<strong>&nbsp;<?php echo $row["Admin_name"];?></strong></h4>
					<p>
					
						 <?php echo $row["msg_txt"];?>
				
						
					</p>
					
					<div class="row">
						<div class="col-md-9"></div>				
						<div class="col-md-3" style="padding: 0;">			 
							<strong><h4 style="font-size: 16;"><?php echo $row["timestamp"];?></h4></strong>
						</div>
					</div>
                </div>
				
				<?php }
			 }?>

				
				
				
			</div>
		</div> 	
     </div><!--col-md-9--> 
	 
	 <div class="col-md-3"><!--col-md-3-->
	 dfgdfg
	 
	 
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