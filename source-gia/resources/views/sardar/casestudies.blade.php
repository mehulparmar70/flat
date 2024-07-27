@extends('sardar.layout.front-index')
@section('title','About Us')

@section('custom-js')

@section('content')

<div class="our_product product_detail">
	<section class="back">
	  <div class="container">
	    <div class="back_sec">
	      <span>home &nbsp; :
          @if(getReffrel())
              <p class="breadcrumb-item"><a href="{{getReffrel()['url']}}">{{getReffrel()['name']}}</a></p>&nbsp&nbsp&nbsp:
          @endif
	        <p class="breadcrumb-item"><a href="{{ url('case-studies') }}">case studies</a></p>
        </span>
	      <a href="{{ url()->previous() }}" class="read_all"><p>back</p></a>
	    </div>
	  </div>
	</section>

	<section class="case_explore">
	  <div class="container">
	    <div class="inner_tab_blk">
	      <div class="inner_tab_blk_right">
	        <div class="image_gallery">
	          <div class="product_cat_name">
	            <img src="{{ url('') }}/sardar/images/person.png" alt="person" />
	            <p>Explore Case Studies</p>
              <div class="product_title"  @if(session('LoggedUser'))
                                            data-link="{{route('admin.casestudies-page.editor')}}"
                                        @endif></div>
	          </div>
	          <img src="{{ url('') }}/sardar/images/banner2.jpg" alt="banner" / class="case-img">
	        </div>
	      </div>
	      <div class="inner_tab_blk_left">
	        @include('sardar.widget.contact-form1')
	      </div>
	    </div>
	  </div>
	</section>

	<section class="product_video case_studies">
    <div class="container">
      <div class="big_text big_flex">
        <a href="#" class="orange-title">explore case studies</a>
        <span>  {{ isset($pageData->page_title)?$pageData->page_title:'' }}
              <div class="product_title"  @if(session('LoggedUser'))
                                            data-link="{{route('admin.casestudies-page.editor')}}"
                                        @endif></div>
             </span>
      </div>
      <div class="video_product">
        @foreach($caseStudies as $casestudie)
        <div class="product_item">
          <h4 >{{ $casestudie->title }}<div class="onscreen_popup_crud" @if(session('LoggedUser'))
                data-create-link="{{route('casestudies.create')}}?onscreenCms=true"
                data-link="{{route('casestudies.edit', $casestudie->id)}}"
                data-delete-link="{{route('admin.casestudies.item.delete',$casestudie->id)}}"
              @endif></div></h4>
          <!-- <h5>title here</h5> -->
          <a href="{{ url('case-studies') }}/{{$casestudie->slug}}" class="video_text">
            <img src="{{url('web')}}/media/md/{{$casestudie->image}}" />
            <p>
              {!! strip_tags($casestudie->short_description) !!}
              <span>Read More</span>
            </p>
          </a>
        </div>
        @endforeach
      </div>
      {{ $caseStudies->links("sardar.widget.pagination") }}
      <!-- <ul id="pagination">
        <li><a class="" href="#">«</a></li>
        <li><a href="#">1</a></li>
        <li><a href="#" class="active">2</a></li>
        <li><a href="#">3</a></li>
        <li><a href="#">4</a></li>
        <li><a href="#">5</a></li>
        <li><a href="#">6</a></li>
        <li><a href="#">7</a></li>
        <li><a href="#">»</a></li>
      </ul> -->
    </div>
  </section>

  <!-- room -->
  <section class="banner_slider banner_margin">
    <div class="container">
    	@include('sardar.widget.industries-serve')
    </div>
  </section>

  <section class="update_slider update_left">
    <div class="container">
      <div class="client_line">
      	@include('sardar.widget.newsleters-slider')
        @include('sardar.widget.casestudy-slider')
      </div>
    </div>
  </section>
</div>
@endsection