<?php
	require_once("/conn.php");
	session_start();    
	$member_token = $_SESSION['member_token'];

//fetch.php;
if(isset($_POST["view"]))
{
 include("conn.php");
 if($_POST["view"] != '')
 {
  $update_query = "UPDATE notification_db SET non_status=1 WHERE non_status=0 AND token = '".$member_token."'";
  mysqli_query($dbcon, $update_query);
 }
 $query = "SELECT * FROM notification_db WHERE token = '".$member_token."' ORDER BY msg_id DESC LIMIT 5";
 $result = mysqli_query($dbcon, $query);
 $output = '';
 
 if(mysqli_num_rows($result) > 0)
 {
  while($row = mysqli_fetch_array($result))
  {
   $output .= '     

   <li>
    <a href="#">
     <strong>'.$row["msg_txt"].'</strong><br />
     <small><em>'.$row["msg_txt"].'</em></small>
    </a>
   </li>
   <li class="divider"></li>
   ';
  }
 }
 else
 {
  $output .= '<li><a href="#" class="text-bold text-italic">No Notification Found</a></li>';
 }
 
 $query_1 = "SELECT * FROM notification_db WHERE non_status=0 AND token = '".$member_token."'";
 $result_1 = mysqli_query($dbcon, $query_1);
 $count = mysqli_num_rows($result_1);
 $data = array(
  'notification'   => $output,
  'unseen_notification' => $count
 );
 echo json_encode($data);
}
?>

