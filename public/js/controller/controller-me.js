var me = angular.module("me", []);



me.controller("showInformation", ["$scope", "$http", ($scope, $http)=>{


	/*
		path de elementos separados de la vista

	*/
	$scope.pathToData = "partials/data-location.html";





/* 

	request to extern app data(ajax)

*/

	$scope.countryName = '' ;
	$scope.myip = '' ;
	$scope.curr = '';
	$scope.currSymbol = '';


	$http({
		method: "get",
		url: "http://www.geoplugin.net/json.gp/"
	}).then( (resp)=>{

		$scope.countryName = resp.data.geoplugin_countryName; 
		$scope.myip = resp.data.geoplugin_request;
		$scope.curr = resp.data.geoplugin_currencyCode;
		$scope.currSymbol = resp.data.geoplugin_currencySymbol;
	 

	})


	$scope.data_hide = 0;
	$scope.btn_hide_me = 0;
	$scope.btn_show_me = 1;


	$scope.btn_show = function(){

		$scope.data_hide = 0;
		$scope.btn_show_me = 1;
		$scope.btn_hide_me = 0;

	}

	$scope.btn_hide = function(){

		$scope.data_hide = 1;

		$scope.btn_show_me = 0;
		$scope.btn_hide_me = 1;
	}











}])

