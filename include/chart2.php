<?php include('../connection.php');
$sql = "SELECT f_import,count(*) as fimp FROM fixing GROUP BY f_import";
$result = mysqli_query($conn,$sql);
?>

<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
   <script>
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['วัน / เดือน / ปี',''],
          <?php
                          while($row = mysqli_fetch_array($result))
                          {
                               echo "['".date('d-m-Y',strtotime($row["f_import"]))."',".$row["fimp"]."],";
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
          height: 400,
          colors: ['#ff1a1a']
        };

        var chart = new google.charts.Bar(document.getElementById('columnchart_material1'));

        chart.draw(data, google.charts.Bar.convertOptions(options));

        var btns = document.getElementById('btn-group');

      }
</script>
  </head>
  <body>
    <div id="columnchart_material1" style="width: 550px; height: 500px;"></div>
  </body>
</html>
