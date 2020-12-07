<script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
<?php
	session_start();
	include("connection.php");

		$uname = $conn->real_escape_string($_POST["uid"]);
		$pword = $conn->real_escape_string($_POST["pass"]);            
            
        $objQuery 	= $conn->query("SELECT * FROM member WHERE m_iduser = '$uname' AND m_password = '$pword'");
		$objResult = $objQuery->fetch_array();
        $numrow   	= $objQuery->num_rows;
                
                             if($objResult["m_status"]== "admin")
                                 {
                                     $_SESSION["m_id"] 			= $objResult["m_id"];
							         $_SESSION["m_sername"]		= $objResult["m_sername"];
							         $_SESSION["m_lastname"] 	= $objResult["m_lastname"];
							         $_SESSION["m_work"] 		= $objResult["m_work"];
							         $_SESSION["m_pic"]			= $objResult["m_pic"];
							         $_SESSION["m_tel"] 		= $objResult["m_tel"];
							         $_SESSION["m_email"] 		= $objResult["m_email"];
							         $_SESSION["m_lineid"] 		= $objResult["m_lineid"];
							         $_SESSION["m_status"] 	= $objResult["m_status"];
							         $_SESSION["m_iduser"] 	= $objResult["m_iduser"];
							         $_SESSION["m_password"] 	= $objResult["m_password"];
                                     header('Location: admin/index.php?page=index');
                                 }

							 elseif($objResult["m_status"]== "user")
							 {
									 $_SESSION["m_id"] 			= $objResult["m_id"];
							         $_SESSION["m_sername"]		= $objResult["m_sername"];
							         $_SESSION["m_lastname"] 	= $objResult["m_lastname"];
							         $_SESSION["m_work"] 		= $objResult["m_work"];
							         $_SESSION["m_pic"]			= $objResult["m_pic"];
							         $_SESSION["m_tel"] 		= $objResult["m_tel"];
							         $_SESSION["m_email"] 		= $objResult["m_email"];
							         $_SESSION["m_lineid"] 		= $objResult["m_lineid"];
							         $_SESSION["m_status"] 	= $objResult["m_status"];
							         $_SESSION["m_iduser"] 	= $objResult["m_iduser"];
							         $_SESSION["m_password"] 	= $objResult["m_password"];
                                     header('Location: user/index.php?page=index'); 
								 
							 }
                             
				else{
					echo('<script>
       setTimeout(function() {
        swal({
            title: "ไม่สามารถเข้าสู่ระบบได้",
            text: "โปรดตรวจสอบ username หรือ password ให้ถูกต้อง",
            type: "warning"
        }, function() {
            window.location = "login.php";
        });
    }, 1000);
</script>');
				}
?>