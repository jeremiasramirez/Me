<!DOCTYPE html>
<html lang="en" ng-app="me">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>Me</title>
	<link rel="stylesheet" href="public/css/main.css">
	<link rel="stylesheet" href="public/css/lib/jeremias-lib/jeremias-lib.css">
	<link rel="stylesheet" href="public/css/lib/animate/animate.css">
</head>
<body>
	<script src="node_modules/angular/angular.min.js"></script>
	<script src="public/js/controller/controller-me.js"></script>

<div ng-controller="showInformation as info" class="container">
	
	<h1 class="title__app">My location</h1>


	<div class="btns">

		<button class="btn--rm min" ng-click="btn_hide()" ng-hide="btn_hide_me">Ocultar</button>
		<p></p>
		<button class="btn--yes min" ng-hide="btn_show_me" ng-click="btn_show()">Mostrar</button>
		
	</div>

	<div ng-hide="data_hide" class="containerData" class="animated fadeInUp">

		
		<p><span>{{"Pais:" | uppercase}} </span>{{countryName}}</p>
		<p><span>{{"IP:" | uppercase}}</span> {{myip}}</p>
		<p><span>{{"Currency:" | uppercase}}</span> {{curr}}</p>
		<p><span>{{"Currency symbol:" | uppercase}}</span> {{currSymbol}}</p>


	</div>







</div>
















</body>
</html>