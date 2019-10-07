<!DOCTYPE html>
<html lang="en" ng-app="me">
<head>

	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">


	<title>Me - App</title>



	<!-- main css -link -->
	<link rel="stylesheet" href="public/css/main.css">

	<!-- libreria css my 'property' -->
	<link rel="stylesheet" href="public/css/lib/jeremias-lib/jeremias-lib.css">


	<!-- libreria css animation element html -->
	<link rel="stylesheet" href="public/css/lib/animate/animate.css">
</head>
<body>
	<script src="node_modules/angular/angular.min.js"></script>
	<script src="public/js/controller/controller-me.js"></script>


<!-- app controller -->
<div ng-controller="showInformation as info" class="container">
	

	<!-- title app -->
	<h1 class="title__app">My location</h1>

	
	<!-- buttons container -->
	<div class="btns">
	
		<!-- data -->
		<button class="btn--rm min" ng-click="btn_hide()" ng-hide="btn_hide_me">Ocultar</button>
		<p></p>
		<button class="btn--yes min" ng-hide="btn_show_me" ng-click="btn_show()">Mostrar</button>
		
	</div>


<!-- data extern container -->
	<div ng-hide="data_hide" class="containerData" class="animated fadeInUp" ng-include="pathToData">

		<!-- partials : data-location.html -->
		<div ng-include="pathToData">
		</div>

	</div>





</div>
















</body>
</html>