angular.module('MyApp')
.controller("SearchBoxController", function ($scope, $http, $location) {

    $scope.tabStatus = false;

    $scope.onClickTabVehicle = function(){
        // alert("asdf");
        $scope.tabStatus = false;
    }

    $scope.onClickTabModel = function() {
        $scope.tabStatus = true;
    }
    

    $scope.state = {
        vehicle_type : {
            suv: false,
            coupe: false,
            van: false,
            wagon: false,
            limousine: false,
            cabriolet: false,
        }
    }

    $scope.types = ['suv', 'coupe', 'van', 'wagon', 'limousine', 'cabriolet'];
    $scope.onClickType = function(type) {
		if(type == 0)    
        	$scope.state.vehicle_type.suv = $scope.state.vehicle_type.suv == true ? false: true;
        else if(type == 1)
        	$scope.state.vehicle_type.coupe = $scope.state.vehicle_type.coupe == true ? false: true;
        else if(type == 2)
        	$scope.state.vehicle_type.van = $scope.state.vehicle_type.van == true ? false: true;
        else if(type == 3)
        	$scope.state.vehicle_type.wagon = $scope.state.vehicle_type.wagon == true ? false: true;
        else if(type == 4)
        	$scope.state.vehicle_type.limousine = $scope.state.vehicle_type.limousine == true ? false: true;
        else if(type == 5)
        	$scope.state.vehicle_type.cabriolet = $scope.state.vehicle_type.cabriolet == true ? false: true;

    }

    $scope.onClickSearch = function(){
        // window.href='/search_car?' + $scope.state;
        var attachurl = "vehicle_type=";
        var paramurl = "";
        if($scope.state.vehicle_type.suv)
        { 
            paramurl += "suv";
        }
        if($scope.state.vehicle_type.coupe) 
        {
            if(paramurl.length > 0)
             paramurl += "+coupe";
            else
                paramurl += "coupe";
        }
        if($scope.state.vehicle_type.van) {
            if(paramurl.length > 0)
                paramurl += "+van";
            else
                paramurl += "van";
        }
        if($scope.state.vehicle_type.wagon) {
            if(paramurl.length > 0)
                paramurl += "+wagon";
            else
                paramurl += "wagon";
        }
        if($scope.state.vehicle_type.limousine) {
            if(paramurl.length > 0)
                paramurl += "+limousine";
            else
                paramurl += "limousine";
        }

        if($scope.state.vehicle_type.cabriolet) {
            if(paramurl.length > 0)
                paramurl += "+cabriolet";
            else
                paramurl += "cabriolet";
        }
        console.log(paramurl);
        var requesetURL = './search_car_filter?vehicle_type=' + paramurl
        // window.location = requesetURL;
        window.location('/search_car/');
        // $http.get('')
    }



});