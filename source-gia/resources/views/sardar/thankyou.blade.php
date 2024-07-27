@extends('sardar.layout.front-contact')
@section('title','Contact Us')

@section('custom-js')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<script>
	$(document).ready(function () {
		setTimeout(() => {
			if(document.referrer.length == 0)
			{
				setTimeout(() => {
					window.location = "{{route('index')}}";
				}, 2000);
			}else{
				setTimeout(() => {
					window.location = document.referrer;
				}, 8000);
			}
		}, 1000);

	});
</script>

   
@endsection
@section('content')
	
	<section class="Top_Details bg-white pt-5">
		<div class="container-fluid">
			<div class="col-12  custom-mt-1">

			</div>		
		</div>	
	</section>




	<section class="bg-white MyBreadcrumb">
		<div class="row m-0 px-2">
			<div class="col-sm-12 col-12 breadcrumb-left">
				<nav aria-label="breadcrumb " class="pl-2 border_breadcrumb" style="width: 62%;margin: 0 auto;">
				  <ol class="breadcrumb m-0 p-0">
				  <li class="breadcrumb-item"><a href="{{url('')}}">Home</a></li>
					@if(getReffrel())
				    	<li class="breadcrumb-item"><a href="{{getReffrel()['url']}}">{{getReffrel()['name']}}</a></li>
					@endif
					
				    <li class="breadcrumb-item active" aria-current="page">Thank You</li>

				  </ol>
				<div>
					<a class="btn btn-dark btn-sm btn-rounded" onclick="goBack()"> ❮ Back</a>
				</div>
						</nav>
					</div>	
					
				</div>		
	</section>

	<section class="Top_Details bg-white">
		<div class="container-fluid top-description">
			<div class="col-12 text-center">
			
				<img  src="{{asset('sardar')}}/images/right-icon.png" style="width:100px;margin-top: 20px;">
				<h3 style="color: #ed3237;">Thank You</h3>
				<h5 style="margin: 13px 0px;line-height: 1.5;">Thank you for taking time and sharing your Inflatable Project requirement with us.
					<br>You will hear back from us soonest possible.
					<br><br> Team: Giant Inflatables Asia </h5>

				<img class="mb-4"
					src="{{url('sardar')}}/img/{{getWebsiteOptions()['website_logo']->option_value}}" style="width:270px">
			</div>		
		</div>	
	</section>


@endsection