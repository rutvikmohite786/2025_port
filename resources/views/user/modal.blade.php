<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">{{$data->title}}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">

                    @foreach($data->images as $key => $value)
                    <div class="col-sm-4">
                        <img src="{{asset('images/portfolio'.'/'.$value->image)}}" alt="Image" class="imageport">
                    </div>
                    @endforeach

                </div>
                <p>{{$data->details->details}}</p>
                <h3>Check the following links for more detials</h3>
               <span>(1)<a href="{{$data->details->link_1}}">{{$data->details->link_1}}</a></span>
               <br>
                @if($data->details->link_2)
               <span>(2)<a href="{{$data->details->link_2}}">{{$data->details->link_2}}</a></span>
                @endif
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
