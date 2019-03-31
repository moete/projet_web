<?php
$dbhandle =new mysqli('localhost','root','','projet_web');
echo $dbhandle->connect_error;

$query ="SELECT * FROM visitors ";
$res=$dbhandle->query($query);
 ?>
<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['country', 'visits'],
       <?php
    while ($row=$res->fetch_assoc()) {  echo "['".$row['country']."',".$row['visits']."],"; }
             # code...
      ?>
           
        ]);



        var options = {
          title: 'visit from countries'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
    <div id="piechart" style="width: 900px; height: 500px;"></div>
  </body>
</html>
