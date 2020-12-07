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
                                    <li class="breadcrumb-item active" aria-current="page">ข้อมูลผู้ติดต่อ</li>
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
												<table id="zero_config" class="table table-striped table-bordered dataTable" role="grid" aria-describedby="zero_config_info" width="1290px">
                                        <thead>
											
                                            <tr role="row" align="center">
												<th class="fa-sm" tabindex="0" aria-controls="zero_config" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 100px;" align="center">ชื่อ-นามสกุล</th>
												<th class="fa-sm" tabindex="0" aria-controls="zero_config" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 100px;" align="center">ตำแหน่ง</th>
												<th class="sorting cc_pointer" tabindex="0" aria-controls="zero_config" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 100px;" align="center">เบอร์โทรศัพท์</th>
												<th class="sorting cc_pointer" tabindex="0" aria-controls="zero_config" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 100px;" align="center">E-mail</th>
												<th class="fa-sm" tabindex="0" aria-controls="zero_config" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 50px;" align="center">profile</th>
												<th class="fa-sm" tabindex="0" aria-controls="zero_config" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 50px;" align="center"></th>
											</tr>
                                        </thead>
                                        <tbody>
											
<?php
$sql = "SELECT * FROM member";
$query= mysqli_query($conn,$sql);
while ($result=mysqli_fetch_array($query))
{
?> 
                                         <tr role="row" class="odd" align="center">
                                                <td><?php echo $result["m_sername"];?>&nbsp;<?php echo $result["m_lastname"];?></td>
                                                <td><?php echo $result["m_work"];?></td>
											 	<td><?php echo $result["m_tel"];?></td>
											 	<td><?php echo $result["m_email"];?></td>
											 	<td><img src="<?php echo "../picture/profile/".$result["m_pic"];?>"width="100" height="120" border="0" /></td>
											 	<td><a href="../admin/class/mem_del.php?delmem=<?php echo $result["m_id"];?>"><button type="button" class="btn btn-danger">ลบข้อมูล</button></a></td>
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
