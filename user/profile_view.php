<?php
    include('../connection.php');
?>
		            <div class="container-fluid">
				<form action="" method="post" name="detailmem" onSubmit="JavaScript:return addlocation();" enctype="multipart/form-data" onSubmit="JavaScript:return addlocation();">
					<div class="card">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <div id="zero_config_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4">
										<div class="row">
										  <div class="col-sm-12" >
											  <div class="form-group row">
                                        <label class="col-sm-3 text-right control-label col-form-label">รหัสสมาชิก :</label>
                                        <div class="col-md-6">
                                           <label class="col-sm-5 text-left control-label col-form-label"><?php echo $_SESSION['m_id'];?></label>
                                        </div>		  
                                    </div>
											  <div class="form-group row">
                                        <label class="col-sm-3 text-right control-label col-form-label">ชื่อจริง :</label>
                                        <div class="col-md-6">
                                           <label class="col-sm-5 text-left control-label col-form-label"><?php echo $_SESSION["m_sername"];?></label>
                                        </div>		  
                                    </div>
											  <div class="form-group row">
                                        <label  class="col-sm-3 text-right control-label col-form-label">นามสกุล :</label>
                                        <div class="col-md-6">
                                             <label class="col-sm-3 text-left control-label col-form-label"><?php echo $_SESSION["m_lastname"];?></label>
                                        </div>
                                    </div>
											   
										<div class="form-group row">
                                        <label class="col-sm-3 text-right control-label col-form-label">รูป Profile :</label>
                                       	<div class="col-md-6">
										<img src="<?php echo "../picture/profile/".$_SESSION["m_pic"];?>"width="120" height="120" border="1" />                                    
										 </div>
                                    </div>
										
										<div class="form-group row">
                                    	 <label class="col-sm-3 text-right control-label col-form-label">เบอร์โทรศัพท์ :</label>
										<div class="col-md-6">
											<label class="col-sm-5 text-left control-label col-form-label"><?php echo $_SESSION["m_tel"];?></label>
											</div>
                                </div>
										<div class="form-group row">
                                        <label class="col-sm-3 text-right control-label col-form-label">E-mail :</label>
                                        <div class="col-md-6">
                                            <label class="col-sm-5 text-left control-label col-form-label"><?php echo $_SESSION["m_email"];?></label>
                                        </div>
                                    </div>
											  <div class="form-group row">
                                        <label  class="col-sm-3 text-right control-label col-form-label">ตำแหน่งปัจจุบัน :</label>
                                        <div class="col-md-6">
                                            <label class="col-sm-5 text-left control-label col-form-label"><?php echo $_SESSION["m_work"];?></label>
                                        </div>
                                    </div>
											 
											  <div class="form-group row">
                                   <label class="col-sm-3 text-right control-label col-form-label">สถานะสมาชิก : </label>
                                    <div class="col-sm-6">
                                       <label class="col-sm-5 text-left control-label col-form-label"><?php echo $_SESSION["m_status"];?></label>
                                    </div>
                                </div>
											  
											<div class="form-group row">
								<label class="col-sm-3 text-right control-label col-form-label">ตัวเลือก :</label>
                                <div class="col-md-4">
								<label class="col-sm-3 text-left control-label col-form-label"><a href="profile_edit.php?editmem=<?php echo $_SESSION["m_id"];?>"><button type="button" class="btn btn-outline-primary">แก้ไขข้อมูลส่วนตัว</button></a></label>	
								<br>
								
								</div>
                                </div>
									</div></div></div>
									</form>	
                                </div>
					