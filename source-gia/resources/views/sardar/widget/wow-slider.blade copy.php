<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="description" content="WOWSlider" />
	
	<!-- Start WOWSlider.com HEAD section --> <!-- add to the <head> of your page -->
	<link rel="stylesheet" type="text/css" href="{{url('wow-slider')}}/engine1/style.css" />
	<script type="text/javascript" src="{{url('wow-slider')}}/engine1/jquery.js"></script>
	<!-- End WOWSlider.com HEAD section -->


<style>
.instuction {
	font-family: sans-serif, Arial;
	display: block;
	margin: 0 auto;
	max-width: 820px;
	width: 100%;
	padding: 0 70px;
	color: #222;
	-webkit-box-sizing: border-box;
	-moz-box-sizing: border-box;
	box-sizing: border-box;
}
.instuction h1 img {
	max-width: 170px;
	vertical-align: middle;
	margin-bottom: 10px;
}
.instuction h1 {
	color: #2F98B3;
	text-align: center;
}
.instuction h2 {
	position: relative;
	font-size: 1.1em;
	color: #2F98B3;
	margin-bottom: 20px;
	margin-top: 40px;
}
.instuction h2 span.num {
	position: absolute;
	left: -70px;
	top: -18px;
	display: inline-block;
	vertical-align: middle;
	font-style: italic;
	font-size: 1.1em;
	width: 60px;
	height: 60px;
	line-height: 60px;
	text-align: center;
	background: #2F98B3;
	color: #fff;
	border-radius: 50%;
}
.instuction .mono {
	color: #000;
	font-family: monospace;
	font-size: 1.3em;
	font-weight: normal;
}
.instuction li.mono {
	font-size: 1.5em;
}

.instuction ul {
	font-size: 0.9em;
	margin-top: 0;
	padding-left: 0;
	list-style: none;
}
.instuction .note {
	color: #A3A3B2;
	font-style: italic;
	padding-top: 10px;
}
.instuction p.note {
	text-align: center;
	padding-top: 0;
	margin-top: 4px;
}
.instuction textarea {
	font-size: 0.9em;
	min-height: 60px;
	padding: 10px;
	margin: 0;
	overflow: auto;
	max-width: 100%;
	width: 100%;
}
.instuction a,
.instuction a:visited {
	color: #2F98B3;
}
</style>


</head>
<!-- Start WOWSlider.com BODY section --> <!-- add to the <body> of your page -->
<div id="wowslider-container1" style="z-index: 0;height: 432px;">
<div class="ws_images"><ul>
         @foreach($productImages as $productImage)
            <li><img src="{{url('web')}}/media/lg/{{$productImage->image}}" 
            id="wows1_0"/></li>
        @endforeach
	
        </ul>
</div>
	<div class="ws_thumbs">
<div>
		
@foreach($productImages as $productImage)
			<a href="{{url('web')}}/media/lg/{{$productImage->image}}">
				<img src="{{url('web')}}/media/lg/{{$productImage->image}}" alt="" /></a>
@endforeach 

</div>
</div>
<div class="ws_script" style="position:absolute;left:-99%"><a href="http://wowslider.net">bootstrap slideshow</a> by WOWSlider.com v9.0m</div>
<div class="ws_shadow"></div>
</div>	
<script type="text/javascript" src="{{url('wow-slider')}}/engine1/wowslider.js"></script>
<script type="text/javascript" src="{{url('wow-slider')}}/engine1/script.js"></script>
<!-- End WOWSlider.com BODY section -->

