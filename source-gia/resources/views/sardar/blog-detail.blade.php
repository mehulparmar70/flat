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

  $(".blog").addClass( "active");
  
</script>
@endsection
@section('content')
<div class="our_product product_detail">
  <!-- back -->
  <section class="back">
    <div class="container">
      <div class="back_sec">
        <span
          >home &nbsp; :
          <p>Blog</p></span
        >
        <a href="{{ url()->previous() }}" class="read_all"><p>back</p></a>
      </div>
    </div>
  </section>

  <section class="case_explore">
    <div class="container">
      <div class="inner_tab_blk">
        <div class="inner_tab_blk_right">
          <div class="description">
            <div class="description_wrap">
              <div class="big_text gallert_text" style="margin-top: 30px; margin-bottom: 0px" >
                <a href="#">{{$blogDetail->title}}</a>
              </div>
              <div class="description_blk onscreen_blog_detail_page" @if(session('LoggedUser'))
                  data-link="{{route('blog.edit', $blogDetail->id)}}"
                @endif>
                <div class="description_blk_item">
                  {!! html_entity_decode($blogDetail->full_description) !!}
                </div>
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

  <section class="product_video case_studies details_updates">
    <div class="container">
      <div class="big_text">
        <a href="#">more updates</a>
      </div>
      <div class="video_product update_blk_item">
        <div class="client_line">
          @foreach($latestUpdates as $updatesList)
          <div class="update_item">
            <h2>{{$updatesList->title}}</h2>
            <a class="update_inner match" href="{{ url('updates') }}/{{$updatesList->slug}}">
              <img src="{{ url('web') }}/media/md/{{ $updatesList->image }}" />
              <p>
                {!! html_entity_decode($updatesList->short_description) !!}
                <span><img src="{{ url('sardar') }}/images/osearch.png" /> &nbsp; click toview</span>
              </p>
            </a>
          </div>
          @endforeach
        </div>
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

  <section class="gray">
    <div class="container">
      @include('sardar.widget.experts')
    </div>
  </section>

  <section class="banner_slider banner_margin">
    <div class="container">
      <div class="big_text">
        <a href="#">industries we serve</a>
        <span>always dedicated and devoted </span>
      </div>
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