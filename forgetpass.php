<script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
<?php
session_start();
//ตัวกลางใช้ส่ง Email ลืมพาสเวิร์ด ของ admin   forgot password->.......
	require ("PHPMailer/PHPMailerAutoload.php");
	require ("connection.php");

		$uname = $conn->real_escape_string($_POST["uid"]);
		$email = $conn->real_escape_string($_POST["email"]);

		$sql ="SELECT * FROM member WHERE m_iduser = '$uname' AND m_email = '$email'";
		$query = mysqli_query($conn,$sql);
		$result = mysqli_fetch_array($query);

header('Content-Type: text/html; charset=utf-8');

$mail = new PHPMailer;
$mail->CharSet = "utf-8";
$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->Port = 587;
$mail->SMTPSecure = 'tls';
$mail->SMTPAuth = true;



$gmail_username = "ratfcctv@gmail.com"; // gmail ที่ใช้ส่ง
$gmail_password = "ratf21086"; // รหัสผ่าน gmail
// ตั้งค่าอนุญาตการใช้งาน https://myaccount.google.com/lesssecureapps?pli=1


$sender = "RATF CCTV System"; // ชื่อผู้ส่ง
$email_sender = "ratfcctv@gmail.com"; // เมลผู้ส่ง
$email_receiver = $email; // เมลผู้รับ ***

$subject = "forget Password"; // หัวข้อเมล
$new_pass = "ระบบทำการส่งรหัสผ่านให้ท่านแล้ว <br/>
<b>ชื่อสมาชิก : ".$result["m_sername"]."&nbsp;".$result["m_lastname"]."</b><br/>
<b>Username : ".$result["m_iduser"]."</b><br/>
<b>Password : ".$result["m_password"]."</b>
"; // รายละเอียดการส่งรหัสผ่านใหม่

$mail->isHTML(true);
$mail->Username = $gmail_username;
$mail->Password = $gmail_password;
$mail->setFrom($email_sender , $sender);
$mail->addAddress($email_receiver);
$mail->Subject = $subject;
$mail->Body = $new_pass;

	if($mail->send()) {  //ส่ง email สำเร็จ
		echo('<script>
       setTimeout(function() {
        swal({
            title: "ส่งรหัสผ่านเรียบร้อยแล้ว",
            text: "โปรดตรวจสอบใน E-mail ของท่าน",
            type: "success"
        }, function() {
            window.location = "login.php";
        });
    }, 1000);
</script>');
	}

	else {
		echo('<script>
       setTimeout(function() {
        swal({
            title: "ไม่สามารถส่งรหัสผ่านได้",
            text: "โปรดตรวจสอบ username หรือ E-mail อีกครั้ง",
            type: "warning"
        }, function() {
            window.location = "login.php";
        });
    }, 1000);
</script>');
		//ส่ง email ไม่สำเร็จ
	}
?>
