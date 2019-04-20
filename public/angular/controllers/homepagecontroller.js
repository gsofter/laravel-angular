angular.module('MyApp')
.controller("HomePageController", function ($scope, $http) {

    $scope.carsList;
    $scope.name = "aaa";


    $scope.getCarsList = function () {
        $http({
            method:'GET',
            url: 'api/getcarslist/homepage',
        }).then(
            function success(response){
                
                $scope.carsList = response.data;
                console.log(response.data);
            },
            function failed(response){
                alert("failed");
            }
        )
    }

    $scope.init = function ()
    {
        $scope.getCarsList();
    }

    $scope.init();

    $scope.getPictureUrl = function(string, nb) {
        if(string == null || string == undefined) return "https://i.ebayimg.com/00/s/NDgwWDY0MA==/z/gcMAAOSwZDVcnBD0/$_72.JPG";
        var array = string.split(' ');
        return array[nb];
    }
    
});