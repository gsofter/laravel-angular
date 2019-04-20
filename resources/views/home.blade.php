
@extends('layouts.main')  
@section('css')
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link href="{{ asset('assets/bootstrap-carousel-multiple-items/assets/css/carousel.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/css/carforyou.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
@endsection


@section('content')
<body  ng-app="MyApp">
  <ng-view ng-controller="HomePageController"> </ng-view>
</body>
@endsection

@section('scripts')
    <!-- Javascript -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.7.8/angular.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.7.8/angular-route.js"></script>
    <script src="{{asset('/angular/app.js')}}"></script>
    <script src="{{asset('/angular/controllers/homepagecontroller.js')}}"></script>
    <script src="{{asset('/angular/controllers/searchboxcontroller.js')}}"></script>


    <script src="{{asset('assets/bower_components/slick-carousel/slick/slick.js')}}"></script>
    <script src="{{asset('assets/bower_components/angular-slick/dist/slick.js')}}"></script>
@endsection


