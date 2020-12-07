<body>          
<div class="container-fluid">
				<form action='class/mem_insert.php' method="post" name="addmem" onSubmit="JavaScript:return addmember();" enctype="multipart/form-data">
					<div class="card">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <div id="zero_config_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4">
										<!-------ตารางเพิ่มข้อมูลสถานที่------->
										<div class="row">
										  <div class="col-sm-12" >
											  <div class="form-group row">
                                        <label class="col-sm-3 text-right control-label col-form-label">ชื่อจริง :</label>
                                        <div class="col-sm-4">
                                            <input type="text" class="form-control" name="mname" id="mname">
                                        </div>		  
                                    </div>
											  <div class="form-group row">
                                        <label  class="col-sm-3 text-right control-label col-form-label">นามสกุล :</label>
                                        <div class="col-sm-4">
                                            <input type="text" class="form-control" name="mlast">
                                        </div>
                                    </div>
											   
										<div class="form-group row">
                                        <label class="col-sm-3 text-right control-label col-form-label">รูปถ่าย :</label>
                                        <div class="col-sm-6">
                                            <div class="custom-file">
                                           <input type="file" name="mpic" >
                                        </div>
                                        </div>
                                    </div>
										
										<div class="form-group row">
                                    	 <label class="col-sm-3 text-right control-label col-form-label">เบอร์โทรศัพท์ :</label>
										<div class="col-sm-4">
											<input type="text" class="form-control phone-inputmask" id="phone-mask" name="mtel">
											</div>
                                </div>
										<div class="form-group row">
                                        <label class="col-sm-3 text-right control-label col-form-label">E-mail :</label>
                                        <div class="col-sm-4">
                                            <input type="text" class="form-control" name="mmail">
                                        </div>
                                    </div>
											  <div class="form-group row">
                                        <label  class="col-sm-3 text-right control-label col-form-label">ตำแหน่งปัจจุบัน :</label>
                                        <div class="col-sm-4">
                                            <input type="text" class="form-control" name="mwork">
                                        </div>
                                    </div>
											  
											  <div class="form-group row ">
                                    <label class="col-md-3"></label>
                                    <div class="col-md-9">
                                        <div class="custom-control custom-radio">
                                            <input type="radio" class="custom-control-input" id="customControlValidation1" name="mstatus" value="admin">
                                            <label class="custom-control-label" for="customControlValidation1">เจ้าหน้าที่</label>
                                        </div>
                                         <div class="custom-control custom-radio">
                                            <input type="radio" class="custom-control-input" id="customControlValidation2" name="mstatus" value="user">
                                            <label class="custom-control-label" for="customControlValidation2">ช่างซ่อมบำรุง</label>
                                        </div>
                                    </div>
                                </div>
											  <div class="form-group row">
                                        <label class="col-sm-3 text-right control-label col-form-label">*User ID : </label>
                                        <div class="col-sm-4">
                                            <input type="text" class="form-control" name="userid">
                                        </div>
                                    </div>	
											  <div class="form-group row">
                                        <label class="col-sm-3 text-right control-label col-form-label">*Password : </label>
                                        <div class="col-sm-4">
                                            <input type="text" class="form-control" name="pass">
                                        </div>
                                    </div>	
											  
											<div class="border-top">
                                    <div class="card-body" align="center">
                                        <button type="submit" class="btn btn-lg btn-block btn-outline-success" id="ts-success" name="savemem">บันทึกข้อมูลสมาชิก</button>
                                    </div>
                                </div> 
										
									</div></div></div>
									</form>
<script language="javascript">
										
function addmember() {

if(document.addmem.mname.value=="") {
alert("กรุณากรอกชื่อสมาชิก") ;
document.addmem.mname.focus() ;
return false ;
}
else if(document.addmem.mlast.value=="") {
alert("กรุณากรอกนามสกุลสมาชิก") ;
document.addmem.mlast.focus() ;
return false ;
}
else if(document.addmem.mpic.value=="") {
alert("กรุณาอัพรูปถ่ายสมาชิก") ;
document.addmem.mpic.focus() ;
return false ;
}
else if(document.addmem.mtel.value=="") {
alert("กรุณากรอกเบอร์โทรศัพท์") ;
document.addmem.mtel.focus() ;
return false ;
}
else if(document.addmem.mmail.value=="") {
alert("กรุณากรอกอีเมล ") ;
document.addmem.mmail.focus() ;
return false ;
}
else if(document.addmem.mwork.value=="") {
alert("กรุณาเลือกตรง เจ้าหน้าที่") ;
document.addmem.mwork.focus() ;
return false ;
}
else if(document.addmem.mline.value=="") {
alert("กรุณากรอก ID LINE") ;
document.addmem.mline.focus() ;
return false ;
}
else if(document.addmem.mstatus.checked == false &&   
document.checkForm.rdo2.checked == false) {
alert("กรุณาเลือกสถานะสมาชิก") ;
document.addmem.focus() ;
return false ;
}
else if(document.addmem.userid.value==""){
	alert("กรุณากรอก username สมาชิก");
	document.addmem.userid.focus();
	return false;
}
	else if(document.addmem.pass.value==""){
	alert("กรุณากรอก password");
	document.addmem.pass.focus();
	return false;
}
else 
return true ;
}
</script> 
                                </div>
								 </div>
					</body>  
