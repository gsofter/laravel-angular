@extends('layouts.app')
@section('css')
<style type="text/css">
hr {
    margin-top: 1rem;
    margin-bottom: 1rem;
    border: 0;
    border-top: 1px solid rgba(97, 97, 97, 0.98);
}


.section-new{
	padding-top: 50px;
	padding-bottom: 50px;
	border-top: 1px solid #d7d9da;

}

.m-3{
	margin: 3px;
}

.p-3{
	padding: 3px;
}

#owl-demo .item img{
    display: block;
    width: 100%;
    height: auto;
}

</style>

@endsection

@section('content')

<!-- Page Content -->
<section>
	<div class="container">
	  <!-- Portfolio Item Heading -->
	  <h1 class="my-4 truncate">{{$car->name}}
	    <small>Secondary Text</small>
	  </h1>

	  <!-- Portfolio Item Row -->
	  <div class="row">

	    <div class="col-md-8">


		<div id="demo" class="carousel slide" data-ride="carousel" data-interval = 'false'>

		  <!-- Indicators -->
		  <ul class="carousel-indicators">
		    <li data-target="#demo" data-slide-to="0" class="active"></li>
		    <li data-target="#demo" data-slide-to="1"></li>
		    <li data-target="#demo" data-slide-to="2"></li>
		  </ul>
		  
		  <!-- The slideshow -->
		  <div class="carousel-inner">
		    <div class="carousel-item active">
		      <img src="https://images.carforyou.ch/2019/03/23/08/05/22/1-i30-wagon-14-t-gdi-amplia-121206-7Jfn55jyauOH.jpg" alt="Los Angeles" width="1100" height="500">
		    </div>
		    <div class="carousel-item">
		      <img src="https://images.carforyou.ch/2019/03/29/10/45/12/1-xc40-d4-awd-momentum-124758-5AeBzqLypG30.jpg?auto=compress%2Cformat " alt="Chicago" width="1100" height="500">
		    </div>
		    <div class="carousel-item">
		      <img src="https://images.carforyou.ch/2019/03/29/10/45/12/2-xc40-d4-awd-momentum-124758-U7Of5C3yfxwk.jpg?auto=compress%2Cformat" alt="New York" width="1100" height="500">
		    </div>
		  </div>
		  
		  <!-- Left and right controls -->
		  <a class="carousel-control-prev" href="#demo" data-slide="prev">
		    <span class="carousel-control-prev-icon"></span>
		  </a>
		  <a class="carousel-control-next" href="#demo" data-slide="next">
		    <span class="carousel-control-next-icon"></span>
		  </a>
		</div>

	    </div>

	    <div class="col-md-4">
	      
	      	<h1 class="text-grey-dark leading-sm font-bold text-xl md:text-2xl">{{$car->manufacturer}}</h1>
	      	<h2 class="text-base md:text-lg font-regular text-grey-4 truncate">{{$car->name}}</h2></header>
	      	<hr>
	      	<h1 class="text-grey-dark leading-sm font-bold text-xl md:text-2xl">{{$car->model}}</h1>
	      	<div class="buttonContainer w-12/12 flex flex-wrap fixed lg:relative pin-b pin-l p-10 lg:p-0 bg-white z-1 lg:z-0 shadow-hard lg:shadow-none"><a class="w-6/12 pr-10 lg:hidden h-56 unstyledlink" href="tel:+41413773737"><button class="button mb-5 h-56"><span class="icon-ctaCall pl-35 leading-md">Anrufen</span></button></a><a class="w-6/12 pr-10 hidden lg:inline-block ctaCallDesktop unstyledlink h-56"><button class="button mb-5 h-56"><span class="icon-ctaCall pl-35 leading-md">Anrufen</span></button></a><a class="w-6/12 unstyledlink"><button class="button mb-5 h-56"><span class="icon-ctaWrite pl-35 leading-md">Schreiben</span></button></a></div>
			<div class="flex flex-wrap w-12/12 pb-10 pt-10 md:pb-0 pt-3 lg:pt-20">
			   <section class="carMain-attributes card-attributesContainer flex flex-wrap w-12/12 detailPageCarMain-attributes">
			      <div class="icon-date icon">
			         <p class="icon-title">Erstzulassung</p>
			         03.2018
			      </div>
			      <div class="icon-mileage icon">
			         <p class="icon-title">Kilometerstand</p>
			         9’000 km
			      </div>
			      <div class="icon-fuel icon">
			         <p class="icon-title">Treibstoff</p>
			         Diesel
			      </div>
			      <div class="icon-gear icon">
			         <p class="icon-title">Getriebe</p>
			         Automatik
			      </div>
			      <div class="icon-motor icon">
			         <p class="icon-title">Leistung</p>
			         190 PS
			      </div>
			      <div class="icon-consumption icon">
			         <p class="icon-title">Verbrauch</p>
			         5 l / 100 km
			      </div>
			      <div class="icon-seats icon">
			         <p class="icon-title">Sitze</p>
			         5
			      </div>
			      <div class="icon-doors icon">
			         <p class="icon-title">Türen</p>
			         5
			      </div>
			   </section>
			</div>
			<div class="text-center my-20">
			   <a href="http://www.facebook.com/sharer/sharer.php?u=https://www.carforyou.ch/de/auto/estate/volvo/xc40/D4%2520AWD%2520Momentum-124758" target="_blank" rel="noopener noreferrer nofollow" class="inline-flex mr-10 text-grey-3 hover:text-facebook">
			      <svg width="32px" height="32px">
			         <path fill="currentColor" d="M19.105 26v.001h-3.097V26H9a3 3 0 0 1-3-3V9a3 3 0 0 1 3-3h14a3 3 0 0 1 3 3v14a3 3 0 0 1-3 3h-3.895zm0 0v-7.43h2.477l.619-3.096h-3.096v-1.239c0-1.238.62-1.857 1.857-1.857h1.239V9.28h-2.477c-2.276 0-3.716 1.784-3.716 4.335v1.858h-2.477v3.096h2.477V26h3.097z"></path>
			      </svg>
			   </a>
			   <a href="https://api.whatsapp.com/send?text=https://www.carforyou.ch/de/auto/estate/volvo/xc40/D4%2520AWD%2520Momentum-124758" data-action="share/whatsapp/share" target="_blank" rel="noopener noreferrer nofollow" class="inline-flex mr-10 text-grey-3 hover:text-whatsapp">
			      <svg width="32px" height="32px">
			         <path fill="currentColor" d="M23.94 9.052A10.318 10.318 0 0 1 27 16.414c-.002 5.737-4.693 10.406-10.456 10.406h-.004a10.492 10.492 0 0 1-4.997-1.267L6 27l1.483-5.392a10.348 10.348 0 0 1-1.395-5.203C6.09 10.668 10.78 6 16.544 6a10.413 10.413 0 0 1 7.396 3.052zm-2.63 9.532c-.26-.13-1.545-.759-1.784-.846-.24-.086-.414-.13-.588.13s-.675.847-.827 1.02c-.153.174-.305.195-.566.065-.262-.13-1.104-.405-2.101-1.29-.777-.69-1.301-1.541-1.454-1.802-.152-.26-.016-.4.115-.53.117-.117.261-.304.392-.456.13-.152.174-.26.26-.434.088-.173.044-.325-.02-.455-.066-.13-.589-1.41-.806-1.93-.213-.508-.428-.439-.588-.447a9.911 9.911 0 0 0-.501-.01.962.962 0 0 0-.697.326c-.24.26-.914.89-.914 2.17 0 1.28.936 2.516 1.067 2.689.13.174 1.842 2.8 4.463 3.926.623.268 1.11.428 1.49.548.625.198 1.195.17 1.645.103.502-.075 1.546-.63 1.763-1.236.218-.608.218-1.129.153-1.237-.066-.108-.24-.173-.501-.304z"></path>
			      </svg>
			   </a>
			   <a href="https://twitter.com/share?text=https://www.carforyou.ch/de/auto/estate/volvo/xc40/D4%2520AWD%2520Momentum-124758" data-show-count="false" target="_blank" rel="noopener noreferrer nofollow" class="inline-flex mr-10 text-grey-3 hover:text-twitter">
			      <svg width="32px" height="32px">
			         <path fill="currentColor" d="M27.432 9.763a9.027 9.027 0 0 1-2.606.714 4.545 4.545 0 0 0 1.995-2.51 9.082 9.082 0 0 1-2.88 1.101 4.537 4.537 0 0 0-7.73 4.138 12.882 12.882 0 0 1-9.353-4.74c-.39.67-.614 1.45-.614 2.281 0 1.574.8 2.963 2.018 3.777a4.524 4.524 0 0 1-2.055-.568v.057a4.54 4.54 0 0 0 3.639 4.449 4.562 4.562 0 0 1-2.05.077 4.542 4.542 0 0 0 4.239 3.15A9.102 9.102 0 0 1 6.4 23.633c-.366 0-.727-.021-1.082-.063a12.839 12.839 0 0 0 6.955 2.038c8.345 0 12.908-6.913 12.908-12.909 0-.196-.004-.392-.012-.587a9.19 9.19 0 0 0 2.263-2.348z"></path>
			      </svg>
			   </a>
			   <a href="mailto:?subject=Volvo XC40 D4 AWD Momentum bei carforyou.ch&amp;body= Schau, was ich bei carforyou.ch gefunden habe: https://www.carforyou.ch/de/auto/estate/volvo/xc40/D4%2520AWD%2520Momentum-124758" rel="nofollow" class="inline-flex text-grey-3 hover:text-grey-dark">
			      <svg width="32px" height="32px">
			         <path d="M15.562 18.1a.75.75 0 0 0 .438.16.751.751 0 0 0 .438-.16l.23-.182 7.17-5.745a.68.68 0 0 0 .09-.987.758.758 0 0 0-1.033-.086L16 16.623 9.105 11.1a.757.757 0 0 0-1.032.086.68.68 0 0 0 .09.987l7.17 5.745a.748.748 0 0 0 .667.343.75.75 0 0 1-.438-.161zM7 9h18a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V11a2 2 0 0 1 2-2zm9.438 9.1l.23-.182a.748.748 0 0 1-.667.343.751.751 0 0 0 .437-.161zm-8.276 1.725a.679.679 0 0 0-.09.986.755.755 0 0 0 1.033.087l4.1-3.286-1.138-.912-3.905 3.125zm10.633-2.213l4.1 3.286c.31.25.774.21 1.032-.087a.679.679 0 0 0-.09-.986L19.934 16.7l-1.138.912z" fill="currentColor"></path>
			      </svg>
			   </a>
			</div>
	    
	    </div>

	  </div>
	  <!-- /.row -->
	</div>
</section>

<section class="bg-gradient-to-bottom-grey section-new">
		

   <div class="w-12/12 py-30 border-grey-1">
      <div class="flex flex-wrap my-10 lg:my-30 px-20 max-w-container mx-auto">
         <p class="w-12/12 md:w-3/12 mb-20 text-lg md:text-xl font-bold text-grey-dark">Details</p>
         <div class="w-12/12 lg:w-9/12">
            <div class="w-12/12 flex flex flex-wrap text-sm lg:text-base pb-20">
               <div class="pr-30   w-6/12 md:w-4/12 mb-20">
                  <p class="details-label text-grey-4">Zustand</p>
                  <p class="details-value text-grey-dark font-bold leading-md">Gebraucht</p>
               </div>
               <div class="pr-30   w-6/12 md:w-4/12 mb-20">
                  <p class="details-label text-grey-4">Erstzulassung</p>
                  <p class="details-value text-grey-dark font-bold leading-md">03.2018</p>
               </div>
               <div class="pr-30   w-6/12 md:w-4/12 mb-20">
                  <p class="details-label text-grey-4">Kilometerstand</p>
                  <p class="details-value text-grey-dark font-bold leading-md">9’000 km</p>
               </div>
               <div class="pr-30   w-6/12 md:w-4/12 mb-20">
                  <p class="details-label text-grey-4">Leistung</p>
                  <p class="details-value text-grey-dark font-bold leading-md">190 PS</p>
               </div>
               <div class="pr-30   w-6/12 md:w-4/12 mb-20">
                  <p class="details-label text-grey-4">Treibstoff</p>
                  <p class="details-value text-grey-dark font-bold leading-md">Diesel</p>
               </div>
               <div class="pr-30   w-6/12 md:w-4/12 mb-20">
                  <p class="details-label text-grey-4">Getriebe</p>
                  <p class="details-value text-grey-dark font-bold leading-md">Automatik</p>
               </div>
               <div class="pr-30   w-6/12 md:w-4/12 mb-20">
                  <p class="details-label text-grey-4">Antrieb</p>
                  <p class="details-value text-grey-dark font-bold leading-md">Allrad (4x4)</p>
               </div>
               <div class="pr-30   w-6/12 md:w-4/12 mb-20">
                  <p class="details-label text-grey-4">Leergewicht</p>
                  <p class="details-value text-grey-dark font-bold leading-md">1’877 kg</p>
               </div>
               <div class="pr-30   w-6/12 md:w-4/12 mb-20">
                  <p class="details-label text-grey-4">Hubraum</p>
                  <p class="details-value text-grey-dark font-bold leading-md">1’969 cm³</p>
               </div>
               <div class="pr-30   w-6/12 md:w-4/12 mb-20">
                  <p class="details-label text-grey-4">Gewicht</p>
                  <p class="details-value text-grey-dark font-bold leading-md">2’250 kg</p>
               </div>
               <div class="pr-30   w-6/12 md:w-4/12 mb-20">
                  <p class="details-label text-grey-4">Anhängelast ungebremst</p>
                  <p class="details-value text-grey-dark font-bold leading-md">2’100 kg</p>
               </div>
               <div class="pr-30   w-6/12 md:w-4/12 mb-20">
                  <p class="details-label text-grey-4">Ladegewicht</p>
                  <p class="details-value text-grey-dark font-bold leading-md">373 kg</p>
               </div>
            </div>
            <div class="w-12/12 flex flex flex-wrap border-t border-grey-1 text-sm lg:text-base pt-20">
               <div class="w-6/12 md:w-4/12 mt-20">
                  <div class="icon-consumption icon text-lg lg:text-xl -ml-10 mb-15 text-grey-dark pl-30 leading-sm font-bold">5 l<span class="text-base text-grey-3 inline-block ml-5 font-regular">/ 100 km</span></div>
               </div>
               <div class="w-6/12 md:w-4/12 mt-20 pr-50">
                  <div class="consumptionLabel float-none mb-10 bg-consumptionCategory-C width-C">
                     C
                     <div class="consumptionLabel_arrow border-consumptionCategory-C"></div>
                  </div>
                  <p class="font-bold leading-md">Energieetikette</p>
                  <p class="text-grey-4">CO₂-Effizienz</p>
               </div>
               <div class="w-6/12 md:w-4/12 mt-20">
                  <div class="rounded-10 overflow-hidden mb-10 font-bold bg-euro-6 w-110">
                     <div class="border-2 border-white rounded-10 text-white text-lg" style="margin: 3px; padding: 3px;">Euro 6</div>
                  </div>
                  <p class="font-bold leading-md">Emissionsnorm</p>
                  <p class="text-grey-4">EU-Standard</p>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div class="w-12/12 py-30 border-t border-grey-1">
      <div class="flex flex-wrap my-10 lg:my-30 px-20 max-w-container mx-auto">
         <p class="w-12/12 md:w-3/12 mb-20 text-lg md:text-xl font-bold text-grey-dark">Beschreibung</p>
         <div class="w-12/12 lg:w-9/12">
            <div>
               <p >HINWEIS: Standort Filiale Meggen Tel. 041 377 37 37</p>
            </div>
         </div>
      </div>
   </div>
  <div class="w-12/12 py-30 border-t border-grey-1">
   <div class="flex flex-wrap my-10 lg:my-30 px-20 max-w-container mx-auto">
      <div class="col-sm-12 col-md-2 col-lg-2">
      	<h1>Contact</h1>
      </div>
      <div class="col-sm-12 col-md-6 col-lg-6">
      	<div class="well well-sm container" style="width: 80%;">
          <form class="form-horizontal" action="" method="post">
	          <fieldset>
	            <div class="form-group">
	                <input id="name" name="name" type="text" placeholder="Your name" class="form-control">
	            </div>
	            <div class="form-group">
	                <input id="email" name="email" type="text" placeholder="Your email" class="form-control">
	            </div>
	            <div class="form-group">
	                <textarea class="form-control" id="message" name="message" placeholder="Please enter your message here..." rows="5"></textarea>
	            </div>
	            <div class="form-group">
	              <div class="col-md-12 text-right">
	                <button type="submit" class="btn btn-danger btn-lg" style="width: 100%">Send</button>
	              </div>
	            </div>
	          </fieldset>
          </form>
        </div>
      </div>
      <div class="col-sm-12 col-md-4 col-lg-4">
      	<h1>Map</h1>
      </div>
   </div>

   <script type="text/javascript">
   	$(document).ready(function() {
 
		  $("#owl-demo").owlCarousel({
		 
		      navigation : true, // Show next and prev buttons
		      slideSpeed : 300,
		      paginationSpeed : 400,
		      singleItem:true
		 
		      // "singleItem:true" is a shortcut for:
		      // items : 1, 
		      // itemsDesktop : false,
		      // itemsDesktopSmall : false,
		      // itemsTablet: false,
		      // itemsMobile : false
		 
		  });
		 
		});
   </script>
  </div>
</section>
<!-- /.container -->
@endsection

@section('scripts')

@endsection