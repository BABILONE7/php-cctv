<script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
<?php  
ini_set('display_errors', 1);
error_reporting(~0);
include("../../connection.php");

		    if(isset($_POST['saveeditmem'])){							
				if(move_uploaded_file($_FILES["mpic"]["tmp_name"],"../../picture/profile/" .$_FILES["mpic"]["name"])){

				$mimg = $_FILES["mpic"]["name"];
				$path	  = "../../picture/profile/";	
				
//สร้างตัวแปรสำหรับรับค่าที่นำมาแก้ไขจากฟอร์ม
	
	$sql = "UPDATE member SET 
			m_sername = '".$_POST["mname"]."' ,
			m_lastname = '".$_POST["mlast"]."' ,
			m_work = '".$_POST["mwork"]."' ,
			m_pic = '".$mimg."' ,
			m_tel = '".$_POST["mtel"]."',
			m_email = '".$_POST["mmail"]."',
			m_iduser = '".$_POST["userid"]."',
			m_password = '".$_POST["pass"]."'
			
			WHERE m_id = '".$_POST["mid"]."' ";

	$query = mysqli_query($conn,$sql); 

	if($query) {
			echo('<script>
       setTimeout(function() {
        swal({
            title: "เสร็จสิ้น",
            text: "UPDATE ข้อมูลสมาชิกเรียบร้อย",
            type: "success"
        }, function() {
            window.location = "../index.php?page=profile"; 
        });
    }, 1000);
</script>');
	}
	else{
	echo('<script>
       setTimeout(function() {
        swal({
            title: "ผิดพลาด",
            text: "ไม่สามารถ UPDATE ข้อมูลสมาชิกได้",
            type: "success"
        }, function() {
            window.location = "../index.php?page=profile"; 
        });
    }, 1000);
</script>');
	}
		}else{
			$sql1 = "UPDATE member SET 
			m_sername = '".$_POST["mname"]."' ,
			m_lastname = '".$_POST["mlast"]."' ,
			m_work = '".$_POST["mwork"]."' ,
			m_tel = '".$_POST["mtel"]."',
			m_email = '".$_POST["mmail"]."',
			m_iduser = '".$_POST["userid"]."',
			m_password = '".$_POST["pass"]."'
			
			WHERE m_id = '".$_POST["mid"]."' ";

	$query = mysqli_query($conn,$sql1); 

	if($query) {
			echo('<script>
       setTimeout(function() {
        swal({
            title: "เสร็จสิ้น",
            text: "UPDATE ข้อมูลสมาชิกเรียบร้อย",
            type: "success"
        }, function() {
            window.location = "../index.php?page=profile"; 
        });
    }, 1000);
</script>');
	}
	else{
	echo('<script>
       setTimeout(function() {
        swal({
            title: "ผิดพลาด",
            text: "ไม่สามารถ UPDATE ข้อมูลสมาชิกได้",
            type: "success"
        }, function() {
            window.location = "../index.php?page=profile"; 
        });
    }, 1000);
</script>');
				}
			}
		}
	mysqli_close($conn);
?>
