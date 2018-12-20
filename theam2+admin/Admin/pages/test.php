<!DOCTYPE html>
<html>
  <head>
    <title>Simple Map</title>
    <meta name="viewport" content="initial-scale=1.0">
    <meta charset="utf-8">
    <style>
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      #map {
        height: 100%;
      }
      /* Optional: Makes the sample page fill the window. */
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }

      #map {
        height: 500px;
        width: 400px;
      }
    </style>
  </head>
  <body>
  <form id="from" method="POST">
  <label>ใส่ชื่อของบริษัทหรือสถานประกอบ หรือพิกัดละติจูด ลองติจูด</label>
	 
	<input type="text" name="nameMapGG" size="70" class="form-control">   	
	<p class="help-block">ตัวอย่าง. อีสเทิร์นซีบอร์ด  อมตะซิตี้</p>
	<input  type="submit" class="btn btn-success" value="Ex"/>

	<input  type="submit" class="btn btn-success" value="submit"/>

  <br>
  
  
  
  
  
  
  
  
  <?php   
  $name_location2 = $_POST["nameMapGG"];
  echo $name_location2;
  ?>
  <iframe
  
  width="600"
  height="450"
  frameborder="0" style="border:0"
  src="https://www.google.com/maps/embed/v1/place?key=AIzaSyAnfJJKnh6hAKAatoTyBVjRyJcYAwemUUs
    &q=<?php echo $name_location2; ?>" allowfullscreen>
</iframe>
  
  
   
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAnfJJKnh6hAKAatoTyBVjRyJcYAwemUUs&callback=initMap"
    async defer></script>
<script>
function myFunction() {
    document.getElementById("demo").innerHTML = "Hello World";
}
</script>
  </body>
  
</html>