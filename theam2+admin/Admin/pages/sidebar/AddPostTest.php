<!DOCTYPE html>
<?php
require('/header/header.php');
require('/sidebar/sidebar.php');
?>
<html lang="en">

<body>

     <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">เพิ่มข้อมูลสถานประกอบการ</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                      
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <form role="form" method="POST">
                                        <div class="form-group">
                                            <label>ชื่อบริษัทหรือสถานประกอบการ</label>
                                            <input name="TitleCompany" type="text" maxlength="150"  class="form-control">
                                            <p class="help-block">ตัวอย่าง. บริษัทคาวาซากิ มอเตอร์ เอ็นเตอร์ไพรส์ (ประเทศไทย) จํากัด</p>
                                        </div>	
										<div class="form-group">
										<label>ที่อยู่หรือที่ตั้งสถานประกอบการ</label><br>
										<div class="col-lg-12">
											<label>ชื่อนิคมอุตสาหกรรม</label>
											<input name="TitleGroupCompany" type="text" maxlength="200" class="form-control">     	
											<p class="help-block">ตัวอย่าง. อีสเทิร์นซีบอร์ด  อมตะซิตี้</p>
											<label>ที่อยู่</label>
											<input name="AddressCompany" type="text" maxlength="200" class="form-control">     	
											<p class="help-block">ตัวอย่าง. 119/10 หมู่ 4 ตำบลปลวกแดง อำเภอปลวกแดง จังหวัดระยอง 21140</p>
											<div class="row">
											<div class="col-md-6">
												<label>เบอร์โทรศัพท์</label>
												<input name="TelCompany" type="text" maxlength="200" class="form-control">     	
												<p class="help-block">ตัวอย่าง. 038-955-040-58</p>
											</div>
											<div class="col-md-6">
											     <label>หมายเลขแฟกซ์</label>
												<input name="FaxCompany" type="text" maxlength="150" class="form-control">     	
												<p class="help-block">ตัวอย่าง. 0-3895-5059</p>
											</div>
											</div>
											<br>
											
										</div> 											
										</div> 	
					
									<div class="form-group">										
										<label>แผนที่</label>	
										<div class="col-lg-12">
										<div class="form-group">
										
											<label>ใส่ชื่อของบริษัทหรือสถานประกอบ หรือพิกัดละติจูด ลองติจูด</label>
											<input type="text" name="nameMapGG" size="70" class="form-control"> 
											<p class="help-block">ตัวอย่าง. อีสเทิร์นซีบอร์ด  อมตะซิตี้</p>
											
										</div> 	
										</div>
								</form>
									</div> 	
										<label>ข้อมูลนักศึกษาที่ออกสหกิจกับสถานประกอบการนี้</label>	
										<div class="form-group">                                     
					  					  <div class="col-md-6">
												<div class="form-group">
													<label for="focusedInput">คนที่ 1 </label>
													<label for="focusedInput">   ชื่อ</label>
													<input name="NameStudent1" type="text" maxlength="200" size="60" type="text" class="form-control">
												</div>													
											</div>
												<div class="col-md-6">
													<div class="form-group">
														<label for="focusedInput">เบอร์โทรศัพท์ </label>										
														 <input name="NameTel1" type="text" maxlength="150" size="60" type="text" class="form-control">
													</div>
												</div>
		                                </div>	
										<div class="form-group">                                     
					  					  <div class="col-md-6">
												<div class="form-group">
													<label for="focusedInput">คนที่ 2 </label>
													<label for="focusedInput">   ชื่อ</label>
													<input name="NameStudent2" type="text" maxlength="200" size="60" type="text" class="form-control">
												</div>													
											</div>
												<div class="col-md-6">
													<div class="form-group">
														<label for="focusedInput">เบอร์โทรศัพท์ </label>										
														 <input name="NameTel2" type="text" maxlength="150" size="60" type="text" class="form-control">
													</div>
												</div>		
                                        </div>	
										<div class="form-group">                                     
					  					  <div class="col-md-6">
												<div class="form-group">
													<label for="focusedInput">คนที่ 3 </label>
													<label for="focusedInput">   ชื่อ</label>
													<input name="NameStudent3" type="text" maxlength="200" size="60" type="text" class="form-control">
												</div>													
											</div>
												<div class="col-md-6">
													<div class="form-group">
														<label for="focusedInput">เบอร์โทรศัพท์ </label>										
														 <input name="NameTel3" type="text" maxlength="150" size="60" type="text" class="form-control">
													</div>
												</div>		
                                        </div>	
																				<div class="form-group">                                     
					  					  <div class="col-md-6">
												<div class="form-group">
													<label for="focusedInput">คนที่ 4 </label>
													<label for="focusedInput">   ชื่อ</label>
													<input name="NameStudent4" type="text" maxlength="200" size="60" type="text" class="form-control">
												</div>													
											</div>
												<div class="col-md-6">
													<div class="form-group">
														<label for="focusedInput">เบอร์โทรศัพท์ </label>										
														 <input name="NameTel4" type="text" maxlength="150" size="60" type="text" class="form-control">
													</div>
												</div>		
                                        </div>	
										<label>ภาคเรียนและปีการศึกษาที่ออกสหกิจ</label>	
										<div class="form-group">                                     
					  					  <div class="col-md-6">
												<div class="form-group">
													<label for="focusedInput">ภาคเรียนที่ </label>								
													<input name="Term" type="text" maxlength="200" size="60" type="text" class="form-control">
												</div>													
											</div>
												<div class="col-md-6">
													<div class="form-group">
														<label for="focusedInput">ปีการศึกษา </label>										
														 <input name="Years" type="text" maxlength="150" size="60" type="text" class="form-control">
													</div>
												</div>
												<center>
												<input  type="submit" class="btn btn-success" value="ตกลง"/>
												<input  type="button" class="btn" value="ยกเลิก" onclick="window.location.href='/theam2+admin/Admin/pages/forms.php'" />
												</center>
		                                </div>										
                                        
                                    </form>
                                </div>
                                <!-- /.col-lg-6 (nested) -->
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="../vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

</body>

</html>
