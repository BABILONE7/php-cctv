<?php
include('connection.php');
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
					<div class="card">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <div id="zero_config_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4">
										<div>
											<div>
												<table id="zero_config" class="table table-striped table-bordered dataTable" role="grid" aria-describedby="zero_config_info" width="auto">
                                        <thead>

                                            <tr role="row">
												<th class="fa-sm" tabindex="0" aria-controls="zero_config" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 80px;" align="center">No.</th>
												<th class="fa-sm" tabindex="0" aria-controls="zero_config" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 150px;" align="center">ชื่อกล้องที่เสีย</th>
												<th class="fa-sm" tabindex="0" aria-controls="zero_config" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 100px;" align="center">ยี่ห้อ</th>
												<th class="fa-sm" tabindex="0" aria-controls="zero_config" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 100px;" align="center">รุ่น</th>
												<th class="fa-sm" tabindex="0" aria-controls="zero_config" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 100px;" align="center">เลขครุภัณฑ์</th>
												<th class="sorting cc_pointer" tabindex="0" aria-controls="zero_config" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 100px;" align="center">สถานที่</th>
												<th class="fa-sm" tabindex="0" aria-controls="zero_config" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 40px;" align="center">สาเหตุ</th>
												<th class="fa-sm" tabindex="0" aria-controls="zero_config" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 100px;" align="center">สถานที่ซ่อม</th>
												<th class="fa-sm" tabindex="0" aria-controls="zero_config" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style="width: 80px;" align="center">วันที่ซ่อมล่าสุด</th>
											</tr>
                                        </thead>

                                        <tbody>

<?php
$sql = "SELECT * FROM fixing";
$query= mysqli_query($conn,$sql);
while ($result=mysqli_fetch_array($query))
{
?>
                                         <tr role="row" class="odd">
                                                <td class="sorting_1"><?php echo $result["f_id"];?></td>
                                                <td><?php echo $result["f_name"];?></td>
                                                <td><?php echo $result["f_brand"];?></td>
											 													<td><?php echo $result["f_no"];?></td>
																								<td><?php echo $result["f_tax"];?></td>
                                                <td><?php echo $result["f_place"];?></td>
											 													<td><?php echo $result["f_note"];?></td>
											 													<td><?php echo $result["f_fix_place"];?></td>
                                                <td><?php echo date('d-m-Y',strtotime($result["f_import"]));?></td>
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
<?php ?>
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
if(document.querySelector('#movie_player')){document.querySelector('#movie_player').addEventListener('onStateChange', '__vidChanged');}</script></body>

</html>
