<?php
include('../connection.php')
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
</head>

<body>
	 <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                        <h3 class="page-title">Dashboard</h3>
                        <div class="ml-auto text-right">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Library</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>

	<div class="container-fluid">
	  <div class="row">
                    <!-- Column -->
                    <div class="col-md-6 col-lg-3">
                            <div class="box bg-cyan text-center" style="height: 135px;padding: 20px">
                                <h1 class="font-light text-white"><i>
								<img src="../img/camera.png" width="50" height="50">
								<?php
								$sql1 = "SELECT * FROM camera";
								$query1 = mysqli_query($conn,$sql1);
								$result1 = mysqli_num_rows($query1);
								echo $result1;
   								?></i></h1>
                                <h6 class="text-white">จำนวนกล้องทั้งหมด</h6>
                            </div>
                    </div>
                    <!-- Column -->
                    <div class="col-md-6 col-lg-3">
                            <div class="box bg-success text-center" style="height: 135px;padding: 20px">
                                <h1 class="font-light text-white"><i>
								<img src="../img/wi-fi_connected_24px.png" width="40" height="40">
								<?php
								$sql2 = "SELECT * FROM camera WHERE c_status='ใช้งานได้'";
								$query2 = mysqli_query($conn,$sql2);
								$result2 = mysqli_num_rows($query2);
								echo $result2;
   								?></i></h1>
                                <h6 class="text-white">ใช้งานได้ทั้งหมด</h6>
                        </div>
                    </div>
                    <!-- Column -->
                    <div class="col-md-6 col-lg-2">
                            <div class="box bg-danger text-center" style="height: 135px;padding: 20px">
                                <h1 class="font-light text-white"><i>
								<img src="../img/fix.png" width="40" height="40">
								<?php
								$sql3 = "SELECT * FROM camera WHERE c_status='กำลังซ่อมแซม'";
								$query3 = mysqli_query($conn,$sql3);
								$result3 = mysqli_num_rows($query3);
								echo $result3;
   								?>
									</i></h1>
                                <h6 class="text-white">กำลังซ่อมแซม</h6>
                            </div>
                    </div>
		  <div class="col-md-6 col-lg-2">
                        <div class="card card-hover">
                            <div class="box bg-warning text-center" style="height: 135px;padding: 20px">
                                <h1 class="font-light text-white"><i>
								<img src="../img/data_backup_64px.png" width="40" height="40">
								<?php
								$sql4 = "SELECT * FROM fixing ";
								$query4 = mysqli_query($conn,$sql4);
								$result4 = mysqli_num_rows($query4);
								echo $result4;
   								?></i></h1>
                                <h6 class="text-white">ประวัติกล้องเสียหาย</h6>
                            </div>
                        </div>
                    </div>
		  <div class="col-md-6 col-lg-2">
                        <div class="card card-hover">
                            <div class="box bg-warning text-center">
                                <p align="left" style="color: white;font-size: 15px;text-align: left">ชำรุด :<?php
								$sql5 = "SELECT * FROM fixing WHERE f_note ='ชำรุดเสียหาย' ";
								$query5 = mysqli_query($conn,$sql5);
								$result5 = mysqli_num_rows($query5);
								echo $result5;
   								?></p>
								<p align="left" style="color: white;font-size: 15px;text-align: left">สูญหาย :<?php
								$sql6 = "SELECT * FROM fixing WHERE f_note ='สูญหาย' ";
								$query6 = mysqli_query($conn,$sql6);
								$result6 = mysqli_num_rows($query6);
								echo $result6;
   								?></p>
								<p align="left" style="color: white;font-size: 15px;text-align: left">ส่งเคลม :<?php
								$sql7 = "SELECT * FROM fixing WHERE f_note ='ส่งเคลม' ";
								$query7 = mysqli_query($conn,$sql7);
								$result7 = mysqli_num_rows($query7);
								echo $result7;
   								?></p>
                            </div>
                        </div>
                    </div>

		  <div class="col-md-6" align="center">
                        <div class="card">
                            <div class="card-body">
															<h4 align="left">
																ข้อมูลการเพิ่มกล้องวงจรปิด
															</h4>
                                <?php include('../include/chart1.php');?>
                            </div>
                        </div>
                    </div>
		  <div class="col-md-6" align="center">
                        <div class="card">
                            <div class="card-body">
															<h4 align="left">
															ข้อมูลการซ่อมกล้องวงจรปิด
														</h4>
                                <?php include('../include/chart2.php');?>
                            </div>
                        </div>
                    </div>
                </div></body>
</html>
