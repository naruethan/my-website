<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
 
  <script type="text/javascript" src="validation.min.js"></script>

</head>
<body>

<div class="container">
  <h2>Form control: input</h2>
  <p>The form below contains two input elements; one of type text and one of type password:</p>
  <form id="from-input" method="POST" action="pdf-check.php">
   <div class="checkbox">
      <label><input id="myCheck" name="op1[]" type="checkbox" value="Excel">Excel</label>
	   <br>
	  <label for="sel1">กรุณาเลือกระดับ</label>
		<select id="select_opt" name="select_opt" >
		   	
			<option value="ดีมาก">ดีมาก</option>
			<option value="ดี">ดี</option>
			<option value="พอใช้">พอใช้</option>
			<option value="แย่">แย่</option>
			<option selected="selected" value=""></option>
		</select>
     </div>
    <div class="checkbox">
      <label><input name="op1[]" type="checkbox" value="word">word</label>
	  <br>
	  <label for="sel1">กรุณาเลือกระดับ</label>
		<select id="select_opt2" name="select_opt2" >
		   	<option value="ดีมาก">ดีมาก</option>
			<option value="ดี">ดี</option>
			<option value="พอใช้">พอใช้</option>
			<option value="แย่">แย่</option>
			<option selected="selected" value=""></option>
		</select>
    </div>
	<div class="checkbox">
      <label><input name="op1[]" type="checkbox" value="PPT">PPT</label>
	  <br>
	  <label for="sel1">กรุณาเลือกระดับ</label>
		<select id="select_opt3" name="select_opt3" >
		   	<option value="ดีมาก">ดีมาก</option>
			<option value="ดี">ดี</option>
			<option value="พอใช้">พอใช้</option>
			<option value="แย่">แย่</option>
			<option selected="selected" value=""></option>
		</select>
    </div>
	<div class="checkbox">
      <label><input name="op1[]" type="checkbox" value="other">อื่นๆ   </label>
	   <input name="text-other" type="text" value="" size="20" placeholder="โปรดระบุ">
	   
	  <label for="sel1">กรุณาเลือกระดับ</label>
		<select id="select_opt4" name="select_opt4" >
		   	<option value="ดีมาก">ดีมาก</option>
			<option value="ดี">ดี</option>
			<option value="พอใช้">พอใช้</option>
			<option value="แย่">แย่</option>
			<option selected="selected" value=""></option>
		</select>
       
    </div>
	<button type="submit" onclick="myFunction()2" class="btn btn-info">Button</button>
	  
	
  </form>
</div>
<?php
if(empty($_POST["op1"][1])){
if(isset($_POST["select_opt"]) != null){
	
	
		echo "<script>alert('รหัสนักศึกษา หรือ รหัสผ่าน ไม่ถูกต้อง ')  </script>";
	}

}
		
?>
<script>
function myFunction() {
	
    document.getElementById("myCheck").required = true;
    
}
</script>


</body>
</html>