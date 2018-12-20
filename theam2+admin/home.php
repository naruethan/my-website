<?php
//home.php

session_start();
require('/header.php');
require('/confic/conn.php');

if($_SESSION["username"] == null){
	echo'<META HTTP-EQUIV="Refresh" CONTENT="0;URL=http://localhost/theam2+admin/index.php">';
}
if(!isset($_SESSION["username"])){
	
	header("location: index.php");
}



$qurry_token = $_SESSION["username"];
$_SESSION['member_token'] = $qurry_token;

$perpage = 7;
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
<!DOCTYPE html>
<html lang="en">  
<body>
<div class="container-main">	
<!--body -->	
<div class="body-main">
   <div class="row">
	 <div class="container-fluid">
	 <div class="col-md-12">	 
	   <div class="well-com">
			<div class="well text-center" style="background-color: #4CAF50; padding: 10px;">ยินดีต้อนรับนักศึกษา <strong>นายนฤธรรม์ เถินบุรินทร์</strong>
			เข้าสู่เว็บไซต์งานสหกิจศึกษาประจำหลักสูตรวิศวกรรมคอมพิวเตอร์<br>มหาวิทยาลัยเทคโนโลยีราชมงคล ล้านนา ตาก			
			</div>
		</div>
		

	   <div class="about">
		<div class="row">

			<div class="col-md-12">
			<div class="panel panel-primary">
				<div class="panel-heading">
					<h4 style="margin-top: 1px;margin-bottom: 1px;">เกี่ยวกับเว็บไซต์</h4>
				</div>
				<div class="panel-body">&nbsp;&nbsp;เว็บไซต์งานสหกิจประจำหลักสูตรวิศวกรรมคอมพิวเตอร์ มหาวิทยาลัยเทคโนโลยีราชมงคล ล้านนา ตาก คือเว็บไซต์ที่จัดทำขึ้นเพื่อรวบรวมข้อมูลต่างๆที่เกี่ยวข้องกับงานสหกิจของหลักสูตรวิศวกรรมคอมพิวเตอร์ เพื่อให้เป็นประโยชน์ต่อนักศึกษาที่เข้ามาใช้บริการทางเว็บไซต์ไม่วาจะเป็นในเรื่องของการสมัครเข้าร่วมโครงการสหกิจศึกษาหรือในเรื่องของการค้นหาข้อมูลบริษัทตามที่นักศึกษาต้องการ โดยเว็บไซต์ได้มีการรวบรวมข้อมูลของบริษัทและสถานประกอบ เช่น ชื่อบริษัทหรือสถานประกอบการ ที่อยู่ แผนที่ เป็นต้น และนักศึกษาสามารถค้นหาข้อมูลบริษัทหรือสถานประกอบการที่ต้องการได้ และสามารถกรอกแบบฟอร์มการสมัครเข้าร่วมโครงการสหกิจศึกษาได้<br></p> 
					<br>&nbsp;&nbsp;ดังนั้นทางผู้จัดทำหวังไว้ว่าเว็บไซต์งานสหกิจประจำหลักสูตรวิศวกรรมคอมพิวเตอร์ มหาวิทยาลัยเทคโนโลยีราชมงคล ล้านนา ตาก จะเป็นประโยชน์ต่อนักศึกษาที่เข้ามาใช้งานเว็บไซต์และได้รับข้อมูลตามที่ต้องการหรือช่วยตัดสินใจในการหาสถานที่ออกสหกิจศึกษา รวมถึงความสะดวกสบายในการใช้งานเว็บไซต์อีกด้วย หากพบข้อผิดพลาดสามารถแจ้งผู้จัดทำเว็บไซต์ได้ตามช่องทางติดต่อในเว็บไซต์ได้ทันที</p>
				</div>
			</div>
			</div>		
	      </div> <!--col-md-12-->
	    </div><!--about-->
	
	<div class="row"> <!--row--> 
	 <div class="col-md-8"><!--col-md-8--> 
	  <div class="main-post">	<!--main-post--> 
		  <div class="titlt-loop"><!--titlt-loop--> 
		   <span class="glyphicon glyphicon-list"></span>
		          สถานที่ฝึกงานอัพเดทล่าสุด
		  </div><!--titlt-loop--> 
		  
		  <div class="loop-post-data"><!--loop-post-->
		  <?php
			 $i = 1;
			 if (mysqli_num_rows($result_qurry) > 0) {				 
				while($row = mysqli_fetch_assoc($result_qurry)) { ?>
		<div class="loop-post">
			<div class="container">	  
				<h4><?php echo '<a href="http://localhost/theam2+admin/Page.php?page='.$row["ID"].'" title="'.$row["title"].'" style="color: white;">'.$row["title"].'</a>';?></h4>
				  
				<p><span class="glyphicon glyphicon-map-marker"></span><?php echo "ที่อยู่ ".$row["Address"]; ?></p>	        
				<div class="row">
			  <div class="col-sm-6">
				<p><span class="glyphicon glyphicon-earphone"></span><?php echo "โทรศัพท์ ".$row["tel"]." ".'<i class="fa fa-fax" style="padding: 0;width: 20;"></i>'." "."  แฟกซ์  ".$row["fax"];?></p>
			  </div>
				<div class="col-sm-2">
				<?php echo'<a role="button" class = "btn btn-default" href="http://localhost/theam2+admin/Page.php?page='.$row["ID"].'" title="คลิกเพื่อดูรายละเอียดเพิ่มเติม" ><span class="glyphicon glyphicon-share"></span></i>เพิ่มเติม</a>';?>
                        
				</div>
				
				</div>
					   
			</div>
				 <hr>
				 </div>	
	
					
					
					
			 
			 
				<?php }
			 }?>
			 
<?php $total_page = ceil($rowtotal/$perpage); ?>

		
			
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

		  
		  </div><!--loop-post-->
		 </div>	<!--main-post--> 
	 </div><!--col-md-8--> 
		
		
		
	
		<div class="col-md-4"><!--Left side-->

		<div class="widget-sidebar2">
			<h2 class="title-widget-sidebar">ข้อมูลผู้ใช้งาน</h2>
			<div class="info">
			<p>รหัสนักศึกษา : 56243206006-8</p>  
			<p>นายนฤธรรม์   เถินบุรินทร์</p>
			<p>สถานะ  :  ยังไม่ได้สมัครเข้าร่วมโครงการ</p>
			<p>ข้อความแจ้งเตือน</p>			
<button type="button" class="btn btn-warning" style="border-radius: 0px;border-radius: 5px;background-color: #F39C12;margin-top: 15px;">จัดการข้อมูลส่วนตัว</button>
			</div>
        </div>  
			<div class="sidebar" style="background-color: wheat;">
			 <div class="widget-sidebar">
              <h2 class="title-widget-sidebar">เมนูอื่นๆ</h2>
				 <button class="categories-btn">วิธีการใช้งานเว็บไซต์</button>
                 <button class="categories-btn"><a href="http://localhost/theam2+admin/uploadfile.php" style="color: white;">อัพโหลดไฟล์เอกสาร</a></button>
                 <button class="categories-btn">ดาว์โหลดเอกสาร</button>
                 <button class="categories-btn">คลังรูปภาพ</button> 
			 
             </div>
			</div>
			<div class="fb-fan" style="padding-top: 35;">
			<h2 class="title-widget-sidebar">facebook fanPage</h2>			
			  <div id="fb-root"></div>
				<script>(function(d, s, id) {
				var js, fjs = d.getElementsByTagName(s)[0];
				if (d.getElementById(id)) return;
				js = d.createElement(s); js.id = id;
				js.src = 'https://connect.facebook.net/th_TH/sdk.js#xfbml=1&version=v2.11';
				fjs.parentNode.insertBefore(js, fjs);}(document, 'script', 'facebook-jssdk'));
			    </script>
              <div class="fb-page" data-href="https://www.facebook.com/pr.tak.rmutl/" data-tabs="timeline" data-height="350" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="false"><blockquote cite="https://www.facebook.com/pr.tak.rmutl/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/pr.tak.rmutl/">งานประชาสัมพันธ์ มทร.ล้านนา ตาก</a></blockquote></div>			
		    </div>
		</div><!--Left side-->	
	</div><!--row--> 
	 
	 <br>
	 <br>
	 <br>
	 
	 
	 
	 </div><!--col-md-12 -->

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