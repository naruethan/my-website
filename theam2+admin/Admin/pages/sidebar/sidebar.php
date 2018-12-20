        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="http://localhost/theam2+admin/index.php">หน้าจัดการเว็บไซต์งานสหกิจศึกษาประจำหลักสูตรวิศวกรรมคอมพิวเตอร์ 
มหาวิทยาลัยเทคโนโลยีราชมงคลล้านนา ตาก
</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">               

               
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="http://localhost/theam2+admin/logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->
<!-- ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                            </div>
                            <!-- /input-group -->
                        </li>
                        <li>
                            <a href="index.php"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>
						
                        <li>
                            <a href="forms.php"><i class="fa fa-edit fa-fw"></i>จัดการโพสข้อมูล</a>
							
                        </li>
                        <li>
						    <a href="http://localhost/theam2+admin/Admin/pages/tables.php"><i class="fa fa-table fa-fw"></i>ตารางข้อมูลสมาชิก<span class="fa arrow"></span></a>                            
							<ul class="nav nav-second-level">
                                <li>
                                    <a href="tables.php">ข้อมูลสมาชิก</a>
                                </li>
                                <li>
                                    <a href="adduser.php">เพิ่มสมาชิก</a>
                                </li> 
								<li>
                                    <a href="#">แก้ไข/ลบ สมาชิก</a>
                                </li>  								
                            </ul>
							
                        </li>
						<li>
                            <a href="satatus.php"><i class="fa fa-info fa-fw"></i>จัดการสถานะสมาชิก</a>
                        </li>
                      
                        
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>