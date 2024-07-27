@extends('adm.layout.admin-index')
@section('title','Dashboard - Charotar Corporation')

@section('toast')
  @include('adm.widget.toast')
@endsection

@section('custom-js')


<script>

    $( document ).ready(function() {
    $(".del-modal").click(function(){
    var delete_id = $(this).attr('data-id');
    var data_title = $(this).attr('data-title');
    var data_image = $(this).attr('data-image');
    
    $('.delete-form').attr('action','/admin/casestudies/'+ delete_id);
    $('.delete-title').html(data_title);
    $('.delete-data-image').attr('src',data_image);
  });  
});

$(".casestudies").addClass( "menu-is-opening menu-open");
$(".casestudies a").addClass( "active-menu");

var dataCounter = 1;
$('.add-more').click(function () { 
  // alert('text');

 var imageBlockCode = $('.image-container').html();

 dataCounter = Number(dataCounter) + 1;
  var data = ` 
  <div class="row col-sm-12 p-0 image-block mb-3">
      <div class="col-sm-4">
          <input type="file" class="image" name="images[]"  required   accept="image/png,image/jpeg,image/webp">
      </div>

      <div class="col-sm-4">
          <input type="text" class="form-control form-control-sm title" name="img_title[]" placeholder="Title">
      </div>

      <div class="col-sm-3 p-0">
          <input type="text" class="form-control form-control-sm alt" name="img_alt[]" placeholder="Alt Text">
      </div>

      <div class="col-sm-1 p-0 delField" style="margin: auto;">
        <button class="btn btn-sm btn-danger ml-3 delField" type="button">X</button>
      </div>
  </div>
  `;

  $('.res').append(data);
  
});
</script>

@endsection
@section('content')

<div class="content-wrapper">
    <section class="content-header">

    <div class="container-fluid">
    
    <div class="row">
      
      <div class="col-sm-6">
            <ol class="breadcrumb ">
              <li class="breadcrumb-item"><a href="{{route('admin.index')}}">Home</a></li>
              <li class="breadcrumb-item active">Edit CaseStudies</li>
            </ol>
          </div>
        
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
          <ol class="breadcrumb float-sm-right"><a href="{{route('casestudies.index')}}" class="btn btn-success btn-sm ml-2"><i class="fa fa-plus" aria-hidden="true"></i>
                  &nbsp;&nbsp;Manage CaseStudies </a>
              <a class="btn btn-dark btn-sm ml-1" onclick="goBack()"> ❮ Back</a>
          </ol>
        </div>
        <div class="row mb-2">
          <div class="col-sm-12">
            <h1>Edit CaseStudies</h1>
          </div>
        </div>
    </div>

      </div>

    </section>

    <section class="content">
      <div class="container-fluid">
        <div class="card card-default">
        
          <div class="card-body">
            <div class="form-horizontal row">
            
            <div class="col-md-12">
                 
              <form enctype="multipart/form-data" method="post" class="form-horizontal"  
                action="{{route('casestudies.update', $testimonial->id)}}">
                @csrf

                @method('PUT')
                @if(isset($_REQUEST['onscreenCms']) && $_REQUEST['onscreenCms'] == 'true')
                        <input type="hidden" name="onscreenCms" value="true">
                    @endif
                <div class="form-group">
                  <div class="col-md-12 col-sm-12 row">
                    <div class="col-sm-6">
                      <label for="title">Edit CaseStudies Title</label>
                      <input type="text" class="form-control" name="title" placeholder="Title" required value="@if(old('title')){{old('title')}}@else{{$testimonial->title}}@endif">   
                      <span class="text-danger">@error('title') {{$message}} @enderror</span>
                    </div>
                    <div class="col-sm-6">
                      <label for="short_description">Edit CaseStudies Page Url</label>
                      <input type="text" class="form-control" name="slug" placeholder="URL label" required value="@if(old('slug')){{old('slug')}}@else{{$testimonial->slug}}@endif">
                      <span class="text-danger">@error('slug') {{$message}} @enderror</span>
                    </div>
                    <div class="col-sm-12 mt-3">
                      <label for="full_description">Edit CaseStudies Description</label>
                      <textarea id="editor" name="short_description" placeholder="Testimonial Descriptions">@if(old('short_description')){{old('short_description')}}@else{{$testimonial->short_description}}@endif</textarea>
                                    
                      <span class="text-danger">@error('full_description') {{$message}} @enderror</span>
                    </div>
                  </div>
                  <div class="col-md-12 col-sm-12 row mt-4">
                    <div class="col-sm-6">
                      <div class="col-sm-12 row">
                        <div class="col-md-12 col-sm-12 col-lg-12">
                          <input type="hidden" id="page_type" value="singleUpload">
                          <label for="image_alt">Upload Thumb Image</label><br>
                          <input type="hidden" name="old_image" value="{{$testimonial->image}}">
                          <input type="file" name="image" class="file_input " id="image" accept="image/png,image/jpeg,image/webp"/>
                          <p class="text-danger">
                            <span class="text-danger">@error('image') {{$message}} @enderror</span>
                            Minimum Image Size Should be : 612px X 858px
                          </p>
                        </div>
                        <div class="col-md-12 col-sm-12 col-lg-12">
                          @if($testimonial->image)
                          <div class="image-area">
                            <img class="elevation-2 perview-img"  height="120"src="{{asset('web')}}/media/xs/{{$testimonial->image}}"> 
                            <a class="remove-image" href="#" data-id="{{ $testimonial->id }}" data-table="case_studies" data-field="image" data-url="{{url('api')}}/media/image-delete/{{$testimonial->id}}" style="display: inline; position: absolute; top: -10px; border-radius: 10em; padding: 2px 6px 3px; text-decoration: none; font: 700 21px/20px sans-serif;left: 105px;"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                          </div>
                              @else
                              <img class="elevation-2 perview-img"  height="120"
                            src="{{asset('adm')}}/img/no-item.jpeg">
                          @endif
                        </div>
                      </div>
                      <div class="col-sm-12 row">
                        <div class="col-sm-6">
                          <label for="image_alt">Image Alt</label>
                          <input type="text" class="form-control" name="image_alt" 
                            placeholder="Image Alter Text (SEO)" value="@if(old('image_alt')){{old('image_alt')}}@else{{$testimonial->image_alt}}@endif">
                            
                          <span class="text-danger">@error('image_alt') {{$message}} @enderror</span>
                        </div>
                        <div class="col-sm-6">
                          <label for="image_title">Image Title</label>
                          <input type="text" class="form-control" name="image_title" 
                            placeholder="Image Title (SEO)" value="@if(old('image_title')){{old('image_title')}}@else{{$testimonial->image_title}}@endif">
                            
                          <span class="text-danger">@error('image_title') {{$message}} @enderror</span>
                        </div>
                      </div>
                      <div class="col-sm-8 mt-3">
                        <label for="image_alt">Upload Pdf</label><br>
                        <input type="file" name="file" class="file " id="file"
                          accept="pdf" />
                        <input type="hidden" name="old_file" value="{{$testimonial->file_name}}">
                        @if($testimonial->file_name)
                            <a href="{{asset('web')}}/casestudies/{{$testimonial->file_name}}" target="_blank">View Case Studies</a>
                        @endif
                        <p class="text-danger">
                        <span class="text-danger">@error('image') {{$message}} @enderror</span>
                              Supported Format PDF only
                        </p>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="col-sm-12">
                      <label class="text-dark" for="search_index">Edit SEO CONTENTS</label>
                      <div class="form-group">
                          <input type="text" class="form-control" name="meta_title" 
                            placeholder="Seo Title" value="@if(old('meta_title')){{old('meta_title')}}@else{{$testimonial->meta_title}}@endif">
                          <span class="text-danger">@error('meta_title') {{$message}} @enderror</span>
                      </div>
                      <div class="form-group">
                        <input type="text" class="form-control" name="meta_keyword" 
                          placeholder="Seo Keywords with ," value="@if(old('meta_keyword')){{old('meta_keyword')}}@else{{$testimonial->meta_keyword}}@endif">
                        <span class="text-danger">@error('meta_keyword') {{$message}} @enderror</span>
                      </div>
                      <div class="form-group">
                        <textarea type="text" class="form-control" name="meta_description" 
                          placeholder="Seo Description">@if(old('meta_description')){{old('meta_description')}}@else{{$testimonial->meta_description}}@endif</textarea>
                        <span class="text-danger">@error('meta_description') {{$message}} @enderror</span>
                      </div>
                      <div class="col-sm-12 row">
                        <div class="col-sm-6">
                          <label  class="text-dark" class="text-dark" for="search_index">Allow search engines?</label>
                          <select class="form-control" name="search_index">
                              <option value="1" @if($testimonial->search_index == 1)
                                  selected
                              @endif>Yes</option>
                              <option value="0" @if($testimonial->search_index == 0)
                                  selected
                              @endif>No</option>
                          </select>
                        </div>
                        <div class="col-sm-6">
                          <label  class="text-dark" class="text-dark" for="search_follow">Follow links?</label>
                          <select class="form-control" name="search_follow">
                            <option value="1" @if($testimonial->search_follow == 1)
                                    selected
                                @endif>Yes</option>
                            <option value="0" @if($testimonial->search_follow == 0)
                                  selected
                              @endif>No</option>
                          </select>
                        </div>
                      </div>
                      <div class="col-sm-12 form-group mt-3">
                        <label  class="text-dark" for="canonical_url">Canonical URL</label>
                        <input type="text" class="form-control" name="canonical_url" 
                          placeholder="Canonical URL" value="@if(old('canonical_url')){{old('canonical_url')}}@else{{$testimonial->canonical_url}}@endif">
                        <span class="text-dark"></span>
                      </div>
                      <div class="col-sm-12 row">
                            <div class="form-check">
                            <input type="checkbox" class="form-check-input  pull-right" name="status" 
      id="exampleCheck1"
      
        @if($testimonial->status == 1)checked
        @endif 
        @if(old('status'))checked
        @endif
        />
        
      @if($testimonial->status == 0)
      <h5> <span class="badge badge-danger">Inactive</span></h5>@else<h5> <span class="badge badge-success">Active</span></h5>@endif</div>
                      </div>
                    </div>
                    </div>
                  </div>

                </div>
                <div class="card-footer text-center">
                  <button type="submit" class="btn btn-dark"><i class="fa fa-floppy-o" aria-hidden="true"></i>
                    Save</button>
                </div>
              </form>
              </div>



          </div>
        </div>


      </div>
    </section>
  </div>

  @endsection
