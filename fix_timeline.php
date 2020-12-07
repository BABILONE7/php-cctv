<?php
include('connection.php');
$query = "SELECT * FROM fixing ORDER BY f_id ASC";
$result = mysqli_query($conn, $query);
 ?>
 <!DOCTYPE html>
<html>
      <head>
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title></title>
      <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
      <script src="js/jquery-1.11.3.min.js"></script>
      <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
      <link rel="stylesheet" href="http://code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
      </head>
      <body>
		   <nav class="navbar navbar-inverse">
		     <div class="container-fluid">
	         </div>
      </nav>
<div class="container" style="width:1500px;">

     <div class="col-md-3">
                     <input type="text" name="from_date" id="from_date" class="form-control" placeholder="จากวันที่...." />
                </div>
                <div class="col-md-3">
                     <input type="text" name="to_date" id="to_date" class="form-control" placeholder="ถึงวันที่...." />
                </div>
                <div class="col-md-5">
                     <input type="button" name="filter" id="filter" value="ค้นหา" class="btn btn-info" />
                </div>
                <div style="clear:both"></div>
                <br />
                <div id="order_table">
                     <table class="table table-bordered">
                          <tr>
                               <th width="7%">รหัสเครื่อง</th>
                               <th width="4%">ชื่อกล้อง</th>
							   <th width="5%">ยี่ห้อ</th>
							  <th width="8%">รุ่น</th>
							  <th width="8%">เลขครุภัณฑ์ุ</th>
							  <th width="10%">สถานที่ติดตั้ง</th>
							  <th width="8%">วันที่เสีย</th>
							  <th width="8%">อาการเสีย</th>
							  <th width="8%">สถานที่ซ่อม</th>
                          </tr>
                     <?php
                     while($row = mysqli_fetch_array($result))
                     {
                     ?>
                          <tr>
                               <td><?php echo $row["f_id"]; ?></td>
                               <td><?php echo $row["f_name"]; ?></td>
							  <td><?php echo $row["f_brand"]; ?></td>
							  <td><?php echo $row["f_no"]; ?></td>
							  <td><?php echo $row["f_tax"]; ?></td>
							  <td><?php echo $row["f_place"]; ?></td>
                               <td><?php echo date('d-m-Y',strtotime($row["f_import"]));?></td>
							  <td><?php echo $row["f_note"];?></td>
							  <td><?php echo $row["f_fix_place"]?></td>

                          </tr>
                     <?php
                     }
                     ?>
                     </table>
                </div>
           </div>
<script src="js/bootstrap.js"></script>
</body>
</html>
<script>
      $(document).ready(function(){
           $.datepicker.setDefaults({
                dateFormat: 'yy-mm-dd'
           });
           $(function(){
                $("#from_date").datepicker();
                $("#to_date").datepicker();
           });
           $('#filter').click(function(){
                var from_date = $('#from_date').val();
                var to_date = $('#to_date').val();
                if(from_date != '' && to_date != '')
                {
                     $.ajax({
                          url:"filter_fix_date.php",
                          method:"POST",
                          data:{from_date:from_date, to_date:to_date},
                          success:function(data)
                          {
                               $('#order_table').html(data);
                          }
                     });
                }
                else
                {
                     alert("Please Select Date");
                }
           });
      });
 </script>
<script>

        $(".select2").select2();

        /*datepicker*/
        jQuery('.mydatepicker').datepicker();
        jQuery('#datepicker-autoclose').datepicker({
            autoclose: true,
            todayHighlight: true
        });
        var quill = new Quill('#editor', {
            theme: 'snow'
        });

    </script>
