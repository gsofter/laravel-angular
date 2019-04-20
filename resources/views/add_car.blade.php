@extends('layouts.app')

@section('css')
<style type="text/css">
.card{
	width: 100%;
}
.card {
    background-color: #fff;
    border: 0 solid #eee;
    border-radius: 0;
}

.card {
    margin-bottom: 30px;
    -webkit-box-shadow: 1px 1px 2px rgba(0, 0, 0, 0.1);
    box-shadow: 1px 1px 2px rgba(0, 0, 0, 0.1);
}


.card-header {
    padding: 1rem 1.25rem;
    background-color: #fff;
    border-bottom: 1px solid #eee;
    
}

.card-header .title{
	padding: 10px;
	color: white;
}
.align-items-center {
    -ms-flex-align: center!important;
    align-items: center!important;
}
.d-flex {
    display: -ms-flexbox!important;
    display: flex!important;
}
.card-header {
    padding: .75rem 1.25rem;
    margin-bottom: 0;
    color: inherit;
    background-color: #049804;
    border-bottom: 1px solid rgba(0,0,0,.125);
}

.card-body {
    padding: 1.25rem;
}

.card-body {
    -ms-flex: 1 1 auto;
    flex: 1 1 auto;
    padding: 1.25rem;
}

.form-group {
    margin-bottom: 10px;
}

.form-control {
    height: calc(2.4rem + 2px);
    padding: 0.45rem 0.75rem;
    font-size: 1rem;
    line-height: 1.5;
    color: #495057;
    border-radius: 0;
    margin-bottom: 10px;
}
.form-control-label{
	text-align: center;
    font-size: 15pt;
}

.form-group {
	margin-bottom: 40px;
    margin-top: 40px;
}

form .line {
    width: 100%;
    height: 1px;
    border-bottom: 1px dashed #eee;
    margin: 20px 0 30px;
}

.btn-save {
    background-color: #33b35a;
    border-color: #33b35a;
}


</style>
@endsection

@section('content')
<section class="bg-grey-bright" ng-controller = "">
	<div class="searchContainer">
		<div class="card">
			<div class="card-header d-flex align-items-center">
				<h4 class="title">Add your favorite car</h4>
			</div>

			<div class="card-body">
				<form class="form-horizontal" method="POST" action="{{ route('add_new_car') }}">
					@csrf
					<div class="form-group row"> 
						<label class="col-md-2 col-sm-6 form-control-label">Name</label>
						<div class="col-md-6 col-sm-6">
                        	<input type="text" class="form-control" name="name">
                      	</div>
                    </div>
					<div class="line"></div>
					<div class="form-group row"> 
						<label class="col-md-2 col-sm-6 form-control-label">Model</label>
						<div class="col-md-2 col-sm-6">
                        	<input type="text" class="form-control" name="model">
                      	</div>
                      	<label class="col-md-2 col-sm-6 form-control-label">Manufacturer</label>
						<div class="col-md-2 col-sm-6">
                        	<input type="text" class="form-control" name="manufacturer">
                      	</div>
                      	<label class="col-md-2 col-sm-6 form-control-label">Motor</label>
						<div class="col-md-2 col-sm-6">
                        	<input type="text" class="form-control" name="motor">
                      	</div>
					</div>

					<div class="line"></div>
					<div class="form-group row"> 
						<label class="col-md-2 col-sm-6 form-control-label">Main Price</label>
						<div class="col-md-2 col-sm-6">
                        	<input type="text" class="form-control" name="price_gross">
                      	</div>
                      	<label class="col-md-2 col-sm-6 form-control-label">Currency</label>
						<div class="col-md-2 col-sm-6">
                        	<input type="text" class="form-control" name="currency">
                      	</div>
					</div>

					<div class="line"></div>
					<div class="form-group row"> 
						<label class="col-md-2 col-sm-6 form-control-label">Fuel type</label>
						<div class="col-md-2 col-sm-6">
                        	<input type="text" class="form-control" name="fueltyp">
                      	</div>
                      	<label class="col-md-2 col-sm-6 form-control-label">Mileage</label>
						<div class="col-md-2 col-sm-6">
                        	<input type="text" class="form-control">
                      	</div>
					</div>
					<div class="line"></div>
					<div class="form-group row"> 
						<label class="col-md-2 col-sm-6 form-control-label">Power</label>
						<div class="col-md-2 col-sm-6">
                        	<input type="text" class="form-control">
                      	</div>
						<label class="col-md-2 col-sm-6 form-control-label">Consumption</label>
						<div class="col-md-2 col-sm-6">
                        	<input type="text" class="form-control">
                      	</div>
                      	<label class="col-md-2 col-sm-6 form-control-label">Seats</label>
						<div class="col-md-2 col-sm-6">
                        	<input type="text" class="form-control">
                      	</div>
					</div>
					<div class="line"></div>
					<div class="form-group row"> 
						<label class="col-md-2 col-sm-6 form-control-label">Doors</label>
						<div class="col-md-2 col-sm-6">
                        	<input type="text" class="form-control">
                      	</div>
					</div>
					<div class="line"></div>
					<div class="form-group row"> 
						<label class="col-md-2 col-sm-6 form-control-label">Images</label>
						<div class="col-md-10 col-sm-6">
                        	<input type="file" class="form-control">
                      	</div>
					</div>

					<div class="line"></div>
					<div class="form-group row">
                      <div class="col-sm-4 offset-sm-2">
                        <button  class="btn btn-secondary"><a href="/search_car" style="color: white; text-decoration: none;"> Cancel </a> </button>
                        <button type="submit" class="btn btn-primary btn-save">Save changes</button>
                      </div>
                    </div>
				</form>
			</div>
		</div>
	</div>
</section>
@endsection

@section('scripts')
@endsection