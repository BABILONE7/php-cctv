<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>
	</head>
<body>
            <div class="container-fluid">
				<div class="page-breadcrumb">
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                        <div class="ml-auto text-right">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item active" aria-current="page">ข้อมูลสถานที่</li>
									<li class="breadcrumb-item active" aria-current="page">เพิ่มข้อมูลสถานที่</li>

                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
				<form action='class/lo_insert.php' method="post" name="addlo" onSubmit="JavaScript:return addlocation();" enctype="multipart/form-data">
					<div class="card">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <div id="zero_config_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4">
										<!-------ตารางเพิ่มข้อมูลสถานที่------->
										<div class="row">
										  <div class="col-sm-12" >
											  <div class="form-group row">
                                        <label  class="col-sm-3 text-right control-label col-form-label">ชื่อสถานที่ :</label>
                                        <div class="col-sm-4">
                                            <input type="text" class="form-control" name="loname" id="loname">
                                        </div>
                                    </div>
											 
											<div class="border-top">
                                    <div class="card-body" align="center">
                                        <button type="submit" class="btn btn-success btn-lg" name="savelo">บันทึกข้อมูลสถานที่</button>
                                    </div>
                                </div> 
										
									</div></div></div>
									</form>	
                                </div>
								 </div>
                        </div>
						
            </div>
            </div>
          
        </div>
    </div>
	<script language="javascript">
										
function addlocation() {

if(document.addlo.loname.value=="") {
alert("กรุณากรอกชื่อสถานที่") ;
document.addlo.loname.focus() ;
return false ;
}
else 
return true ;
}
</script>
</body>

</html>
