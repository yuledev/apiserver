angular.module('exampleAPI',['ngRoute','ngResource']);

function ControllerAPI($scope,$http) {
	$http.get('http://localhost/apiserver/server/index.php/getFruits').success(function(data){
		$scope.fruits=data
	});	
	
}