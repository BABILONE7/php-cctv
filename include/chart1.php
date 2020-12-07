<?php include('../connection.php');
$sql = "SELECT c_import,count(*) as cimp FROM camera GROUP BY c_import";
$result = mysqli_query($conn,$sql);
?>
<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['วัน / เดือน / ปี', ''],
          <?php
                          while($row = mysqli_fetch_array($result))
                          {
                               echo "['".date('d-m-Y',strtotime($row["c_import"]))."',".$row["cimp"]."],";
                          }
                          ?>
        ]);

        var options = {
          chart: {
            title: 'จำนวนกล้องวงจรปิด',
            subtitle: '(เครื่อง)',
          },
			 bars: 'vertical',
          vAxis: {format: 'decimal'},
          height: 400
        };

        var chart = new google.charts.Bar(document.getElementById('columnchart_material2'));

        chart.draw(data, google.charts.Bar.convertOptions(options));
      }
    </script>
  </head>
  <body>
    <div id="columnchart_material2" style="width: 550px; height: 500px;"></div>
  </body>
</html>
