<div id="{{$hash}}" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title"><strong>{{$service->title}}</strong> {{number_format($service->price/100, 2, '.', '')}}€ <input onClick="addToCart('{{$service->id}}')" type="button" class="btn btn-info" value="Į krepšelį"></h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <p>{!! nl2br(preg_replace('/&./', '', $service->description)) !!}</p>
            </div>
        </div>
    </div>
</div>
