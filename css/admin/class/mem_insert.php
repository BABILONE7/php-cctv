<script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
<?php
	include('../../connection.php');

		    if(isset($_POST['savemem'])){							
				if(move_uploaded_file($_FILES["mpic"]["tmp_name"],"../../picture/profile/" .$_FILES["mpic"]["name"])){
				//ประกาศตัวแปร
				$mpic = $_FILES["mpic"]["name"];
				$path = "../../picture/profile/";	
				
				$sql = "INSERT INTO member (m_sername,m_lastname,m_work,m_pic,m_tel,m_email,m_status,m_iduser,m_password) VALUES('".$_POST['mname']."','".$_POST['mlast']."','".$_POST['mwork']."','".$mpic."','".$_POST['mtel']."','".$_POST['mmail']."','".$_POST['mstatus']."','".$_POST['userid']."','".$_POST['pass']."')";
									
				$query = mysqli_query($conn,$sql);
				if($query)
		{
			echo('<script>
       setTimeout(function() {
        swal({
            title: "เสร็จสิ้น",
            text: "บันทึกข้อมูลสมาชิกเรียบร้อย",
            type: "success"
        }, function() {
            window.location = "../../admin/index.php?page=addmem"; 
        });
    }, 1000);
</script>');
			
		}
		else{
			echo('<script>
       setTimeout(function() {
        swal({
            title: "ผิดพลาด",
            text: "ไม่สามารถบันทึกข้อมูลสมาชิกได้",
            type: "warning"
        }, function() {
            window.location = "../../admin/index.php?page=addmem"; 
        });
    }, 1000);
</script>');
		
		exit();
		mysqli_close($conn);
		
	};
				}
		
			}
	?>