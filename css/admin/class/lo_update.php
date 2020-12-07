<script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
<?php  
ini_set('display_errors', 1);
error_reporting(~0);
include("../../connection.php");

		    if(isset($_POST['saveeditlo'])){							
				
			$sql = "UPDATE location SET 
			lo_name = '".$_POST["loname"]."' 
			
			WHERE lo_id = '".$_POST["loid"]."' ";
	
					
	$query = mysqli_query($conn,$sql); 

	if($query) {
			echo('<script>
       setTimeout(function() {
        swal({
            title: "เสร็จสิ้น",
            text: "UPDATE ข้อมูลสถานที่ติดตั้งเสร็จสิ้น",
            type: "success"
        }, function() {
            window.location = "../../admin/index.php?page=viewlo"; 
        });
    }, 1000);
</script>');
	}
	else{
	echo('<script>
       setTimeout(function() {
        swal({
            title: "ผิดพลาด",
            text: "ไม่สามารถ UPDATE ข้อมูลสถานที่ติดตั้งได้",
            type: "success"
        }, function() {
            window.location = "../../adminindex.php?page=viewlo"; 
        });
    }, 1000);
</script>');
	}
		}
				
	mysqli_close($conn);
?>