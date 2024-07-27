@extends('sardar.layout.front-index')
@section('title','Product Page')

@section('custom-js')
<script>
	$(".product").addClass( "active");

    $(window).scroll(function () {
    if($(window).scrollTop() > 10) {
      $("#head").addClass('sticky');
    } else {
      $("#head").removeClass('sticky');
    }
  });
  
$(document).ready(function () {
  $( ".lazyload" ).css('overflow', 'auto');
  $( ".loader" ).hide();
});

function goBack() {
  window.history.back();
}
</script>

@endsection
@section('content')

<div class="our_product product_detail">
<section class="case_explore">
        <div class="container">
          <div class="big_text big_flex">
            <a href="#">Search Result : {{ $searchTitle }}</a>
            
          </div>
          <div class="inner_tab_blk">
            @if(count($searchData) > 0)
            <div class="inner_tab_blk_right">
              <div class="description">
                <div class="description_wrap">
                  @foreach($searchData as $key => $result)
                  <a href="{{ $result['Slug'] }}">
                  <div class="description_blk">
                    <div class="description_blk_img">
                      <img src="{{$result['Image']}}">
                    </div>
                    <div class="description_blk_item_right">
                    <h2>{{ $result['Title'] }}</h2>
                      <p style="padding-top:20px;">
                        {!! $result['Description'] !!}
                      </p>
                    </div>
                  </div>
                  </a>
                  @endforeach
                </div>
              </div>
            </div>
            @else
            <div class="inner_tab_blk_right">
              <div class="description">
                <div class="description_wrap">
                  <div class="description_blk">
                    <h2>No Result Found</h2>
                  </div>
                </div>
              </div>
            </div>
            @endif
            <div class="inner_tab_blk_left">
               @include('sardar.widget.contact-form1')
            </div>
          </div>
        </div>
      </section>
</div>
@endsection