<?php
include('../connection.php');
?>
<!DOCTYPE html>
<html dir="ltr" lang="en">
<body>
	<div class="page-breadcrumb">
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                        <div class="ml-auto text-right">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item active" aria-current="page">ข้อมูลกล้องวงจรปิด</li>
									<li class="breadcrumb-item active" aria-current="page">แสดงข้อมูลกล้องวงจรปิด</li>

                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
				<form action='' method="post" name="detailcamera" onSubmit="JavaScript:return addlocation();" enctype="multipart/form-data" onSubmit="JavaScript:return addlocation();">
					<div class="card" align="justify">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <div id="zero_config_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4">
										<div class="row">
											<div class="col-sm-12">
												<table id="zero_config" class="table table-striped table-bordered dataTable" role="grid" aria-describedby="zero_config_info">
                                        <thead>

                                            <tr role="row" align="center">
												<th class="fa-sm" tabindex="0" aria-controls="zero_config" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 88px;" align="center">ไอดีกล้อง</th>
												<th class="fa-sm" tabindex="0" aria-controls="zero_config" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 100px;" align="center">ชื่อกล้อง</th>
												<th class="fa-sm" tabindex="0" aria-controls="zero_config" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 100px;" align="center">ยี่ห้อ</th>
												<th class="sorting cc_pointer" tabindex="0" aria-controls="zero_config" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 100px;" align="center">เลขครุภัณฑ์</th>
												<th class="fa-sm" tabindex="0" aria-controls="zero_config" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 250px;" align="center">สถานที่ติดตั้ง</th>
												<th class="fa-sm" tabindex="0" aria-controls="zero_config" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style="width: 50px;" align="center">วันที่ติดตั้ง</th>
												<th class="fa-sm" tabindex="0" aria-controls="zero_config" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" width="70" align="center">สถานะกล้อง</th>
												<th class="fa-sm" tabindex="0" aria-controls="zero_config" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" width="70" align="center"></th>
											</tr>
                                        </thead>
                                        <tbody>

<?php
$sql2 = "SELECT * FROM camera WHERE c_import ORDER BY camera.c_id ASC";
$query2= mysqli_query($conn,$sql2);
while ($result=mysqli_fetch_array($query2))
{
?>
                                        <tr role="row" class="odd" align="center">
                                                <td class="fa-sm"><?php echo $result["c_id"];?></td>
																								<td class="fa-sm"><?php echo $result["c_name"];?></td>
                                                <td class="fa-sm"><?php echo $result["c_brand"];?></td>
                                                <td class="fa-sm"><?php echo $result["c_tax"];?></td>
                                                <td class="fa-sm"><?php echo $result["lo_name_place"];?></td>
												<td class="fa-sm"><?php echo date('d-m-Y',strtotime($result["c_date"]));?></td>
                                                <td  class="fa-sm"><?php echo $result["c_status"];?></td>
												<td><div class="btn-group">
                                        		<button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">ตัวเลือก </button>
                                        		<div class="dropdown-menu">
                                            <a class="dropdown-item" href="../admin/camera_detail.php?editcam=<?php echo $result["c_id"];?>">รายละเอียด</a>
                                            <a class="dropdown-item" href="../admin/camera_edit.php?editcam=<?php echo $result["c_id"];?>">แก้ไขข้อมูล</a>
                                            <a class="dropdown-item" href="../admin/class/cam_del.php?editcam=<?php echo $result["c_id"];?>">ลบข้อมูล</a>
                                        </div>
                                    				</div>
											</td>
                                            </tr>
<?php
}
?>

</tbody>
<?php
mysqli_close($conn);
?>
									</div></div></div>
									</form>
                                </div>
								 </div>
                        </div>

        </div>
    </div>

    <!--This page JavaScript -->
<script src="../assets/libs/jquery/dist/jquery.min.js"></script>
<script src="../assets/extra-libs/DataTables/datatables.min.js"></script>
<script src="../assets/extra-libs/multicheck/datatable-checkbox-init.js"></script>
<script src="../assets/extra-libs/multicheck/jquery.multicheck.js"></script>
<script>
        /****************************************
         *       Basic Table                   *
         ****************************************/
        $('#zero_config').DataTable();
    </script>
<script>window.__vidChanged = function(state){if(state === 1) {document.body.dispatchEvent(new Event('vidChanged'))}}
if(document.querySelector('#movie_player')){document.querySelector('#movie_player').addEventListener('onStateChange', '__vidChanged');}</script>
</body>

</html>
