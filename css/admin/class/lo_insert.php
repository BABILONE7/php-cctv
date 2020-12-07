<script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
<?php
	include('../../connection.php');
		    if(isset($_POST['savelo'])){							
				
				$sql = "INSERT INTO location (lo_name) VALUES ('".$_POST["loname"]."')";
				$query = mysqli_query($conn,$sql);
				if($query)
		{
			echo('<script>
       setTimeout(function() {
        swal({
            title: "เสร็จสิ้น",
            text: "บันทึกข้อมูลสถานที่ติดตั้งเรียบร้อย",
            type: "success"
        }, function() {
            window.location = "../../admin/index.php?page=addlo"; //หน้าที่ต้องการให้กระโดดไป
        });
    }, 1000);
</script>');
			
		}else
	{
				echo('<script>
       setTimeout(function() {
        swal({
            title: "ผิดพลาด",
            text: "ไม่สามารถบันทึกข้อมูลสถานที่ติดตั้งได้",
            type: "warning"
        }, function() {
            window.location = "../../admin/index.php?page=addlo"; //หน้าที่ต้องการให้กระโดดไป
        });
    }, 1000);
</script>');	
				}
		
		
		exit();
		mysqli_close($conn);
		
	}
			
	?>