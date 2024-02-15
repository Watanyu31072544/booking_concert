<?php

include('dbconnect.php');
$bar=array();
$count=0;
$sql = "select name,count(s_zone) from booking group by name";
$query = mysqli_query($db,$sql);
while($row=mysqli_fetch_array($query)){
	$bar[$count]["label"]=$row["name"];
	$bar[$count]["y"]=$row["count(s_zone)"];
	$count=$count+1;
}
 
?>
<!DOCTYPE HTML>
<html>
<head>
	<script>
	window.onload = function() {
	
		var chart = new CanvasJS.Chart("chartContainer", {
			animationEnabled: true,
			title:{
				text: "ผลรายงานจำนวนที่นั่งของทุกคอนเสิร์ต"
			},
			axisY: {
				title: "จำนวนที่นั่ง",
			},
			data: [{
				type: "column",
				yValueFormatString: "# ที่นั่ง",
				dataPoints: <?php echo json_encode($bar, JSON_NUMERIC_CHECK); ?>
			}]
		});
		chart.render();
	
	}
	</script>
</head>
<body>
	<div id="chartContainer" style="height: 370px; width: auto;"></div>
	<script src="https://cdn.canvasjs.com/canvasjs.min.js"></script>
</body>
</html>