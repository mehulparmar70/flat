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
    
    $('.delete-form').attr('action','/admin/industries/'+ delete_id);
    $('.delete-title').html(data_title);
    $('.delete-data-image').attr('src',data_image);
  });
    $(".btnDelete").click(function(e) {
      var url = $(this).attr('data-url');
      var el = $(this);
      $.ajax({
          type: "GET",
          url: url,
          success: function(result) {
              
            toastr.error('Image Field Deleted...');
              el.closest('.update-form').remove().slideUp(1000);

          },
          error: function(result) {
              alert('error');
          }
      });
  });  
});


$(".industries").addClass( "menu-is-opening menu-open");
$(".industries a").addClass( "active-menu");
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
              <li class="breadcrumb-item active">Edit QuickView</li>
            </ol>
          </div>

        
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
          <ol class="breadcrumb float-sm-right"><a href="{{url('powerup/industries-create')}}" class="btn btn-success btn-sm ml-2"><i class="fa fa-plus" aria-hidden="true"></i>
                  &nbsp;&nbsp;Add New QuickView </a>
              <a class="btn btn-dark btn-sm ml-1" onclick="goBack()"> ❮ Back</a>
              
          </ol>
        </div>
        <div class="row mb-2">
          <div class="col-sm-12">
            <h1>Edit QuickView</h1>
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
               action="{{route('client.update', $client->id)}}">
                @csrf
                @method('PUT')

                <div class="row">
                  <div class="col-sm-3 col-md-3">
                    <div class="form-group">
                      <label for="client_name">Edit QuickView Title</label>
                      <input type="text" class="form-control" name="name" placeholder="Title" value="@if(old('name')){{old('name')}}@else{{$client->name}}@endif" required> 
                      <span class="text-danger">@error('name') {{$message}} @enderror</span>
                    </div>
                  </div>
                  <div class="col-sm-2 col-md-3">
                    <div class="form-group">
                      <label for="client_name">Edit QuickView Icon</label><br>
                      <input type="hidden" name="old_image" value="{{$client->image}}">
                      <input type="file" name="image" class="image" id="image" accept="image/png,image/jpeg,image/webp"/>
                      <span class="text-danger">@error('image') {{$message}} @enderror <br>Icon size for should be( 65Px   X   60Px ).</span><br> <!-- <br> Supportable Format: JPG,JPEG,PNG -->
                    </div>
                  </div>
                  <div class="col-sm-1 col-md-2">
                    @if($client->image)
                      <img class="mt-2"  height="120"
                        src="{{asset('web')}}/media/xs/{{$client->image}}">
                        @else
                        <img class=""  height="120"
                      src="{{asset('adm')}}/img/no-item.jpeg">
                    @endif
                  </div>
                  <div class="col-sm-3 col-md-2">
                    <div class="form-group">
                      <label for="image_alt">Edit Icon Alt</label>
                      <input type="text" class="form-control" name="image_alt" placeholder="Icon Alter Text (SEO)" value="@if(old('image_alt')){{old('image_alt')}}@else{{$client->image_alt}}@endif">          
                      <span class="text-danger">@error('image_alt') {{$message}} @enderror</span>
                    </div>
                  </div>
                  <div class="col-sm-3 col-md-2">
                    <div class="form-group">
                      <label for="image_alt">Edit Icon Title</label>
                      <input type="text" class="form-control" name="image_title" placeholder="Icon Title (SEO)" value="@if(old('image_title')){{old('image_title')}}@else{{$client->image_title}}@endif">
                      <span class="text-danger">@error('image_title') {{$message}} @enderror</span>
                    </div>
                  </div>
                  <div class="col-sm-12">
                    <label for="short_description">Edit Short Description</label>
                      <textarea type="text" class="form-control mb-3" required name="short_description" 
                          style="min-height: 200px;"
                         placeholder="Industries Short Description">@if(old('short_description')){{old('short_description')}}@else{{$client->short_description}}@endif</textarea>
                         
                    <span class="text-danger">@error('short_description') {{$message}} @enderror</span>
                  </div>
                  <div class="col-sm-12 row">
                    <div class="col-sm-4">
                      <label for="link">Link</label>
                      <input type="text" class="form-control" name="page_link" placeholder="Link" value="@if(old('page_link')){{old('page_link')}}@else{{$client->page_link}}@endif">    
                      <span class="text-danger">@error('page_link') {{$message}} @enderror</span>
                      <div class="form-check mt-4">
                          <input type="checkbox" class="form-check-input  pull-right" name="status" 
                            id="exampleCheck1"
                            
                              @if($client->status == 1)checked
                              @endif 
                              @if(old('status'))checked
                              @endif
                              />
                              
                            @if($client->status == 0)
                            <h5> <span class="badge badge-danger">Inactive</span></h5>@else<h5> <span class="badge badge-success">Active</span></h5>@endif
                      </div>
                    </div>
                    <div class="col-sm-8 text-center mb-5">
                      <label for="link">Image</label>
                      <input type="file" class="file_input" name="images[]" accept="image/png,image/jpeg,image/webp" multiple>
                    </div>
                  </div>
                </div>
                <div class="col-sm-12 res">
                </div>   
                  
              <div class="card-footer text-center">
                  <!-- <button type="submit" class="btn btn-dark"><i class="fa fa-floppy-o" aria-hidden="true"></i>
                    Save</button> -->
                    @if(request()->get('onscreenCms') == 'true')
                  <input type="hidden" name="onscreenCms" value="true">
                  <div class="col-sm-12 text-center">
                    <button type="submit" class="btn btn-info btn-save" name="close" value="1"><i class="fa fa-floppy-o" aria-hidden="true"></i>
                    Update & Exit</button>
                  </div>
                  @else
                  <div class="col-sm-12 text-center">
                    <button type="submit" class="btn btn-info btn-save"><i class="fa fa-floppy-o" aria-hidden="true"></i>
                      Update </button>
                  </div>
                  @endif
                </div>

              </form>
              </div>
              @if(isset($media))
    <div class="container-fluid">

        @foreach($media as $key => $image)
           <input type="hidden" id="{{$image->id}}">
          <form class="col-sm-12 update-form" action="{{route('update.multiple-image-field', $image->id)}}"
           method="post" id="{{$image->id}}" style="position: relative; left: 0px; top: 0px; cursor: move;">

          @csrf
              <div class="row  col-sm-12 mb-3 text-center selected-images" style="">
                <div class="col-sm-1">
                 <label for="">{{++$key}}</label>
                </div>
                <div class="col-sm-2">
                  <img src="{{url('')}}/web/media/sm/{{$image->image}}" width="140"/>
                </div>

                <div class="col-sm-3">
                    <input type="text" class="form-control form-control-sm title" name="title" value="{{$image->image_title}}" 
                    placeholder="Title" >
                </div>

                <div class="col-sm-3">
                    <input type="text" class="form-control form-control-sm alt" name="alt" placeholder="Alt Text"  value="{{$image->image_alt}}" 
                     >
                </div>

                  <div class="col-sm-3">
                  
                    <button type="save" class="btnUpload btn btn-success btn-sm mr-2" 
                      style="font-size: 15px;padding: 1px 10px;vertical-align: middle;">
                      <i class="fa fa-floppy-o" aria-hidden="true"></i> &nbsp;&nbsp;Update
                    </button>
                  
                    <a class="btnDelete btn btn-danger btn-sm mr-2" data-url="{{url('api')}}/media/media-delete/{{$image->id}}"
                      style="font-size: 15px;padding: 1px 10px;vertical-align: middle;">
                      <i class="fas fa-trash-alt"></i> &nbsp;&nbsp;Delete
                    </a>
                  </div>

                </div>

            </form>

            @endforeach
            

              </div>
    @endif
              </div>

          </div>
        </div>
      </div>
    </section>
  </div>

  @endsection
