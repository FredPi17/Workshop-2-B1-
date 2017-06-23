<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>Choose</title>
		<!--<link rel="stylesheet" href="css/main.css">-->
		<link rel="stylesheet" href="css/style.css"/>
	    <script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
	    <script type="text/javascript" src="js/Swipe.js"></script>
	    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.2.9/angular.js"></script>
		<script type="text/javascript" src="js/angular.easypiechart.min.js"></script>
	    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	    <link rel="stylesheet" media="screen and (max-width: 1280px)" href="petite_resolution.css" />
	</head>

	<body>

	<div id="charts">
			<div class="angular" ng-controller="chartCtrl">
				<span class="chart" easypiechart ng-init="options = { animate:false, barColor:'#E67E22', scaleColor:false, lineWidth:3, lineCap:'butt' }" percent="percent" options="options">
					<span class="percent" ng-bind="percent"></span>
				</span>
				<input type="range" min="0" max="100" step="1" ng-model="percent" />
				<span class="chart" easypiechart percent="anotherPercent" options="anotherOptions">
					<span class="percent" ng-bind="percent"></span>
				</span>
				<input type="range" min="0" max="100" step="1" ng-model="anotherPercent" />
			</div>

		</div>
	</body>
</html>

<script>
		var app = angular.module('app', ['easypiechart']);
		app.controller('chartCtrl', ['$scope', function ($scope) {
			$scope.percent = 65;
			$scope.anotherPercent = 0;
			$scope.anotherOptions = {
				animate:{
					duration:0,
					enabled:false
				},
				barColor:'#2C3E50',
				scaleColor:false,
				lineWidth:20,
				lineCap:'circle'
			};
		}]);
	</script>
