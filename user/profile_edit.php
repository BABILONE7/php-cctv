<?php
   ini_set('display_errors', 1);
   error_reporting(~0);

  include('../connection.php');
   $mem = null;

   if(isset($_GET["editmem"]))
   {
	   $mem = $_GET["editmem"];
   }
     $sql = "SELECT * FROM member WHERE m_id = '".$mem."' ";

   $query = mysqli_query($conn,$sql);

   $result=mysqli_fetch_array($query,MYSQLI_ASSOC);

?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title></title>
</head>

<body>
	<div class="preloader" style="display: none;">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>

<div id="main-wrapper" data-sidebartype="mini-sidebar">

        <?php include('../user/include/header.php')?>

        <?php include('../user/include/sidebar.php')?>

		<div class="page-wrapper">

            <br>

			            <div class="container-fluid">
				<form action='../user/class/profile_update.php' method="post" name="editmem" enctype="multipart/form-data" onClick="JavaScript:return addlocation();">
					<div class="card">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <div id="zero_config_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4">


										<div class="row">
										  <div class="col-sm-12" >
											  <div class="form-group row">
                                        <label class="col-sm-3 text-right control-label col-form-label">รหัสสมาชิก :</label>
                                        <div class="col-sm-4">
                                            <input type="text" class="form-control" name="mid" value="<?php echo $result["m_id"];?>">
                                        </div>
                                    </div>
											  <div class="form-group row">
                                        <label class="col-sm-3 text-right control-label col-form-label">ชื่อจริง :</label>
                                        <div class="col-sm-4">
                                            <input type="text" class="form-control" name="mname" value="<?php echo $result["m_sername"];?>">
                                        </div>
                                    </div>
											  <div class="form-group row">
                                        <label  class="col-sm-3 text-right control-label col-form-label">นามสกุล :</label>
                                        <div class="col-sm-4">
                                            <input type="text" class="form-control" name="mlast" value="<?php echo $result["m_lastname"];?>">
                                        </div>
                                    </div>

										<div class="form-group row">
                                        <label class="col-sm-3 text-right control-label col-form-label">รูปถ่าย :</label>
                                        <div class="col-sm-6">
											<img src="<?php echo "../picture/profile/".$result["m_pic"];?>"width="120" height="120" border="1" />
                                            <div class="custom-file">
                                           <input type="file" name="mpic">
                                        </div>
                                        </div>
                                    </div>

										<div class="form-group row">
                                    	 <label class="col-sm-3 text-right control-label col-form-label">เบอร์โทรศัพท์ :</label>
										<div class="col-sm-4">
											<input type="text" class="form-control phone-inputmask" id="phone-mask" name="mtel" value="<?php echo $result["m_tel"];?>">
											</div>
                                </div>
										<div class="form-group row">
                                        <label class="col-sm-3 text-right control-label col-form-label">E-mail :</label>
                                        <div class="col-sm-4">
                                            <input type="text" class="form-control" name="mmail" value="<?php echo $result["m_email"];?>">
                                        </div>
                                    </div>
											  <div class="form-group row">
                                        <label  class="col-sm-3 text-right control-label col-form-label">ตำแหน่งปัจจุบัน :</label>
                                        <div class="col-sm-4">
                                            <input type="text" class="form-control" name="mwork" value="<?php echo $result["m_work"];?>">
                                        </div>
                                    </div>

											  <div class="form-group row">
                                   <label class="col-sm-3 text-right control-label col-form-label">สถานะสมาชิก : </label>
                                    <div class="col-sm-4">
                                       <label class="col-sm-5 text-left control-label col-form-label"><?php echo $result["m_status"];?></label>

                                    </div>
                                </div>
											  <div class="form-group row">
                                        <label class="col-sm-3 text-right control-label col-form-label">*User ID : </label>
                                        <div class="col-sm-4">
                                            <input type="text" class="form-control" name="userid" value="<?php echo $result["m_iduser"];?>">
                                        </div>
                                    </div>
											  <div class="form-group row">
                                        <label class="col-sm-3 text-right control-label col-form-label">*Password : </label>
                                        <div class="col-sm-4">
                                            <input type="text" class="form-control" name="pass" value="<?php echo $result["m_password"];?>">
                                        </div>
                                    </div>

											<div class="border-top">
                                    <div class="card-body" align="center">
                                        <button type="submit" class="btn btn-lg btn-block btn-outline-success" id="ts-success" name="saveeditmem">บันทึกการแก้ไขข้อมูลสมาชิก</button>
                                    </div>
                                </div>

									</div></div></div>
									</form>
                                </div>
								 </div>
<script src="../assets/libs/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="../assets/libs/popper.js/dist/umd/popper.min.js"></script>
    <script src="../assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="../assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
    <script src="../assets/extra-libs/sparkline/sparkline.js"></script>
	<script src="../assets/libs/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
	<script src="../assets/libs/quill/dist/quill.min.js"></script>
	<script src="../assets/libs/popper.js/dist/umd/popper.min.js"></script>
	<script src="../assets/libs/toastr/build/toastr.min.js"></script>
    <!--Menu sidebar -->
    <script src="../dist/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="../dist/js/custom.min.js"></script>
    <script src="../assets/libs/inputmask/dist/min/jquery.inputmask.bundle.min.js"></script>
	<script src="../dist/js/pages/mask/mask.init.js"></script>
	<script src="../assets/libs/jquery-asColor/dist/jquery-asColor.min.js"></script>
	<script src="../assets/libs/jquery-asGradient/dist/jquery-asGradient.js"></script>
	<script src="../assets/libs/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
	<script src="../assets/libs/quill/dist/quill.min.js"></script>
	

<script>window.__vidChanged = function(state){if(state === 1) {document.body.dispatchEvent(new Event('vidChanged'))}}
if(document.querySelector('#movie_player')){document.querySelector('#movie_player').addEventListener('onStateChange', '__vidChanged');}</script>
<script src="../assets/extra-libs/multicheck/datatable-checkbox-init.js"></script>
<script src="../assets/extra-libs/multicheck/jquery.multicheck.js"></script>
<script src="../assets/extra-libs/DataTables/datatables.min.js"></script>
<script src="../assets/libs/toastr/build/toastr.min.js"></script>
</body>
</html>
