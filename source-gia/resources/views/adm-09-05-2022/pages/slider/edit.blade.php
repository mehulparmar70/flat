@extends('adm.layout.admin-index')
@section('title','Dashboard - Charotar Corporation')

@section('toast')
  @include('adm.widget.toast')
@endsection

@section('custom-js')
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.24/themes/smoothness/jquery-ui.css" />
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.24/jquery-ui.min.js"></script>

<script>
$( document ).ready(function() {
  $(".del-modal").click(function(){
    var delete_id = $(this).attr('data-id');
    var data_title = $(this).attr('data-title');
    var data_image = $(this).attr('data-image');
    
    $('.delete-form').attr('action', delete_id);
    $('.delete-title').html(data_title);
    $('.delete-data-image').attr('src',data_image);
  });  
});


$(".slider").addClass( "menu-is-opening menu-open");
$(".slider a").addClass( "active-menu");

</script>
<script type="text/javascript">

$( ".row_position" ).sortable({
      stop: function() {
			var selectedData = new Array();
            $('.row_position>tr').each(function() {
                selectedData.push($(this).attr("id"));
            });
            console.log(selectedData);
            updateOrder(selectedData);
        }
  });


function updateOrder(data) {
  $.ajax({
      url:"{{url('api')}}/admin/slider/update-status",
      type:'post',
      data:{position:data},
      success:function(result){
        console.log(result);
      }
  })
}


function updateStatus($id) {
  $.ajax({
      url:"{{route('status.update')}}",
      type:'post',
      data:{id:$id, table: 'slider'},
      success:function(result){
        // console.log(result);
        location.reload();

      }
  })
}

</script>
@endsection

@section('content')
@include('adm.widget.table-search-draggable')
<div class="content-wrapper">
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Edit : Slider</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('admin.index')}}">Home</a></li>
              <li class="breadcrumb-item active">Edit Sliders</li>
              <a href="{{route('slider.index')}}" class="btn btn-success btn-sm ml-2"><i class="fa fa-plus" aria-hidden="true"></i>
                &nbsp;&nbsp;Add New Sliders </a>

            </ol>
          </div>
        </div>
      </div>
    </section>

    <section class="content">
      <div class="container-fluid">

        <div class="card card-default">
          <div class="card-body">
            <div class="form-horizontal row">
            
            <div class="col-md-4 card card-info">
              <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">Edit Slider</h3>
                <div id="example1_wrapper">

                </div>
              </div>
              <form method="post" enctype="multipart/form-data"
               class="form-horizontal" action="{{route('slider.update', $slider->id)}}">
                @csrf
                @method('PUT')

                <div class="card-body p-2 pt-4">
                  <div class="form-group row">
                    <div class="col-sm-12">
                    <input type="hidden" class="form-control">

                      <input type="text" class="form-control" name="title"
                         placeholder="Slider Title" 
                         value="@if(old('title')){{old('title')}}@else{{$slider->title}}@endif">
                         
                      <span class="text-danger">@error('title') {{$message}} @enderror</span>
                    </div>
                  </div> 
                  
                  <div class="form-group row">
                    <div class="col-sm-12">
                      <textarea class="form-control" name="description"
                         placeholder="Slider Alt Text / Description">@if(old('description')){{old('description')}}@else{{$slider->description}}@endif</textarea>

                      <span class="text-danger">@error('description') {{$message}} @enderror</span>
                    </div>
                  </div>
                  
                  <div class="form-group row">
                    <div class="col-sm-12">
                      <input type="url" class="form-control" name="url"
                         placeholder="Slider Url"
                         value="@if(old('url')){{old('url')}}@else{{$slider->url}}@endif">

                      <span class="text-danger">@error('url') {{$message}} @enderror</span>
                    </div>
                  </div>

                  <!-- <div class="form-group row">
                    <div class="col-sm-12">
                      <textarea class="form-control" name="youtube_embed"
                         placeholder="Add Youtube Embed Code"></textarea>

                      <span class="text-danger">@error('youtube_embed') {{$message}} @enderror</span>
                    </div>
                  </div> -->
                  
                  
                <div class="form-group row">
                    
                    <div class="col-sm-12">
                      <input type="file" class="" 
                        name="image" placeholder="Slider Image"
                         accept="image/png,image/jpeg" />

                      <span class="text-danger">@error('image') {{$message}} @enderror</span>

                        <p class="text-danger">
                          Image size for should be( 1351Px   X   700Px ).<br>
                          Supportable Format: JPG,JPEG,PNG
                        </p>
                        
                          @if($slider->image)
                            <img class="mt-2"  height="120"
                              src="{{asset('web')}}/media/xs/{{$slider->image}}">
                              @else
                              <img class=""  height="120"
                            src="{{asset('adm')}}/img/no-item.jpeg">
                          @endif
                        <input type="hidden" name="old_image" value="{{$slider->image}}">

                      </div>
                  </div>

                  

                    
                    <!-- <div class="form-group">
                      <div class="custom-control custom-switch custom-switch-off-danger custom-switch-on-success">
                        <input type="checkbox" class="custom-control-input status-switch" 
                          name="status" value="0" id="customSwitch1">
                        <label class="custom-control-label float-right" for="customSwitch1">Status</label>
                      </div>
                    </div> -->


                    <div class="form-check">
                        <input type="checkbox" class="form-check-input  pull-right" name="status" 
                        id="exampleCheck1"
                          @if($slider->status == 1)checked
                          @endif 
                          @if(old('status'))checked
                          @endif
                          />
                          
                        @if($slider->status == 0)
                        <h5> <span class="badge badge-danger">Inactive</span></h5>@else<h5> <span class="badge badge-success">Active</span></h5>@endif</td>
                    </div>	
          
                  </div>
                </div>

                <div class="card-footer">
                  <button type="submit" class="btn btn-info">Save Slider</button>
                </div>
              </form>
            </div>

            
            <div class="col-md-8 card card-info">
              <div class="card card-dark">
              <div class="card-header">
                <h3 class="card-title">Slider List</h3>
              </div>
              
            <div class="card">
              <div class="card-body">
                <table id="example2 " class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Id</th>
                    <th>Image</th>
                    <th>Title</th>
                    <th>Descriptions</th>
                    <th>Status</th>
                    <th>Action</th>
                  </tr>
                  </thead>

                  <tbody class="row_position">
                    @foreach($sliders as $key => $slider)
                      <tr id="{{$slider->id}}">
                      <td>{{$slider->slider_no}}</td>
                        <td><img width="100" src="{{url('web')}}/media/sm/{{$slider->image}}"></td>
                        <td>{{$slider->title}}</td>
                        <td>{{$slider->description}}</td>
                        <td>
                        
                        
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input  pull-right" name="status" 
                        id="exampleCheck1"
                        
                          onClick="updateStatus({{$slider->id}})"
                          @if($slider->status == 1)checked
                          @endif 
                          @if(old('status'))checked
                          @endif
                          />
                          
                        @if($slider->status == 0)
                        <h5 for="status"> <span class="badge badge-danger">Inactive</span></h5>@else<h5> <span class="badge badge-success">Active</span></h5>@endif</td>
                    </div>	
                        
                        </td>
                        
                        <td>
                        
                          <a href="{{route('slider.edit',$slider->id)}}" class="btn btn-xs btn-info float-left mr-2"  title="Edit slider"><i class="far fa-edit"></i></a>
                          {{-- <a href="{{route('slider-image.edit',$slider->id)}}" class="btn btn-xs btn-info float-left mr-2"  title="Upload slider Images"><i class="far fa-edit"></i></a> --}}
                          <button class="btn btn-xs btn-danger del-modal float-left"  title="Delete slider"  data-id="{{route('admin.index')}}/slider/{{$slider->id}}" 
                            data-image="{{url('web')}}/media/sm/{{ $slider->image}}" data-title="{{ $slider->title}}"  data-toggle="modal" data-target="#modal-default"><i class="fas fa-trash-alt"></i>
                          </button>
                      
                      
                      </td>

                      </tr>
                    @endforeach

                  </tbody>
                  <tfoot>
                  <tr>
                    <th>Id</th>
                    <th>Image</th>
                    <th>Title</th>
                    <th>Descriptions</th>
                    <th>Status</th>
                    <th>Action</th>
                  </tr>
                  </tfoot>
                </table>
                
              </div>
            </div>

            </div>

            
          </div>

        </div>


      </div>
    </section>
  </div>


  <div class="modal fade" id="modal-default">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Delete Slider</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
            <label>Slider Name</label>
            <h5 class="modal-title delete-title">Delete Slider</h5>
            <img  class="col-md-8 modal-title delete-data-image" src="">
            </div>
            <div class="modal-footer justify-content-between d-block ">
              
            <form class="delete-form float-right" action="" method="POST">
                    @method('DELETE')
                    @csrf
              <button type="button" class="btn btn-default mr-4" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-danger float-right" title="Delete Record"><i class="fas fa-trash-alt"></i> Delete</button>
              

            </form>
            </div>
          </div>
        </div>
      </div>


  @endsection