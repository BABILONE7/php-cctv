<?php
include('connection.php');
$sql = "SELECT * FROM camera INNER JOIN fixing WHERE camera.c_id = fixing.f_id AND camera.lo_name_place = fixing.f_place";
$query = mysqli_query($conn,$sql);
$result = mysqli__num_rows($query);
echo $result;
?>
