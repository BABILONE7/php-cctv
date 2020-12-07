<script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
<?php
	include('../../connection.php');
		    if(isset($_POST['savecam'])){

				$sql = "INSERT INTO camera (c_name,c_brand,c_no,c_tax,c_date,lo_name_place,c_note,c_status) VALUES ('".$_POST["cname"]."','".$_POST["cbrand"]."','".$_POST["cno"]."','".$_POST["ctax"]."','".$_POST["cdate"]."','".$_POST["cplace"]."','".$_POST["cnote"]."','ใช้งานได้')";

				$query = mysqli_query($conn,$sql);
				if($query)
		{
			echo('<script>
       setTimeout(function() {
        swal({
            title: "เสร็จสิ้น",
            text: "บันทึกข้อมูลกล้องวงจรปิดเรียบร้อย",
            type: "success"
        }, function() {
            window.location = "../../admin/index.php?page=addcam"; //หน้าที่ต้องการให้กระโดดไป
        });
    }, 1000);
</script>');
$header = "แจ้งเตือนการเพิ่มกล้องวงจรปิด";
$cname = $_POST["cname"];
$cbrand = $_POST["cbrand"];
$cno = $_POST["cno"];
$ctax = $_POST["ctax"];
$cplace = $_POST["cplace"];
$cstatus = 'ใช้งานได้';

	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	error_reporting(E_ALL);
	date_default_timezone_set("Asia/Bangkok");

	$sToken = "RFrdIEqXaaWATVJM0U75VZvRXZlYUz8dS3SAfA0GDyK";
	$sMessage = $header.
			"\n"."ชื่อ: " .$cname.
			"\n"."ยี่ห้อ: " .$cbrand.
			"\n"."รุ่น: " .$cno.
			"\n"."เลขพัสดุ: " .$ctax.
			"\n"."สถานที่ติดตั้ง: " .$cplace.
			"\n"."สถานะ : " .$cstatus;

	$chOne = curl_init();
	curl_setopt( $chOne, CURLOPT_URL, "https://notify-api.line.me/api/notify");
	curl_setopt( $chOne, CURLOPT_SSL_VERIFYHOST, 0);
	curl_setopt( $chOne, CURLOPT_SSL_VERIFYPEER, 0);
	curl_setopt( $chOne, CURLOPT_POST, 1);
	curl_setopt( $chOne, CURLOPT_POSTFIELDS, "message=".$sMessage);
	$headers = array( 'Content-type: application/x-www-form-urlencoded', 'Authorization: Bearer '.$sToken.'', );
	curl_setopt($chOne, CURLOPT_HTTPHEADER, $headers);
	curl_setopt( $chOne, CURLOPT_RETURNTRANSFER, 1);
	$result = curl_exec( $chOne );

	//Result error
	if(curl_error($chOne))
	{
		echo 'error:' . curl_error($chOne);
	}
	else {
		$result_ = json_decode($result, true);

	}
	curl_close( $chOne );


		}else{
			echo('<script>
       setTimeout(function() {
        swal({
            title: "ผิดพลาด",
            text: "ไม่สามารถบันทึกข้อมูลกล้องวงจรปิดได้",
            type: "danger"
        }, function() {
            window.location = "../../admin/index.php?page=addcam"; //หน้าที่ต้องการให้กระโดดไป
        });
    }, 1000);
</script>');
		mysqli_close($conn);

	};
	}


	?>
