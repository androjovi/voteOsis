<?php
include 'koneksi/koneksi.php';
$getTable=mysqli_query($koneksi,"SELECT * FROM hasil WHERE nama='satu'");
$getTable1=mysqli_query($koneksi,"SELECT * FROM hasil WHERE nama='dua'");
$getTable2=mysqli_query($koneksi,"SELECT * FROM hasil WHERE nama='tiga'");
$getValue=mysqli_fetch_assoc($getTable);
$getValue1=mysqli_fetch_assoc($getTable1);
$getValue2=mysqli_fetch_assoc($getTable2);
 ?>
<html>
    <head>
        <title>Perolehan sementara</title>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.3.0/Chart.bundle.js"></script>
        <style type="text/css">
            .container {
                width: 50%;
                margin: 15px auto;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <canvas id="myChart" width="100" height="100"></canvas>
        </div>
        <script>
            var ctx = document.getElementById("myChart");
            var myChart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: ["Osis 1", "Osis 2", "Osis 3"],
                    datasets: [{
                            label: 'Jumlah',
                            data: [<?php echo $getValue['hasil']; ?>,<?php echo $getValue1['hasil']; ?>,<?php echo $getValue2['hasil']; ?>],
                            backgroundColor: [
                                'rgba(255, 99, 132, 0.2)',
                                'rgba(54, 162, 235, 0.2)',
                                'rgba(255, 206, 86, 0.2)',
                                'rgba(75, 192, 192, 0.2)',
                                'rgba(153, 102, 255, 0.2)',
                                'rgba(255, 159, 64, 0.2)'
                            ],
                            borderColor: [
                                'rgba(255,99,132,1)',
                                'rgba(54, 162, 235, 1)',
                                'rgba(255, 206, 86, 1)',
                                'rgba(75, 192, 192, 1)',
                                'rgba(153, 102, 255, 1)',
                                'rgba(255, 159, 64, 1)'
                            ],
                            borderWidth: 1
                        }]
                },
                options: {
                    scales: {
                        yAxes: [{
                                ticks: {
                                    beginAtZero: true
                                }
                            }]
                    }
                }
            });
        </script>
    </body>
</html>
