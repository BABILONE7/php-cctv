<?php
 if(isset($_POST["from_date"], $_POST["to_date"]))
 {
      include('connection.php');
      $output = '';
      $query = "
           SELECT * FROM fixing
           WHERE f_import BETWEEN '".$_POST["from_date"]."' AND '".$_POST["to_date"]."'
      ";
      $result = mysqli_query($conn, $query);
      $output .= '
	  <div class="container" style="width:1500px;">
           <table class="table table-bordered">
               <tr>
                               <th width="7%">รหัสเครื่อง</th>
                               <th width="4%">ชื่อกล้อง</th>
							   <th width="5%">ยี่ห้อ</th>
							  <th width="8%">รุ่น</th>
							  <th width="8%">เลขพัสดุ</th>
							  <th width="10%">สถานที่ติดตั้ง</th>
							  <th width="8%">วันที่เสีย</th>
							  <th width="8%">อาการเสีย</th>
							  <th width="8%">สถานที่ซ่อม</th>
                          </tr>
      ';
      if(mysqli_num_rows($result) > 0)
      {
           while($row = mysqli_fetch_array($result))
           {
                $output .= '
                     <tr>
                <td>'. $row["f_id"] .'</td>
                <td>'. $row["f_name"] .'</td>
							  <td>'. $row["f_brand"] .'</td>
							  <td>'. $row["f_no"] .'</td>
							  <td>'. $row["f_tax"] .'</td>
							  <td>'. $row["f_place"] .'</td>
                <td>'.date('d-m-Y',strtotime($row["f_import"])).'</td>
							  <td>'. $row["f_note"] .'</td>
							  <td>'. $row["f_fix_place"] .'</td>
                          </tr>
                ';
           }
      }
      else
      {
           $output .= '
                <tr>
                     <td colspan="5">No Order Found</td>
                </tr>
           ';
      }
      $output .= '</table></div>';
      echo $output;
 }
 ?>
