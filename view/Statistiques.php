<!DOCTYPE html>
<html>
<head>
	
<?php
	//session_start();
	require ("view/hefonaUser.php");
?>
<meta charset="utf-8">
<style type="text/css">
#Escalier {
border: 4px solid lightgrey;
border-radius: 4px;
width:34%;
overflow: hidden;
margin: 0 auto;
height :60%;
}

.Graph {max-height:650px;width : 70%;margin: auto;margin-top: 0%;background-color:rgb(255, 255, 255,0.7);border-radius: 10px; padding: 2%;}
#myChart {max-height:610px;}
</style>

<html>

<script src="view/Chart.bundle.js"></script>

</head>

<body>

<div class="Graph">
    <canvas id="myChart"></canvas>
</div>

<script>

var ctx = document.getElementById('myChart').getContext('2d');
var chart = new Chart(ctx, {
    type: 'line',

    data: {
        labels: ['00:00', '03:00', '06:00', '09:00', '12:00', '15:00', '18:00', '21:00', '24:00'],
        datasets: [{
            label: 'Passage escaliers',
            backgroundColor: 'rgb(255, 99, 12)',
            borderColor: 'white',
            data: [0, 10, 5, 2, 20, 30, 45, 2, 5]
        }]
    },

    options: {}
});
</script>

</body>
</html>
