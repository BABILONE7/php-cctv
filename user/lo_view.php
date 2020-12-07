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
                                    <li class="breadcrumb-item active" aria-current="page">ข้อมูลสถานที่</li>
									<li class="breadcrumb-item active" aria-current="page">แสดงข้อมูลสถานที่</li>

                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
				<form action='' method="post" name="detaillocation" onSubmit="JavaScript:return addlocation();" enctype="multipart/form-data" onSubmit="JavaScript:return addlocation();">
					<div class="card">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <div class="dataTables_wrapper container-fluid dt-bootstrap4">
										<div class="row">
											<div class="col-sm-12">
												<table id="zero_config" class="table table-striped table-bordered dataTable" role="grid" aria-describedby="zero_config_info" align="right">
                                        <thead>
                                            <tr role="row" align="center">
												<th class="fa-sm" tabindex="0" aria-controls="zero_config" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" align="center">No.</th>
												<th class="fa-sm" tabindex="0" aria-controls="zero_config" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 250px;" align="center">ชื่อสถานที่</th>
												<th class="fa-sm" tabindex="0" aria-controls="zero_config" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 120px;" align="center">จำนวนกล้อง</th>
												<th class="fa-sm" tabindex="0" aria-controls="zero_config" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" width="20" align="center">ตัวเลือก</th>
												
											</tr>
                                        </thead>
                                        <tbody>
											
<?php
$sql = "SELECT * FROM location";
$query= mysqli_query($conn,$sql);
while ($result=mysqli_fetch_array($query))
{
?> 
                                        <tr role="row" class="odd" align="center">
                                                <td class="fa-sm"><?php echo $result["lo_id"];?></td>
                                                <td class="fa-sm"><?php echo $result["lo_name"];?></td>
                                                <td  class="fa-sm"><?php 
													$sql2 = "SELECT * FROM camera INNER JOIN `location` WHERE lo_id = '".$result["lo_id"]."' AND camera.lo_name_place=location.lo_name ";
 													$query2 = mysqli_query($conn,$sql2);
 													$result2 = mysqli_num_rows($query2);
 													echo $result2 ;
													?></td>
												<td><a href="../user/lo_detail.php?editlo=<?php echo $result["lo_id"];?>"><button type="button" class="btn btn-secondary">รายละเอียด</button></a></td>
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
