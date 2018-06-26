
<div class="col-sm-12">
</div>
</div><!--/.row-->
</div>	<!--/.main-->

<script src="<?=base_url()?>/assets/backend/js/jquery-1.11.1.min.js"></script>
<script src="<?=base_url()?>/assets/backend/js/bootstrap.min.js"></script>
<script src="<?=base_url()?>/assets/backend/js/chart.min.js"></script>
<script src="<?=base_url()?>/assets/backend/js/chart-data.js"></script>
<script src="<?=base_url()?>/assets/backend/js/easypiechart.js"></script>
<script src="<?=base_url()?>/assets/backend/js/easypiechart-data.js"></script>
<script src="<?=base_url()?>/assets/backend/js/bootstrap-datepicker.js"></script>
<script src="<?=base_url()?>/assets/backend/js/custom.js"></script>
<script>
window.onload = function () {
var chart1 = document.getElementById("line-chart").getContext("2d");
window.myLine = new Chart(chart1).Line(lineChartData, {
responsive: true,
scaleLineColor: "rgba(0,0,0,.2)",
scaleGridLineColor: "rgba(0,0,0,.05)",
scaleFontColor: "#c5c7cc"
});
};
</script>

<script>
window.onload = function () {

var chart4 = document.getElementById("pie-chart").getContext("2d");
window.myPie = new Chart(chart4).Pie(pieData, {
responsive: true,
segmentShowStroke: false
});

};
</script>
</body>
</html>
