<script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
<?php
	ini_set('display_errors', 1);
	error_reporting(~0);

	include('../../connection.php');

	$del = $_GET["delmem"];
	$sql = "DELETE FROM member
			WHERE m_id = '".$del."' ";

	$query = mysqli_query($conn,$sql);

	if(mysqli_affected_rows($conn)) {
		 echo('<script>
       setTimeout(function() {
        swal({
            title: "เสร็จสิ้น",
            text: "ลบข้อมูลสมาชิกเสร็จสิ้น",
            type: "success"
        }, function() {
            window.location = "../../admin/index.php?page=viewmem"; 
        });
    }, 1000);
</script>');
	}else{
		echo('<script>
       setTimeout(function() {
        swal({
            title: "ผิดพลาด",
            text: "ไม่สามารถลบข้อมูลสมาชิกได้",
            type: "warning"
        }, function() {
            window.location = "../../admin/index.php?page=viewmem"; 
        });
    }, 1000);
</script>');
	}

	mysqli_close($conn);
?>
