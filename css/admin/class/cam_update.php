<script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
<?php
ini_set('display_errors', 1);
error_reporting(~0);
include("../../connection.php");

		    if(isset($_POST['saveedit'])){

	$sql = "UPDATE camera SET
			c_name = '".$_POST["cname"]."' ,
			c_brand = '".$_POST["cbrand"]."' ,
			c_no = '".$_POST["cno"]."' ,
			c_tax = '".$_POST["ctax"]."' ,
			c_date = '".$_POST["cdate"]."',
			lo_name_place = '".$_POST["cplace"]."',
			c_note = '".$_POST["cnote"]."'

			WHERE c_id = '".$_POST["cid"]."' ";

	$query = mysqli_query($conn,$sql);

	if($query) {
			echo('<script>
       setTimeout(function() {
        swal({
            title: "เสร็จสิ้น",
            text: "UPDATE ข้อมูลกล้องวงจรปิดเสร็จสิ้น",
            type: "success"
        }, function() {
            window.location = "../index.php?page=viewcam";
        });
    }, 1000);
</script>');
	}

	else{
	echo('<script>
       setTimeout(function() {
        swal({
            title: "ผิดพลาด",
            text: "ไม่สามารถแก้ไขข้อมูลกล้องวงจรปิดได้",
            type: "danger"
        }, function() {
            window.location = "../index.php?page=viewcam";
        });
    }, 1000);
</script>');
	}
}

	mysqli_close($conn);
?>
