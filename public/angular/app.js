var app = angular.module('MyApp', ["ngRoute", "slick"]);

app.config(function($locationProvider, $routeProvider) {
  $routeProvider
	  .when("/", {
	    templateUrl : "angular/templates/homepage.htm"
	  }
  );
});


var app1 = angular.module('App1', ["ngRoute", "slick", "infinite-scroll"]);

app1.config(function($locationProvider, $routeProvider) {
	  $routeProvider
		  .when("/", {
		    templateUrl : "angular/templates/searchpage.htm"
		  }
	  );
});
 