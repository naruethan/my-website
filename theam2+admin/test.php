<?php
require('/confic/conn.php');

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


echo $rowtotal;
echo $rowtotal_qurry;



if (mysqli_num_rows($result_qurry) > 0) {
	
	while($row = mysqli_fetch_assoc($result_qurry)) {
		
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
		<a role="button" class = "btn btn-success" href="http://localhost/kwin/page2.php?page='.$row["ID"].'" title="view" ><i class="fa fa-eye fa-fw"></i>ดูหน้าโพสนี้</a>
		<a role="button" class = "btn btn-warning" href="http://localhost/theam2+admin/Admin/pages/edit.php?page='.$row["ID"].'" title="Edit" ><i class="fa fa-edit fa-fw"></i>แก้ไขข้อมูล</a>
		<a role="button" class = "btn btn-danger" href="http://localhost/theam2+admin/Admin/pages/dalete-data.php?page='.$row["ID"].'" title="delete" ><i class="fa fa-minus fa-fw"></i>ลบโพสนี้</a>
		</div>';

        echo '</div>';		
		echo '</div>';	
		echo '<hr style="border: 1px solid rgba(12, 9, 9, 0.32);">';
		$i=$i+1;
	}
	
	
}	

$total_page = ceil($rowtotal/$perpage);

?>
<nav>
 <ul class="pagination">
 <li>
 <a href="test.php?page=1" aria-label="Previous">
 <span aria-hidden="true">&laquo;</span>
 </a>
 </li>
 <?php for($i=1;$i<=$total_page;$i++){ ?>
 <li><a href="test.php?page=<?php echo $i; ?>"><?php echo $i; ?></a></li>
 <?php } ?>
 <li>
 <a href="test.php?page=<?php echo $total_page;?>" aria-label="Next">
 <span aria-hidden="true">&raquo;</span>
 </a>
 </li>
 </ul>
 </nav>
 <script src="bootstrap/js/bootstrap.min.js"></script>
