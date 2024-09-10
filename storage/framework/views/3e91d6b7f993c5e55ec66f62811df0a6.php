
	<div class="card ">
		<?php 
			$chartdata = $comp_model->barchart_gkppetani();
		?>
		<div class="p-3">
			<div class=" fw-bold h4">Gkp Petani</div>
			<small class="text-muted"></small>
		</div>
		<canvas id="barchart_gkppetani" __tagattributes></canvas>
		<script>
			$(function (){
			var chartData = {
				labels: <?php echo json_encode($chartdata['labels']); ?>,
				datasets: <?php echo json_encode($chartdata['datasets']); ?>
			}
			var ctx = document.getElementById('barchart_gkppetani');
			var chart = new Chart(ctx, {
				type:'bar',
				data: chartData,
				
				options: {
					scaleStartValue: 0,
					responsive: true,
					scales: {
						xAxes: [{
							ticks:{display: true},
							gridLines:{display: true},
							categoryPercentage: 1.0,
							barPercentage: 0.8,
							scaleLabel: {
								display: true,
								labelString: ""
							},
						}],
						yAxes: [{
							ticks: {
								beginAtZero: true,
								display: true
							},
							scaleLabel: {
							display: true,
							labelString: ""
						}
						}]
					},
				}
,
			})});
		</script>
	</div>
<?php /**PATH C:\laragon\www\sip\resources\views/pages/home-gkp-petani.blade.php ENDPATH**/ ?>