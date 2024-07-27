@extends('sardar.layout.front-index')
@section('title','Product Details')

@section('custom-js')

<script>
$(document).ready(function () {
  $( ".lazyload" ).css('overflow', 'auto');
  $( ".loader" ).hide();
});
function goBack() {
  window.history.back();
}
  
  $(document).ready(function () {
  	$(".top-content-pages").hide();
  });

	$(".newsletter").addClass( "active");
  
</script>
@endsection
@section('content')
<div class="our_product product_detail">
  <!-- back -->
  <section class="back">
    <div class="container">
      <div class="back_sec">
        <span>home &nbsp; :
          @if(getReffrel())
            <p class="breadcrumb-item"><a href="{{getReffrel()['url']}}">{{getReffrel()['name']}}</a></p>&nbsp&nbsp&nbsp:
          @endif
          <!-- <p class="breadcrumb-item"><a href="{{ url('news-letters') }}">NEWSLETTERS</a></p> -->
          <p class="breadcrumb-item"><a href="{{ url($blogDetail->slug) }}">{{$blogDetail->title}}</a></p>
        </span>
        <a href="{{ url('news-letters') }}" class="read_all"><p>back</p></a>
      </div>
    </div>
  </section>

  <section class="case_explore">
        <div class="container">
          <div class="big_text big_flex">
            <a href="#" class="orange-title">newsletters</a>
            <span
              >always dedicated and devoted
              <p>( CUSTOM TEXT HERE )</p></span
            >
          </div>
          <div class="inner_tab_blk">
            <div class="inner_tab_blk_right">
              <div class="description">
                <div class="description_wrap">
                  <div class="big_text gallert_text" style="margin-top: 30px; margin-bottom: 0px">
                    <a href="#">{{ $blogDetail->title }}</a>
                    <div class="crud fontSize" @if(session('LoggedUser'))
                data-create="{{route('newsletter.create')}}"
                data-link="{{route('newsletter.edit', $blogDetail->id)}}"
                data-delete-link="{{route('admin.index')}}/newsletter/delete/{{ $blogDetail->id}}"
              @endif></div>
                  </div>

                  <div class="description_blk_item">
                    <p>
                      {!! html_entity_decode($blogDetail->full_description) !!}
                    </p>
                  </div>
                </div>
              </div>
            </div>
            <div class="inner_tab_blk_left">
              @include('sardar.widget.contact-form1')
            </div>
          </div>
        </div>
      </section>

  <section class="product_video case_studies news_letters news_letters_details">
    <div class="container">
      <div class="newsletters_blk">
        <div
          class="big_text gallert_text"
          style="margin-top: 30px; margin-bottom: 0px"
        >
          <a href="#">more NewsLetters</a>
        </div>
        @foreach($latestUpdates as $newsletterList)
        <div class="product_item">
          <h4>{{ $newsletterList->title }}<div class="crud" style="@if(session('LoggedUser')) position: absolute;margin-left: 74%;bottom: 95%;
          @endif" @if(session('LoggedUser'))
            data-link="{{route('newsletter.edit', $newsletterList->id)}}"
            data-delete-link="{{route('admin.index')}}/newsletter/delete/{{ $newsletterList->id}}"
          @endif></div></h4>
          <!-- <h5>title here</h5> -->
          <a href="{{ url('news-letters') }}/{{$newsletterList->slug}}" class="video_text">
            <img src="{{url('web')}}/media/md/{{$newsletterList->image}}" />
          </a>
        </div>
        @endforeach
      </div>
    </div>
  </section>
  <!-- client section  -->
  <section class="client_slider">
    <div class="container">
      <div class="client_line">
          @include('sardar.widget.client-slider2')
          @include('sardar.widget.awards-slider')
      </div>
    </div>
  </section>

  <section class="banner_slider banner_margin">
    <div class="container">
      @include('sardar.widget.industries-serve-with-title')
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