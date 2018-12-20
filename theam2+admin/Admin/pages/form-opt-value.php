<?php




?>


<html>


<head>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

</head>
<body>
 <select class="form-control" id="select_opt" name="select_opt">
	<option value="">เลือกจำนวนพี่น้อง</option>
	<option value="1">1</option>
	<option value="2">2</option>		
	<option value="3">3</option>
	<option value="4">4</option>
</select>

<form id="form-test" method="post">
<div class="div-1">div-1
<input type="text" name="subject" id="test1" class="form-control"></div>
<div class="div-2">div-2
<input type="text" name="subject" id="test2" class="form-control"></div>
<div class="div-3">div-3
<input type="text" name="subject" id="test3" class="form-control"></div>
<div class="div-4">div-4
<input type="text" name="subject" id="test4" class="form-control"></div>
</form>

</body>
<script>


    $('#select_opt').on('change', function () {
    if(this.value == "1"){
        $('.div-1').show();
		$('.div-2').hide();
		$('.div-3').hide();
		$('.div-4').hide();
    } else if (this.value == "2") {
		$('.div-1').show();
        $('.div-2').show();
		$('.div-3').hide();
		$('.div-4').hide();
    } else if (this.value == "3") {
		$('.div-1').show();
        $('.div-2').show();
		$('.div-3').show();
		$('.div-4').hide();
    } else if (this.value == "4"){
		$('.div-1').show();
        $('.div-2').show();
		$('.div-3').show();
		$('.div-4').show();
	} else{
		$('.div-1').hide();
        $('.div-2').hide();
		$('.div-3').hide();
		$('.div-4').hide();
		
		
	}
	});
		$('.div-1').hide();
        $('.div-2').hide();
		$('.div-3').hide();
		$('.div-4').hide();






</script>









</html>