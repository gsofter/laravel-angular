angular.module('App1')
.controller("SearchPageController", function ($scope, $http) {

    $scope.carsList;

    $scope.picture = "aaa";
    /*Filters*/
    $scope.types = 
        [
            {name : 'SUV', value: false,},
            {name : 'COUPE', value: false,},
            {name : 'VAN', value: false,},
            {name : 'KOMBI', value: false,},
            {name : 'LIMOUSINE', value: false,},
            {name : 'CABRIOLET', value: false,},
        ];

    $scope.filters = {
        types : $scope.types,
        model : null,
        price : {},
        mechanism: {
            automatic : false,
            manual : false,
        },

        state : {
            new : false,
            used : false,
        },

        fuel : {
            benzin : false,
            diesel : false,
        },

        colors : {
            black : false,
            gray : false,
            silver : false,
            white : false,
            blue : false,
            red : false,
            brown : false,
            green : false,
            other : false,
        },

        kilo : {},
        doors : {},
    };

    
    $scope.currentPage = 1;
    $scope.isBusy = false;
    $scope.getCarsList = function () {
        if($scope.isBusy) return;
        $scope.isBusy = true;
        $http({
            method:'GET',
            url: 'api/getcarslistperpage',
            params: {'page' : $scope.currentPage}
        }).then(
            function success(response){
                // $scope.carsList = response.data;

                angular.forEach(response.data, function(value){
                    $scope.carsList = $scope.carsList || [];
                    $scope.carsList.push(value);
                });

                console.log($scope.carsList);
                $scope.isBusy = false;
            },
            function failed(response){
                alert("failed");
            }
        );
    }

    $scope.nextPage = function() {
        $scope.getCarsList();
        $scope.currentPage++;
    }
    
    $scope.attachUrls2Car = function()
    {
        if($scope.carsList == undefined) return;
        for(var id = 0; id < $scope.carsList.length(); id++)
        {
            $scope.carsList[id].picturesArray = $scope.spliteUrl($scope.carsList[id].pictures);
        }
        console.log($scope.carsList);
    }

    $scope.init = function ()
    {
        $scope.getCarsList();

        console.log($scope.carsList);

    }

    $scope.init();


    $scope.onClickType = function(typeid) {
        $scope.types[typeid].value = $scope.types[typeid].value == true ? false: true;
    }


    $scope.getPictureUrls = function(string) {
        if(string == null || string == undefined) return ["https://i.ebayimg.com/00/s/NDgwWDY0MA==/z/gcMAAOSwZDVcnBD0/$_72.JPG"];
        var array = string.split(' ');
        return array;
    }
   

    $scope.spliteUrl = function(string) {
        if(string == null || string == undefined) return null;
        var array = string.split(' ');
        return array;
    }
    
    $scope.splitePictureURL = function(string, nb) {
        if(string == undefined)
            return false;
        var array = string.split(' ');
        return array[nb];
    }

    $scope.typeFilter = function(item){
        
        var isSetType = false;
       for(var id = 0; id < $scope.types.length; id++)
       {
           if($scope.types[id].value == true){
                isSetType = true;
                break;
           }
       }
       if(isSetType == false) return true;
       else {
                
               
            for(var id = 0; id < $scope.types.length; id++)
            {
                if($scope.types[id].value == true && $scope.types[id].name == item.car_type){
                    return true;
                }
            }    
            return false;
       }
    }

    $scope.modelFilter = function(item) {
        if(item.model == null || item.model == undefined) return true;
        else if($scope.filters.model === null) return true;
        else if(item.model.includes($scope.filters.model) || item.model.includes($scope.filters.model.toUpperCase()))
            return true;
        return false;
    }
    
    $scope.priceFilter = function(item) {
        if(item.price_gross == null || item.price_gross == null) return true;
        else if($scope.filters.price.max == null && $scope.filters.price.min == null) return true;
        else if($scope.filters.price.max == null) {
            return (item.price_gross > $scope.filters.price.min);
        }
        else if($scope.filters.price.min == null){
            return (item.price_gross < $scope.filters.price.max);
        }
        else
        {
            return (item.price_gross > $scope.filters.price.min && item.price_gross < $scope.filters.price.max);
        }
    }

    $scope.mechanismFilter = function(item) {
        if($scope.filters.mechanism.automatic) {
            if(item.gearunit == "AUTOMATIC") return true;
        }
        if($scope.filters.mechanism.manual)
        {
            if(item.gearunit == "MANUAL") return true;
        }

        if($scope.filters.mechanism.manual == false && $scope.filters.mechanism.automatic == false) return true;
        
        return false; 
    }

    $scope.stateFilter = function(item) {
        if($scope.filters.state.new && item.condition == "NEW") return true;
        if($scope.filters.state.used && item.condition == "USED") return true;
        if($scope.filters.state.new == false && $scope.filters.state.used == false) return true;

        return false;

    }
    
    $scope.fuelFilter = function(item) {
        if($scope.filters.fuel.benzin && item.fueltyp == "BENZIN") return true;
        if($scope.filters.fuel.diesel && item.fueltyp == "DIESEL") return true;
        if($scope.filters.fuel.diesel == false && $scope.filters.fuel.benzin == false) return true;
        return false;
    }

    $scope.colorFilter = function(item) {
        if($scope.filters.colors.black && item.color == "BLACK") return true;
        if($scope.filters.colors.gray && item.color == "GRAY") return true;
        if($scope.filters.colors.silver && item.color == "SILVER") return true;
        if($scope.filters.colors.white && item.color == "WHITE") return true;
        if($scope.filters.colors.blue && item.color == "BLUE") return true;
        if($scope.filters.colors.red && item.color == "RED") return true;
        if($scope.filters.colors.brown && item.color == "BROWN") return true;
        if($scope.filters.colors.green && item.color == "GREEN") return true;
        if($scope.filters.colors.other) {
            if(item.color != 'BLACK' && 
                item.color != 'GRAY' &&
                item.color != 'SILVER' &&
                item.color != 'WHITE' &&
                item.color != 'BLUE' &&
                item.color != 'RED' &&
                item.color != 'BROWN' &&
                item.color != 'GREEN')
            return true;
        }

        if(!$scope.filters.colors.black && 
            !$scope.filters.colors.gray &&
            !$scope.filters.colors.silver &&
            !$scope.filters.colors.white &&
            !$scope.filters.colors.blue &&
            !$scope.filters.colors.red &&
            !$scope.filters.colors.brown &&
            !$scope.filters.colors.green &&
            !$scope.filters.colors.other)
            return true;
        return false;
    }

    $scope.kiloFilter = function(item) {
        if(item.range == null || item.range == null) return true;
        else if($scope.filters.kilo.max == null && $scope.filters.kilo.min == null) return true;
        else if($scope.filters.kilo.max == null) {
            return (item.range > $scope.filters.kilo.min);
        }
        else if($scope.filters.price.min == null){
            return (item.range < $scope.filters.kilo.max);
        }
        else
        {
            return (item.range > $scope.filters.kilo.min && item.range < $scope.filters.kilo.max);
        }
    }

    $scope.doorsFilter = function(item) {
        
        var isUnsetMin = ($scope.filters.doors.min == null || $scope.filters.doors.min == "" || $scope.filters.doors.min == undefined);
        var isUnsetMax = ($scope.filters.doors.max == null || $scope.filters.doors.max == "" || $scope.filters.doors.max == undefined);
        
        
        if(item.number_doors == null ) return true;
        else if(isUnsetMin && isUnsetMax) return true;
        else if(isUnsetMax) {
            return (item.number_doors > $scope.filters.doors.min);
        }
        else if(isUnsetMin){
            return (item.number_doors < $scope.filters.doors.max);
        }
        else
        {
            return (item.number_doors >= $scope.filters.doors.min && item.number_doors <= $scope.filters.doors.max);
            
        }   
    }
});

angular.module('App1').filter('typeFilter', function() {
   return function( items, types) {
        var filtered = [];

        if(types === undefined || types === ''){
          return items;
        }

       var isSetType = false;
       for(var id = 0; id < types.length; id++)
       {
           if(types[id].value == true){
                isSetType = true;
                break;
           }
       }
       if(isSetType == false) {
            return items;
       }

        angular.forEach(items, function(item) {          
           
           for(var id = 0; id < types.length; id++)
           {
               if(types[id].value == true && types[id].name == item.car_type){
                    filtered.push(item);
                    break;
               }
           }    
        });

        return filtered;
  };
})

angular.module('App1').filter('modelFilter', function(){

    var filtered = [];
    return function(items, model){
        if(model === undefined || model === '')
        {
            return items;
        }

         angular.forEach(items, function(item){
             if(item.model == undefined || item.model == '' || item.model === null)
                 filtered.push(item);
            if(item.model == model || item.model == model.toUpperCase())
                filtered.push(item);
        });

        return filtered;
    }
});