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
                                    <li class="breadcrumb-item active" aria-current="page">ข้อมูลกล้องวงจรปิด</li>
									<li class="breadcrumb-item active" aria-current="page">เพิ่มข้อมูลกล้องวงจรปิด</li>

                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
				<form action="../admin/class/cam_insert.php" method="post" name="addcam" onSubmit="JavaScript:return fncSubmit();" enctype="multipart/form-data">
				<div class="card">
                                <div class="card-body">
									<br></br>
					 <h5 class="card-title">รายละเอียดข้อมูลกล้องวงจรปิด</h5>

								<div class="form-group row">
            						<label class="col-sm-3 text-right control-label col-form-label">ชื่อกล้อง :</label>
                                        <div class="col-sm-4">
                                            <input type="text" class="form-control" id="cono1" name="cname">
                                        </div>
                                  </div>
								<div class="form-group row">
            						<label class="col-sm-3 text-right control-label col-form-label">ยี่ห้อเครื่อง :</label>
                                        <div class="col-sm-4">
                                            <input type="text" class="form-control" id="cono1"  name="cbrand">
                                        </div>
                                  </div>
									 <div class="form-group row">
                                        <label class="col-sm-3 text-right control-label col-form-label">รุ่น :</label>
                                        <div class="col-sm-4">
                                          <input type="text" class="form-control" id="cono1" name="cno">
                                        </div>
                                    </div>
                      <div class="form-group row">
                                						<label class="col-sm-3 text-right control-label col-form-label">เลขครุภัณฑ์ :</label>
                                                            <div class="col-sm-4">
                                                                <input type="text" class="form-control" id="cono1"  name="ctax">
                                                            </div>
                                                      </div>
									<div class="form-group row">
                                        <label class="col-sm-3 text-right control-label col-form-label">วันที่ติดตั้ง :</label>
                                        <div class="col-sm-4">
                                         <input type="text" class="form-control" id="datepicker-autoclose" name="cdate">
                                        </div>
                                  </div>

  					    <div class="form-group row">
									   <label for="select"></label>
						<label class="col-sm-3 text-right control-label col-form-label">สถานที่ติดตั้ง</label>
                                        <div class="col-md-4">
                                        <select class="select2 form-control custom-select select2-hidden-accessible" style="width: 100%; height:36px;" data-select2-id="1" tabindex="-1" aria-hidden="true" name="cplace">
											<option value="">---เลือกสถานที่----</option>
<?php
	include('../connection.php');
   	$sql = "SELECT * FROM location WHERE lo_name LIKE '%".$strKeyword."%' ";
   	$query = mysqli_query($conn,$sql);

?>
<?php
while ($result=mysqli_fetch_array($query))
{
?>
<option value="<?php echo $result['lo_name'] ?>"><?php echo $result["lo_name"];?></option>
<?php
}
?>
                                            </optgroup>
                                        </select>
                                    </div>
                      </div>

                                    <div class="form-group row">
                                        <label class="col-sm-3 text-right control-label col-form-label">หมายเหตุ</label>
                                        <div class="col-sm-4">
                                            <textarea class="form-control" name="cnote"></textarea>
                                        </div>
                                    </div>
								</div>
                                <div class="border-top">
                                    <div class="card-body" align="center">
                                        <button type="submit" class="btn btn-success margin-5"  name="savecam" style="width: auto">
                                    <h3>บันทึกข้อมูล</h3>
                                </button>

                                    </div>
                                </div>
				  </div>
			  </form>
		</div>
	</div>
	</div>
    <!-- All Jquery -->
    <!-- ============================================================== -->

<script language="javascript">

function fncSubmit() {

if(document.addcam.cname.value=="") {
alert("กรุณากรอกชื่อกล้องวงรจปิด") ;
document.addcam.cname.focus() ;
return false ;
}
else if(document.addcam.cbrand.value=="") {
alert("กรุณากรอกยี่ห้อกล้องวงจรปิด") ;
document.addcam.cbrand.focus() ;
return false ;
}
else if(document.addcam.cno.value=="") {
alert("กรุณากรอกรุ่นของกล้องวงจรปิด") ;
document.addcam.cno.focus() ;
return false ;
}
else if(document.addcam.cdate.value=="") {
alert("กรุณากรอกวันที่ติดตั้งกล้องวงจรปิด") ;
document.addcam.cdate.focus() ;
return false ;
}
else if(document.addcam.cplace.value=="") {
alert("กรุณาเลือกสถานที่ติดตั้งกล้องวงจรปิด") ;
document.addcam.cplace.focus() ;
return false ;
}
else
return true ;
}
</script>
</body>

</html>
