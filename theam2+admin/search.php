<?php

session_start();
error_reporting(-1);
require('/header.php');
require('/confic/conn.php');
if(!isset($_SESSION["username"]))   {
	
	header("location: index.php");
	}

	
$search_year = $_GET['search_year'];


$txt_search = $_GET['txtKeyword'];
$search_opt = $_GET['search_opt'];
$search_city = $_GET['search_city'];
$search_term = $_GET['search_trem'];
$search_year = $_GET['search_year'];

//echo $txt_search;
//echo $search_opt;
//echo $search_city;

if ($search_opt == 'title' && $search_city != ""){
	
$txt_result="select * from data_db where title LIKE '%$txt_search%' and City_data='$search_city'";	
	//echo 1.1;

}else if($search_opt == 'title' && $search_city == ""){
	
$txt_result="select * from data_db where title LIKE '%$txt_search%'";
	//echo "search_city is em";
}

if ($search_opt == 'GroupComp' && $search_city != ""){	
	$txt_result="select * from data_db where GroupComp LIKE '%$txt_search%' and City_data='$search_city'";	
	//echo 2.1;	
	
}else if($search_opt == 'GroupComp' && $search_city == ""){
	$txt_result="select * from data_db where GroupComp LIKE '%$txt_search%'";
	//echo "search_city is em 2 ";
}


if ($search_term == '1' && $search_year != ""){	
	$txt_result="select * from data_db where Term= '1' and Years='$search_year'";	

	
}else if($search_term == '1' && $search_year == ""){
	$txt_result="select * from data_db where Term= '1'";

}

if ($search_term == '2' && $search_year != ""){	
	$txt_result="select * from data_db where Term= '2' and Years='$search_year'";	

	
}else if($search_term == '2' && $search_year == ""){
	$txt_result="select * from data_db where Term= '2'";

}
if ($search_term == '' && $search_year != ""){	
	$txt_result="select * from data_db where Years='$search_year'";	

	
}




$txt_data_result = mysqli_query($dbcon,$txt_result);


?>
<html>
<body>

<div class="container-main" style="background-color: #ffffff;"> 
<div class="container">
<form name="frmSearch" method="get" action="<?php echo $_SERVER['SCRIPT_NAME'];?>">
<br>
  <div class="col-lg-8">
    <div class="input-group">
      <span class="input-group-addon">ค้นหา</span>
      <input class="form-control" name="txtKeyword" type="text" id="txtKeyword" placeholder="ใส่ชื่อคำที่ต้องการค้นหา" value="">
      <span class="input-group-btn">
		<button  class="btn btn-default col-xs-12" type="submit" value="ค้นหา">		
		<span class="glyphicon glyphicon-search"></span>ค้นหา</button>	  
	  </span>
    </div>
  </div>
  <br>  
  <br>
  <label>ตัวกรองค้นหา</label>
  <br> 
  <div class="col-lg-8">
    
      <div class="input-group"><span class="input-group-addon">ประเภทสถานประกอบการ</span>
		<select class="form-control" id="search_opt" name="search_opt">
				<option value="title">บริษัท</option>		
				<option value="GroupComp">นิคมอุตสาหกรรม</option>				
	   </select>
        <span class="input-group-addon">จังหวัด</span>
				
			<select class="form-control" id="search_city" name="search_city">
				<option value="">เลือกจังหวัดที่ต้องการ</option>					
				<option value="กรุงเทพมหานคร">กรุงเทพมหานคร</option> 
				<option value="กระบี่">กระบี่</option> 
				<option value="กาญจนบุรี">กาญจนบุรี</option>	
				<option value="กาฬสินธุ์">กาฬสินธุ์ </option>
				<option value="กำแพงเพชร">กำแพงเพชร</option> 
				<option value="ขอนแก่น">ขอนแก่น</option> 
				<option value="จันทบุรี">จันทบุรี</option>  
				<option value="ฉะเชิงเทรา">ฉะเชิงเทรา</option> 
				<option value="ชลบุรี">ชลบุรี</option> 
				<option value="ชัยนาท">ชัยนาท</option> 
				<option value="ชัยภูมิ">ชัยภูมิ</option> 
				<option value="ชุมพร">ชุมพร</option> 
				<option value="เชียงราย">เชียงราย</option> 
				<option value="เชียงใหม่">เชียงใหม่</option> 
				<option value="ตรัง">ตรัง</option> 
				<option value="ตราด">ตราด </option>
				<option value="ตาก">ตาก</option> 
				<option value="นครนายก">นครนายก</option> 
				<option value="นครปฐม">นครปฐม</option> 
				<option value="นครพนม">นครพนม</option> 
				<option value="นครราชสีมา">นครราชสีมา</option> 
				<option value="นครศรีธรรมราช">นครศรีธรรมราช</option> 
				<option value="นครสวรรค์">นครสวรรค์ </option>
				<option value="นนทบุรี">นนทบุรี</option> 
				<option value="นราธิวาส">นราธิวาส</option> 
				<option value="น่าน">น่าน</option> 
				<option value="บึงกาฬ">บึงกาฬ</option> 
				<option value="บุรีรัมย์">บุรีรัมย์</option> 
				<option value="ปทุมธานี">ปทุมธานี</option> 
				<option value="ประจวบคีรีขันธ์">ประจวบคีรีขันธ์</option> 
				<option value="ปราจีนบุรี">ปราจีนบุรี</option> 
				<option value="ปัตตานี">ปัตตานี</option> 
				<option value="พระนครศรีอยุธยา">พระนครศรีอยุธยา</option> 
				<option value="พังงา">พังงา</option> 
				<option value="พัทลุง">พัทลุง</option> 
				<option value="พิจิตร">พิจิตร</option> 
				<option value="พิษณุโลก">พิษณุโลก</option> 
				<option value="เพชรบุรี">เพชรบุรี</option> 
				<option value="เพชรบูรณ์ ">เพชรบูรณ์</option> 
				<option value="แพร่">แพร่</option> 
				<option value="พะเยา">พะเยา</option> 
				<option value="ภูเก็ต">ภูเก็ต</option> 
				<option value="มหาสารคาม">มหาสารคาม</option> 
				<option value="มุกดาหาร">มุกดาหาร</option> 
				<option value="แม่ฮ่องสอน">แม่ฮ่องสอน</option>
				<option value="ยะลา">ยะลา</option> 
				<option value="ยโสธร">ยโสธร</option> 
				<option value="ร้อยเอ็ด">ร้อยเอ็ด</option> 
				<option value="ระนอง">ระนอง</option> 
				<option value="ระยอง">ระยอง</option> 
				<option value="ราชบุรี">ราชบุรี</option>
				<option value="ลพบุรี">ลพบุรี</option> 
				<option value="ลำปาง">ลำปาง</option> 
				<option value="ลำพูน">ลำพูน</option> 
				<option value="เลย">เลย</option> 
				<option value="ศรีสะเกษ">ศรีสะเกษ</option> 
				<option value="สกลนคร">สกลนคร</option> 
				<option value="สงขลา">สงขลา</option> 
				<option value="สตูล">สตูล</option> 
				<option value="สมุทรปราการ">สมุทรปราการ</option> 
				<option value="สมุทรสงคราม">สมุทรสงคราม</option> 
				<option value="สมุทรสาคร">สมุทรสาคร</option> 
				<option value="สระแก้ว">สระแก้ว</option> 
				<option value="สระบุรี">สระบุรี</option> 
				<option value="สิงห์บุรี">สิงห์บุรี</option> 
				<option value="สุโขทัย">สุโขทัย</option> 
				<option value="สุพรรณบุรี">สุพรรณบุรี</option> 
				<option value="สุราษฎร์ธานี">สุราษฎร์ธานี</option> 
				<option value="สุรินทร์ ">สุรินทร์</option> 
				<option value="หนองคาย">หนองคาย</option> 
				<option value="หนองบัวลำภู">หนองบัวลำภู</option> 
				<option value="อ่างทอง">อ่างทอง</option> 
				<option value="อุดรธานี">อุดรธานี</option> 
				<option value="อุทัยธานี">อุทัยธานี</option> 
				<option value="อุตรดิตถ์ ">อุตรดิตถ์</option> 
				<option value="อุบลราชธานี">อุบลราชธานี</option>
				<option value="อำนาจเจริญ">อำนาจเจริญ</option>				
	   </select>

	   	   
      </div>
	  	   <div class="input-group"><span class="input-group-addon">ภาการศึกษาที่ </span>
			<select class="form-control" id="search_trem" name="search_trem">
			    <option value=""></option>
			 	<option value="1">1</option>		
				<option value="2">2</option>				
			</select>

		<span class="input-group-addon">ปีการศึกษาที่ </span>
			<select class="form-control" id="search_year" name="search_year">	
				<option value=""></option>			
				<option value="2559">2559</option>
				<option value="2559">2558</option>	
				<option value="2559">2557</option>	
				<option value="2559">2556</option>					
			</select>
		</div>
    <br>
  </div> 
<br>

<br> 	

<br>
<div class="row">
 <div class="col-md-8">
			 <!-- for loop-->
			   <label>จำนวนที่ค้นหาเจอทั้งหมด <?php echo mysqli_num_rows($txt_data_result)  ?></label>
			  <?php
			 $i = 1;
			 if (mysqli_num_rows($txt_data_result) > 0) {				 
				while($row = mysqli_fetch_assoc($txt_data_result)) { ?>
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
</div>
</div>
</form>
</div>
</div>
</body>

    <script src="js/jquery.js"></script>
    <script type="text/javascript" src="NotificationAjax.js"></script> 

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
	<?php
  
  require('/footer.php');
  
  
  ?>
</html>