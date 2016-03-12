<div class="ventasPie">


<div id="canvas-holder" class="pie" style="text-align:center;">
	<h1 style="font-family:sans-serif;font-size:30px;color:gray;"> Ventas </h1>
			<canvas id="chart-area" width="400" height="400"/>
</div>


	<script>

		var pieData = [
				{
					value: 300,
					color:"#F7464A",
					highlight: "#FF5A5E",
					label: "49%"
				},
				{
					value: 50,
					color: "#46BFBD",
					highlight: "#5AD3D1",
					label: "6%"
				},
				{
					value: 100,
					color: "#FDB45C",
					highlight: "#FFC870",
					label: "20%"
				},
				{
					value: 40,
					color: "#949FB1",
					highlight: "#A8B3C5",
					label: "5%"
				},
				{
					value: 120,
					color: "#4D5360",
					highlight: "#616774",
					label: "20%"
				}

			];

			window.onload = function(){
				var ctx = document.getElementById("chart-area").getContext("2d");
				window.myPie = new Chart(ctx).Pie(pieData);
			};



	</script>

</div>