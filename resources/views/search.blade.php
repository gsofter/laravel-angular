@extends('layouts.app')

@section('css')
<style type="text/css">
.card-link {
	margin-left: 1.25rem;
}
</style>


<!-- Slick CSS -->

<link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">

@endsection

@section('content')
<ng-view ng-controller="SearchPageController"> </ng-view>
@endsection

@section('scripts')

<script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
<script src="{{asset('/assets/slick-1.8.1/slick/slick.js')}}" type="text/javascript" charset="utf-8"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.7.8/angular.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.7.8/angular-route.js"></script>
<script src="{{asset('/angular/app.js')}}"></script>
<script src="{{asset('/angular/controllers/searchpagecontroller.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/ngInfiniteScroll/1.3.0/ng-infinite-scroll.min.js"></script>


<script src="{{asset('assets/bower_components/slick-carousel/slick/slick.js')}}"></script>
<script src="{{asset('assets/bower_components/angular-slick/dist/slick.js')}}"></script>


@endsection