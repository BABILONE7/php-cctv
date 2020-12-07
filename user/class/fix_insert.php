<script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
<?php
	include('../../connection.php');

		    if(isset($_POST['insertfix'])){
				$fid = $_POST["fid"];
				$sql1 ="UPDATE camera SET c_status = 'กำลังซ่อมแซม' WHERE c_id = '".$fid."'";

				$sql2 = "INSERT INTO fixing (f_id,f_name,f_brand,f_no,f_tax,f_place,f_note,f_fix_place) VALUES ('".$fid."','".$_POST["fname"]."','".$_POST["fbrand"]."','".$_POST["fno"]."','".$_POST["ftax"]."','".$_POST["fplace"]."','".$_POST["fnote"]."','".$_POST["ffixplace"]."')";

				$sql3 = "UPDATE camera SET c_fix = NOW() WHERE c_id = '".$fid."' ";
				$query1 = mysqli_query($conn,$sql1);
				$query2 = mysqli_query($conn,$sql2);
				$query3 = mysqli_query($conn,$sql3);
				
				if($query2){
				echo('<script>
       setTimeout(function() {
        swal({
            title: "เสร็จสิ้น",
            text: "เก็บข้อมูลกล้องที่เสียหายเรียบร้อย",
            type: "success"
        }, function() {
            window.location = "../index.php?page=addfix";
        });
    }, 1000);
</script>');
//LINE Notify
$header = "แจ้งเตือน การส่งซ่อมอุปกรณ์กล้องวงจรปิด";
$fid = $_POST["fid"];
$fname = $_POST["fname"];
$fbrand = $_POST["fbrand"];
$fno = $_POST["fno"];
$ftax = $_POST["ftax"];
$fplace = $_POST["fplace"];
$fnote = $_POST["fnote"];
$ffixplace = $_POST["ffixplace"];

	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	error_reporting(E_ALL);
	date_default_timezone_set("Asia/Bangkok");

	$sToken = "RFrdIEqXaaWATVJM0U75VZvRXZlYUz8dS3SAfA0GDyK";
	$sMessage = $header.
			"\n"."รหัส: " .$fid.
			"\n"."ชื่อกล้อง: " .$fname.
			"\n"."ยี่ห้อ: " .$fbrand.
			"\n"."รุ่น: " .$fno.
			"\n"."เลขพัสดุ: " .$ftax.
			"\n"."สถานที่ติดตั้ง: " .$fplace.
			"\n"."ลักษณะความเสียหาย: " .$fnote.
			"\n"."สถานที่ซ่อม: " .$ffixplace;

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
		}
		else{
			echo('<script>
       setTimeout(function() {
        swal({
            title: "ผิดพลาด",
            text: "ไม่สามารถเก็บข้อมูลกล้องที่เสียหายได้",
            type: "warning"
        }, function() {
            window.location = "../index.php?page=addfix";
        });
    }, 1000);
</script>');
			}

		exit();
		mysqli_close($conn);

			}
	?>
