<script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
</head>
<?php
	session_start();
//ทำลาย session ทั้งหมด
	session_destroy();
	setcookie("m_iduser");
	setcookie("m_password");
?>
<script>
       setTimeout(function() {
        swal({
            title: "LOG OUT",
            text: "ออกจากระบบเรียบร้อย",
            type: "success"
        }, function() {
            window.location = "login.php"; //หน้าที่ต้องการให้กระโดดไป
        });
    }, 1000);
</script>