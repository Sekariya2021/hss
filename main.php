<?php
include('database.php');
$query = "SELECT temp, hum FROM sensordata ORDER BY id DESC LIMIT 1";
$result = $conn->query($query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="icon" href="./css/favicon.png">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <title>Dashboard - Home Security System</title>
</head>

<?php
if ($result->num_rows > 0) {
  $sn=1;
  while($data = $result->fetch_assoc()) {
 ?>

<body>
    <center><h2>Home Security System</h2><center>
<form action="" method="post">
    <center>
        <div id="container">
            <div class="div-1">  
                <h1>Temperatuur</h1>
                <h1><?php echo $data['temp']; ?> </h2>
            </div>
            <div class="div-2">
                <h1>Humidity</h1>
                <h1><?php echo $data['hum']; ?> </h2>
            </div>
            <div class="div-3">
                <button class="button">Bekijk live-camerabeelden</button>
            </div>
        </div>
    </center>
</form>


<form action="index.php">
    <div id="log-out">
        <button class="button">Loguit</button>
    </div>
</form>



<div id="my-chart" style="width: 80%; height: 400px;"></div>
        <script type="text/javascript">
            google.charts.load('current', {
                'packages': ['corechart'],
            });
            google.charts.setOnLoadCallback(drawRegionsMap);

            function drawRegionsMap() {
                var data = google.visualization.arrayToDataTable([
                    ['Time', 'Temp', 'Hum'],
                     <?php
                     $chartQuery = "SELECT * FROM sensordata";
                     $chartQueryRecords = mysqli_query($conn, $chartQuery);
                        while($row = mysqli_fetch_assoc($chartQueryRecords)){
                            echo "['".$row['Time']."',".$row['Temp'].",".$row['Hum']."],";
                        }
                     ?>
                ]);

                var options = {
                   
                };

                var chart = new google.visualization.LineChart(document.getElementById('my-chart'));
                chart.draw(data, options);
            }
        </script>

<?php
  $sn++;}} else { ?>
    <tr>
     <td colspan="8">No data found</td>
    </tr>
 <?php } ?>

</body>
</html>