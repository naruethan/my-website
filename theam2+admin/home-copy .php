<!DOCTYPE html>
<?php
//home.php

session_start();
require('/header2.php');
require('/confic/conn.php');

if($_SESSION["username"] == null){
	echo'<META HTTP-EQUIV="Refresh" CONTENT="0;URL=http://localhost/theam2+admin/index.php">';
}
if(!isset($_SESSION["username"])){
	
	header("location: index.php");
}



$qurry_token = $_SESSION["username"];
$_SESSION['member_token'] = $qurry_token;

$perpage = 5;
if (isset($_GET['page'])) {
 $page = $_GET['page'];
 } else {
 $page = 1;
}

$start = ($page - 1) * $perpage;

$result="select * from data_db";
$result = mysqli_query($dbcon,$result);

$rowtotal = mysqli_num_rows($result);

$qurry="select * from data_db order by ID desc LIMIT $start, $perpage";
$result_qurry = mysqli_query($dbcon,$qurry);
$rowtotal_qurry = mysqli_num_rows($result_qurry);
?>


<body>

        <hr>


        <!-- Content Row -->
        <div class="row">
            <div class="col-md-9">
				        <div class="row">
            <div class="col-lg-12">
                <div class="well text-center">
				<h4>ยินดีต้อนรับนักศึกษาเข้าสู่เว็บไซต์งานสหกิจศึกษาประจำหลักสูตรวิศวกรรมคอมพิวเตอร์</h4>
				<h4>มหาวิทยาลัยเทคโนโลยีราชมงคล ล้านนา ตาก</h4>
             <?php							
				//echo '<h4>'.$_SESSION["username"].'</h4>';
				//echo '<h2">'.$_SESSION['member_token'].'</h2>';
				//echo '<p"><a href="logout.php">Logout</a></p>';
			?>
                </div>
            </div>
            <!-- /.col-lg-12 -->
        </div>
			<div class="mmo">
			
			<div class="panel panel-primary">
			     
				<div class="panel-heading">
				<div class="Title-body-loop-post" style="font-size: 20px;"><span class="glyphicon glyphicon-list"></span>  ข้อมูลสถานที่ฝึกงานอัพเดทล่าสุด</div></div>
				
			<div class="panel-body">
			
				
				
				
            
			<div class="container-post">
			 <!-- for loop-->
			 <?php
			 $i = 1;
			 if (mysqli_num_rows($result_qurry) > 0) {				 
				while($row = mysqli_fetch_assoc($result_qurry)) { ?>
		<div class="loop-post">
				<div class="container">	  
				<h4><?php echo '<a href="http://localhost/theam2+admin/Page.php?page='.$row["ID"].'" title="'.$row["title"].'" >'.$row["title"].'</a>';?></h4>
				  
				<p><span class="glyphicon glyphicon-map-marker"></span><?php echo "ที่อยู่ ".$row["Address"]; ?></p>
		
				<div class="row">
			  <div class="col-lg-7">
				<p><span class="glyphicon glyphicon-earphone"></span><?php echo "โทรศัพท์ ".$row["tel"]." ".'<i class="fa fa-fax"></i>'." "."  แฟกซ์  ".$row["fax"]; ?></p>
			  </div>
				<div class="col-lg-2">
				<?php echo'<a role="button" class = "btn btn-default" href="http://localhost/theam2+admin/Page.php?page='.$row["ID"].'" title="คลิกเพื่อดูรายละเอียดเพิ่มเติม" ><span class="glyphicon glyphicon-share"></span></i>เพิ่มเติม</a>';?>
                        
				</div>
				
				</div>
					   
				</div>
				 <hr>  	
					
		</div>	
	
					
					
					
			 
			 
				<?php }
			 }?>
			 
<?php $total_page = ceil($rowtotal/$perpage); ?>
			 
			 
			 

				</div>
            </div>
			</div>	
			</div>		
			
			<center>
<nav>
 <ul class="pagination pagination-lg">
 <li>
	<a href="home.php?page=1" aria-label="Previous">
	<span aria-hidden="true">&laquo;</span>
 </a>
 <li>
	<?php for($i=1;$i<=$total_page;$i++){ ?>
		<li><a href="home.php?page=<?php echo $i; ?>"><?php echo $i; ?></a></li>
	<?php } ?>
 <li>
	<a href="home.php?page=<?php echo $total_page;?>" aria-label="Next">
	<span aria-hidden="true">&raquo;</span></a>
 </li>
 </ul>
</nav>
</center>


			</div>
            <!-- /.col-md-4 -->
            <div class="col-md-3">
                
				
				
				
            </div>
            <!-- /.col-md-4 -->
        </div>

  
        <!-- /.row -->

        <!-- Footer -->
		<hr>
        <footer>
            <div class="row">
                <div class="col-lg-4">
                    <p>Copyright &copy; Your Website 2014</p>
                </div>
				<div class="col-lg-4">
                    <p>Copyright &copy; Your Website 2014</p>
                </div>
				<div class="col-lg-4">
                    <p>Copyright &copy; Your Website 2014</p>
                </div>
            </div>
        </footer>

    </div></div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>
    <script type="text/javascript" src="NotificationAjax.js"></script> 

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
	

</body>


</html>
