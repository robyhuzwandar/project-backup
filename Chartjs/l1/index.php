<?php
    $conn = mysqli_connect('localhost', 'root','roby','chartjs');

    // Check connection
    if (mysqli_connect_errno())
    {
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
    $sql = "SELECT * from hotel";
    $nama = $conn->query($sql);
    $tamu = $conn->query($sql);
    $color_bg = $conn->query($sql);
?>
<!doctype html>
<html>

<head>
    <title>Line Styles</title>
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->
    <script src="js/Chart.bundle.js"></script>
    <script src="js/Chart.js"></script>
    <script src="js/samples/utils.js"></script>
</head>

<body>
    <div id="canvas-holder" style="width:80%">
        <canvas id="chart-area"></canvas>
    </div>
    <script>
        function getRandomColorHex() {
            var hex = "0123456789ABCDEF",
            color = "#";

            for (var i = 1; i <= 6; i++) {
                  color += hex[Math.floor(Math.random() * 16)];
            }
            return color;
        }

    var config = {
    type: 'bar',
    data: {
        datasets: [{
            data: [
                <?php while($h = mysqli_fetch_array($tamu)) {
                    echo '"'. $h['tamu'].'",';
                } ?>
            ],
            
                backgroundColor:getRandomColorHex(),        
                backgroundColor:getRandomColorHex(),        
                backgroundColor:getRandomColorHex(),        
            
            
            label: 'Data Pengunjung'
        }],
        labels: [
            <?php while($h = mysqli_fetch_array($nama)) {
                echo '"' . $h['nama'] . '",'; 
            }?>
        ]
    },
    options: {
        responsive: true
    }
};

window.onload = function() {
    var ctx = document.getElementById('chart-area').getContext('2d');
    window.myPie = new Chart(ctx, config);
};
 </script>
</body>

</html>