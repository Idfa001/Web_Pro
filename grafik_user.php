<!DOCTYPE html>
<html>
<head>
	<title>GRAFIK</title>
	<script type="text/javascript" src="chartjs.js"></script>
</head>
<body>
	<style type="text/css">
	body{
		font-family: roboto;
	}

	table{
		margin: 0px auto;
	}
	</style>


	<center>
		<h2>GRAFIK LAPORAN BULANAN</h2>
	</center>
	<span class="float-right">
    <a href="dashboard_user.php" class=" btn btn-primary">Kembali</a>
    </span>

	<?php
	$koneksi     = mysqli_connect("localhost", "root", "", "laporan_keuangan");
	?>

	<div style="width: 800px;margin: 0px auto;">
		<canvas id="myChart"></canvas>
	</div>
	<script>
		var ctx = document.getElementById("myChart").getContext('2d');
		var myChart = new Chart(ctx, {
			type: 'pie',
			data: {
				labels: ["Januari","Februari","Maret"],
				datasets: [{
					label: '',
					data: [
					<?php 
					$januari = mysqli_query($koneksi,"SELECT * FROM keuangan WHERE keterangan='Januari'");
					echo mysqli_num_rows($januari);
					?>,
					<?php 
					$februari = mysqli_query($koneksi,"SELECT * FROM keuangan WHERE keterangan='Februari'");
					echo mysqli_num_rows($februari);
					?>, 
					<?php 
					$maret = mysqli_query($koneksi,"SELECT * FROM keuangan WHERE keterangan='Maret'");
					echo mysqli_num_rows($maret);
					?>
					
					],
					backgroundColor: [
					'rgba(255, 99, 132, 0.2)',
					'rgba(54, 162, 235, 0.2)',
					'rgba(255, 206, 86, 0.2)'
					],
					borderColor: [
					'rgba(255,99,132,1)',
					'rgba(54, 162, 235, 1)',
					'rgba(255, 206, 86, 1)'
					],
					borderWidth: 1
				}]
			},
			options: {
				scales: {
					yAxes: [{
						ticks: {
							beginAtZero:true
						}
					}]
				}
			}
		});
	</script>
</body>
</html>