@extends('adm.layout.admin-index')
@section('title','Logo Manage')

@section('toast')
  @include('adm.widget.toast')
@endsection

@section('custom-js')

<script>

$(".setting").addClass( "menu-is-opening menu-open");
$(".setting a").addClass( "active-menu");

</script>
@endsection

@section('content')
@include('adm.widget.table-search-draggable')

<div class="content-wrapper">
    <section class="content-header">
      <div class="container-fluid">

    <div class="row">
          <div class="col-sm-6">
            <ol class="breadcrumb ">
              <li class="breadcrumb-item"><a href="{{route('admin.index')}}">Home</a></li>
              <li class="breadcrumb-item active">Settings / Logo Manage</li>
            </ol>
          </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
              <a class="btn btn-dark btn-sm ml-1" onclick="goBack()"> ❮ Back</a>
          </ol>
        </div>
        <div class="col-sm-6">
            <h3 class="mb-0">Settings / Logo Manage</h3>
          </div>
    </div>
    
    </section>


    <div class="card-body">
                	<div class="row">
                    <div class="col-md-10">
                    <form role="form" action="{{ route('admin.setting.seo-manage-images.store') }}" 
                    method="post" enctype="multipart/form-data">
                        {{csrf_field()}}
                    <h5 class="text-danger text-center bg-dark">Website Images</h5>
                      <table class="table">

                        <tr>
                          <td width="30%"><label for="logo">Logo</label></td>
                          <td>
                          <div class="pull-left">
                          <input type="hidden" id="page_type" value="singleUploadMultipleInput">
                          <input type="file" class="pull-left file_input" id="logo"  name="logo" 
                          value="@if(old('logo')){{old('logo')}}@else{{$socialMedia->logo}}@endif" 
                          placeholder="Website Logo" 
                          accept="image/png,image/jpeg,image/webp"/>

                          <input type="hidden" name="old_favicon" value="{{$website_favicon->option_value}}"
                          >
                          <p class="text-danger">
                          Image size for should be( 330Px   X   132Px ).<br>
                          Supportable Format: Only PNG
                        </p>

                    <span class="text-danger">@error('logo') {{$message}} @enderror</span>
                          </div>
                         <div class="pull-right">
                        
                          @if($website_logo)
                            <img class="mt-2 perview-img logo"  height="120"
                              src="{{asset('sardar')}}/img/{{$website_logo->option_value}}">
                              @else
                              <img class="perview-img logo"  height="120"
                            src="{{asset('adm')}}/img/no-item.jpeg">
                          @endif
                         
                          </div>
                          </td>
                        
                        </tr>

                        <tr>
                        <td width="30%"><label for="favicon">Favicon</label></td>
                          
                          <td>
                          <div class="pull-left">
                          <input type="file" id="favicon" class="file_input"  name="favicon" 
                          value="@if(old('favicon')){{old('favicon')}}@else{{$socialMedia->favicon}}@endif"
                          placeholder="Favicon Image"
                          accept="image/png,image/jpeg,image/webp" />

                          <input type="hidden" name="old_logo" value="{{$website_favicon->option_value}}">
                          
                        <span class="text-danger">@error('favicon') {{$message}} @enderror</span>
                          <p class="text-danger">
                          Image size for should be( 50Px   X   50Px ).<br>
                          Supportable Format: JPG,JPEG,PNG,WEBP
                        </p>
                          </div>
                         <div class="pull-right">
                        
                         @if($website_favicon)
                            <img class="mt-2 perview-img favicon"  height="120"
                              src="{{asset('sardar')}}/img/{{$website_favicon->option_value}}">
                              @else
                              <img class="perview-img favicon"  height="120"
                            src="{{asset('adm')}}/img/no-item.jpeg">
                          @endif
                         
                         
                          </div>
                          </td>
                        
                        </tr>

                        <tr>
                          <td></td>
                          <td><input type="submit" class="btn btn-success pull-right" id="btn-social-media"  name="btn-social-media" 
                          value="Update Website Images"></td>
                        </tr>
                      </table>
                    </form>

                      <form role="form" action="{{ route('admin.setting.seo-manage.store') }}" 
                      method="post" enctype="multipart/form-data">
                        {{csrf_field()}}
                      <table class="table">

                      <tr>
                        <td colspan="2">
                    <h5 class="text-danger text-center bg-dark">Logo Manage</h5></td>
                      </tr>
                        <tr>
                          <td><label for="title">Robots.txt</label></td>
                          <td>
                          
                            <div class="pull-left">
                              <input type="file" id="robots_txt"  name="robots_txt" 
                              value="@if(old('robots_txt')){{old('robots_txt')}}@endif" 
                              placeholder="Favicon Image"   accept="image/png,image/jpeg,image/webp">
                            <br>
                              
                        <span class="text-danger">@error('robots_txt') {{$message}} @enderror</span>
                              <p class="text-danger"><br>
                                Supportable Format: txt
                              </p>
                              </div>
                              <div class="">


                                @if(file_exists( public_path().'/robots.txt'))
                                <p class="badge badge-success badge-lg">
                                  Robots.txt File Available
                                </p>
                                @else
                                <p class="badge badge-danger badge-lg">
                                  Robots.txt File Not Available
                                </p>
                                @endif
                            
                              </div>

                                <a class="btn btn-sm btn-dark" target="_blank" href="{{url('')}}/robots.txt">View Robots.txt</a>
                              </td>
                        </tr>

                        <tr>
                          <td><label for="title">Sitemap File</label></td>
                          <td>
                          
                          <div class="pull-left">
                            <input type="file" id="sitemap"  name="sitemap"
                             value="@if(old('sitemap')){{old('sitemap')}}@endif"
                             accept="image/png,image/jpeg,image/webp"
                             >
                            <br>
                         <span class="text-danger">@error('sitemap') {{$message}} @enderror</span>
                            <p class="text-danger"><br>
                              Supportable Format: xml
                            </p>
                            </div>
                            <div class="">
                              @if(file_exists( public_path().'/sitemap.xml'))
                              <p class="badge badge-success badge-lg">
                                sitemap.xml File Available
                              </p>
                              @else
                              <p class="badge badge-danger badge-lg">
                                sitemap.xml File Not Available
                              </p>
                              @endif
                            
                            </div>
                                <a class="btn btn-sm btn-dark" target="_blank" href="{{url('')}}/sitemap.xml">View sitemap.xml</a>
                            </td>

                          </tr>
                        
                        <tr>
                          <td></td>
                          <td><input type="submit" class="btn btn-success pull-right" id="btn-social-media"  name="btn-social-media" 
                          value="Update SEO Files"></td>
                        </tr>

                      </table>
                      </form>
                  </div>
                </div>
                </div>
                </div>


@endsection