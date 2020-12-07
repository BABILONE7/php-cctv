<script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
<?php
   ini_set('display_errors', 1);
   error_reporting(~0);

	$strCustomerID = null;

   if(isset($_GET["sw"]))
   {
	   $fn = $_GET["sw"];
   }

   include('../../connection.php');
   $sql1 = "UPDATE camera SET
   c_status = 'ใช้งานได้'
   WHERE c_id = '".$fn."' ";
   $sql2 = "UPDATE camera SET c_finish = NOW() WHERE c_id = '".$fn."' ";

    $query1 = mysqli_query($conn,$sql1);
	  $query2 = mysqli_query($conn,$sql2);

	if($query1){
			echo('<script>
       setTimeout(function() {
        swal({
            title: "เสร็จสิ้น",
            text: "กล้องวงจรปิดกลับมาใช้ได้แล้ว",
            type: "success"
        }, function() {
            window.location = "../index.php?page=fixfinish";
        });
    }, 1000);
    </script>');
    
    		}
    		else{
    			echo('<script>
           setTimeout(function() {
            swal({
                title: "ผิดพลาด",
                text: "ไม่สามารถเก็บข้อมูลกล้องที่เสียหายได้",
                type: "success"
            }, function() {
                window.location = "../index.php?page=addfix";
            });
        }, 1000);
    </script>');
    			}
?>
