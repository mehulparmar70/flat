
          <div class="Innerinflatables_slider">
            <?php
                $clientArrs = array_chunk(json_decode(json_encode($clients), true), 2);
            ?>
            @foreach($clientArrs as $i => $clientArr)
            <div class="item">
              <div class="row">
                @foreach($clientArr as $client)
                    <div class="col-lg-12 col-md-12 col-12 d-flex justify-content-center">
                        <div class="logo-boder text-center"><img src="{{url('web')}}/media/lg/{{$client['image']}}" alt=""  title=""  class="img-fluid"></div>
                    </div>
                @endforeach
              </div>
            </div>
            @endforeach
          </div>